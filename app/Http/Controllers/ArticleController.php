<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
      $selected_articles = [];
      if(!$main_category){
         $title = 'All Articles';
      } else {
        /* Find the articles that belong to the category selected */
        $title = 'Articles to nurture your '.ucfirst ($main_category);
        foreach($articles as $article) {
          foreach($article->categories as $category) {
            if($category->name==$main_category){
              global $selected_articles; // Refer to previously defined variable
              $selected_articles[] = $article->id;
            }
          }
        }
        /* Filter collection to selected articles with a call in function*/
       $articles = $articles->filter(function ($article) {
           global $selected_articles;
           return in_array($article->id, $selected_articles);
       });
      }
      /* Make upper case for proper display.To-Do: move to CSS */
    //  $main_category =  ucfirst(trans($main_category));

      return view("articles.index", compact('articles','title'));
    }

    /**
     * Show the form for creating a new resource.
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

      return view('articles.create', compact('categories_for_checkboxes', 'author'));
    }

    /**
     * Store a newly created article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *-------------------------------------------------------------*/
    public function store(Request $request)
    {
      // Keep old input
      $request->flash();

      // Validate the request data
      $this->validate($request, [
          'title' => 'required|min:5',
          'bottomline' => 'required|max:150',
          'body' => 'required|min:5|max:1500',
      ]);

      # Instantiate a new Model object
      $article = new \App\Article();

      /*Set the parameters. each parameter corresponds to a field in the table. Save
      creates a new row in the table*/
      $article->title = $request->title;
      $title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      $article->author_id = $request->author_id;
          // To-Do:  loop categories and save in pivot table
          //To-Do: move four lines above to model or use mass assignment
      $article->save();


      /* loop categories and save in pivot table */
      if ($request->categories){
        $categories = $request->categories;
      }
      else {
        $categories = [];
      }
      $article->categories()->sync($categories);

      /* Search database to get ID of new title  */
      // To- do: Fix flash message not showing
      $newArticle = \App\Article::where('Title',$article->title)->get()->sortBy('id')->last();
      if ($newArticle){
        \Session::flash('flash_message',' Article Saved');
      } else {
        \Session::flash('flash_message','Oops! There was an error saving the article');
      }

      // fetch all articles
      $articles = \App\Article::all();
      $show_edit = TRUE; // present edit link after rendering
      return view("articles.show", compact('article','show_edit'));
    }

    /**
     * Display all articles
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *-----------------------------------------------------------*/
    public function show($id = null)
    {

      $article = \App\Article::find($id);
      return view('articles.show', compact('article', 'id'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //  $author = \Auth::user();

      /* Get Article to Edit*/
      $article = \App\Article::with('categories','author')->find($id);
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

      /* Get Author */
      $author = $article->author;
      return view('articles.edit', compact('article','categories_for_checkboxes',
      'categories_for_article','author'));

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

      //dump($request->toArray);

      // Validation
      $this->validate($request, [
          'title' => 'required|min:5',
          'bottomline' => 'required|max:150',
          'body' => 'required|min:5|max:1500',
      ]);

      /* Set the parameters. each parameter corresponds to a field in the table. Save
      creates a new row in the table*/
      $article = \App\Article::find($request->id); // {id} is defined at the route
      $article->title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
          //  dump($request->category);
      $article->author_id = $request->author_id;
      $article->save();

      /* Save categories in pivot table */
      if ($request->categories){
        $categories = $request->categories;
      }
      else {
        $categories = [];
      }
      $article->categories()->sync($categories);

      /* Confirm article was updated */
      \Session::flash('flash_message','Your article was updated.');
      // $show_edit = TRUE; // present edit link after rendering
      // return view('articles.show', compact('article','show_edit'));


      // Send to edit page
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
      //Set title for return page
      $title = 'All Articles';

      // Find article, redirect to welcome page if article not found
      $article = \App\Article::find($id);
      if(is_null($article)){
        \Session::flash('flash_message'.'Article not found');
        $articles = \App\Article::orderBy('id','DESC')->get();
        return redirect('/');
      }

      // If article found remove references and delete
      if($article->categories()){
        $article->categories()->detach();
      }
      \Session::flash('flash_message',' Your article was deleted.');
      $article->delete();

      // Send to edit page
      $show_edit = TRUE;
      $title = "Articles owned by ".\Auth::user()->name;
      $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
      return view("articles.index", compact('articles','show_edit','title'));

      // Get updated list of articles and send user to welcome page
      // $articles = \App\Article::orderBy('id','DESC')->get();
      // return view("articles.index", compact('articles','title'));
    }
}
