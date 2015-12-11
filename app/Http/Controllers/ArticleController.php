<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{

    /**
     * Display a listing of Articles for the selected category.
     * If no category is selected, display all articles.
     * @return \Illuminate\Http\Response
     *------------------------------------------------------*/
    public function index(Request $request, $main_category = null)
    {

      /* Eager load articles with categories, most recent first. */
      $articles = \App\Article::with('categories')->orderBy('id','DESC')->get();

      /* If a category is given, filter $articles,otherwise display all articles
      We use $selected_articles to track the ID's of the articles that apply. */
      if(!$main_category){
         $title = 'All Articles';
      } else {
        /* Find the articles that belong to the category selected */
        $title = 'Articles to nurture your '.ucfirst ($main_category);
        $articleModel = new \App\Article();
        $articles = $articleModel->filterArticles($articles, $main_category);
      }
      return view("articles.index", compact('articles','title'));
    }

    /**
     * Display articles that belong to logged in user.
     *
     * @return \Illuminate\Http\Response
     *---------------------------------------------------------*/
    public function showOwnArticles(Request $request)
    {
      // USE our ORM book model to retrieve all the articles, pass to view
      $show_edit = TRUE;
      $show_delete = TRUE;
      $title = "Articles owned by ".\Auth::user()->name;
      $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
      return view("articles.index", compact('articles','show_edit','title'));
    }


    /**
     * Show the form for creating a new Article.
     *
     * @return \Illuminate\Http\Response
     *----------------------------------------------------*/
    public function create(Request $request)
    {
      /* Get list of all categories */
      $categoryModel = new \App\Category();
      $categories_for_checkboxes = $categoryModel->getCategoriesForCheckboxes();


      /* Author is logged-in user*/
      $author = \Auth::user();

      /* Instantiate a new Model object.  We will then pass it to the view
      to re-populate fields in case validation fails.  The view needs to use
      Form::model to get the values automatically */
      $article = new \App\Article();

      return view('articles.create', compact('article','categories_for_checkboxes', 'author'));
    }

    /**
     * Store a newly created article in the database.
     * We use ArticleRequest to process custom validation rules
     * @param  \Illuminate\Http\Request\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     *-------------------------------------------------------------*/

    //public function store(ArticleRequest $request)
    public function store(Request $request)
    {

      /* Instantiate a new article . Set the parameters revering them
      from the request. We then validate and save the article in the database
      if validation passes*/
      $article = new \App\Article();
      $article->title = $request->title;
      $title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      $article->author_id = $request->author_id;
          //To-Do: move four lines above to model or use mass assignment

      /* Custom Validator.  If rules are not met we get a list of all values
      to and pass them to the create view to repopulate the original fields.
      FOr t his to work, the view needs to use Form::Model
      To-do: move to ArticleRequest. */
      $rules = [
        'title' => 'required|min:10',
        'bottomline' => 'required|max:150',
        'body' => 'required|min:5|max:2500',
      ];
      $validator = \Validator::make($request->all(), $rules);
      if ($validator->fails())
      {
        $categoryModel = new \App\Category();
        $categories_for_checkboxes = $categoryModel->getCategoriesForCheckboxes();
        $author = $article->author;
        return view("articles.create", compact('article','categories_for_checkboxes', 'author'))->withErrors($validator->errors());
      }

      $article->save();

      /* Now that the article is saved, we loop categories and save in pivot
      table. Since articles and categories have a many to many relationship
      we use the sync method  */
      if ($request->categories){
        $categories = $request->categories;
      }
      else {
        $categories = [];
      }
      $article->categories()->sync($categories);

      /* Update sources.*/
      $sourceModel = new \App\Source();
      $sourceModel->updateArticleSources($article->sources, $request, $article->id);


      /* Confirm article was saved.  Send to edit selection page */
      \Session::flash('flash_message','Your article was saved.');
      $show_edit = TRUE;
      $title = "Articles owned by ".\Auth::user()->name;
      $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
      return view("articles.index", compact('article','articles','show_edit','title'));

    }

    /**
     * Display all articles
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *-----------------------------------------------------------*/
    public function show($id = null)
    {

      $article = \App\Article::with('sources')->find($id);

      /* Get sources currently assigned to  this Article */
      $sources_for_article = [];
      foreach ($article->sources as $source) {
        $sources_for_article[] = $source;
      }

      return view('articles.show', compact('article', 'id','sources_for_article'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /* Get Article to Edit*/
      $article = \App\Article::with('categories','author','sources')->find($id);
      if(is_null($article)) {
          \Session::flash('flash_message','Article not found.');
          return redirect('\articles');
      }

      /* Get list of all categories */
      $categoryModel = new \App\Category();
      $categories_for_checkboxes = $categoryModel->getCategoriesForCheckboxes();

      /* Get categories currently assigned to  this Article */
      $categories_for_article = [];
      foreach ($article->categories as $category) {
        $categories_for_article[] = $category->id;
      }

      /* Get sources currently assigned to  this Article */
      $sources_for_article = [];
      foreach ($article->sources as $source) {
        $sources_for_article[] = $source;
      }

      /* Get Author */
      $author = $article->author;
      return view('articles.edit', compact('article','categories_for_checkboxes',
      'categories_for_article','sources_for_article','author'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      /* Make sure submitted values are valid */
      $this->validate($request, [
          'title' => 'required|min:5',
          'bottomline' => 'required|max:150',
          'body' => 'required|min:5|max:2500',
      ]);

      /* Get Article to be updated.  Get new values from
      $request and update the articles table.*/
      $article = \App\Article::with('sources')->find($request->id);
      $article->title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      $article->author_id = $request->author_id;
      $article->update();

      /* Save categories in pivot table.  Use sync method
      since we have a many to many relationship */
      if ($request->categories){
        $categories = $request->categories;
      }
      else {
        $categories = [];
      }
      $article->categories()->sync($categories);

      /* Update sources.*/
      $sourceModel = new \App\Source();
      $sourceModel->updateArticleSources($article->sources, $request,$request->id);

      /* Confirm article was updated */
      \Session::flash('flash_message','Your article was updated.');

      /* Send to edit selection page */
      $show_edit = TRUE;
      $title = "Articles owned by ".\Auth::user()->name;
      $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
      return view("articles.index", compact('articles','show_edit','title'));
    }


    /**
     * Confirm deletion of an article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getConfirmDelete($id)
    {
        $article = \App\Article::find($id);
        return view('articles.delete',compact('article'));
    }

    /**
     * Delete the specified article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /* Set title for return page*/
      $title = 'All Articles';

      /* Find article, redirect to welcome page if article not found */
      $article = \App\Article::find($id);
      if(is_null($article)){
        \Session::flash('flash_message'.'Article not found');
        $articles = \App\Article::orderBy('id','DESC')->get();
        return redirect('/');
      }

      /* If article found remove references and delete */
      if($article->categories()){
        $article->categories()->detach();

        
      }
      \Session::flash('flash_message',' Your article was deleted.');
      $article->delete();

      /* Get updated list of articles and send to edit selection page */
      $show_edit = TRUE;
      $title = "Articles owned by ".\Auth::user()->name;
      $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
      return view("articles.index", compact('articles','show_edit','title'));


    }
}
