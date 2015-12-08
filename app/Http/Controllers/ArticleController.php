<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
  /**
   * Display articles in home page
   *
   * @return \Illuminate\Http\Response
   */
  public function home(Request $request)
  {
    // USE our ORM book model to retrieve all the articles, pass to view
    dump(\Auth::id());
    $articles = \App\Article::where('author_id',\Auth::id())->orderBy('id','DESC')->get();
    return view("welcome", compact('articles'));
  }


    /**
     * Display a listing of Articles for the selected category.
     * If no category is selected, display all articles.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $main_category = null)
    {
      /* Eager load articles with categories, most recent first. */
      $articles = \App\Article::with('categories')->orderBy('id','DESC')->get();

      /* If a category is given, filter $articles,otherwise display all articles
      We use $selected_articles to track the ID's of the articles that apply. */
      $selected_articles = [];
      if(!$main_category){
         $main_category = 'All';
      } else {
        /* Find the articles that belong to the category selected */
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
      $main_category =  ucfirst(trans($main_category));

      return view("articles.index", compact('articles','main_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      /* Provide list of valid categories*/
      $categories = \App\Category::orderby('name','ASC')->get();
      $categories_for_select = [];
      foreach($categories as $category) {
          $categories_for_select[$category->id] = $category->name;
      }


      /* Provide list of valid authors*/
      $authors = \App\User::orderby('name','ASC')->get();
      $authors_for_select = [];
      foreach($authors as $author) {
          $authors_for_select[$author->id] = $author->name;
      }

      return view('articles.create', compact('categories_for_select', 'authors_for_select'));
    }

    /**
     * Store a newly created article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

      # Set the parameters
      # Note how each parameter corresponds to a field in the table
      # Todo : read about mass assignments to avoid verbose code
      $article->title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      // To-Do:  loop categories and save in pivot table
      $article->author_id = $request->author_id;

      # Invoke the Eloquent save() method
      # This will generate a new row in the `articles` table, with the above data
      $article->save();


      /* Search database to get ID of new title  */
      // To- do: Fix flash message not showing
      $newArticle = \App\Article::where('Title',$article->title)->get()->sortBy('id')->last();
      if ($newArticle){
        \Session::flash('flash_message',' Article Saved');
      } else {
        \Session::flash('flash_message','Oops! There was an error saving the article');
      }

      // fetch all books
      $articles = \App\Article::all();
      return view("articles.index", compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {

      $article = \App\Article::find($id);
      return view('articles.show', compact('article', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      dump(\Auth::id());

      $article = \App\Article::find($id);
      if(is_null($article)) {
          \Session::flash('flash_message','Article not found.');
          return redirect('\articles');
      }

      //TO_DO: Get content speific to Article and return to view to pre-populate fields
      /* Provide list of valid categories*/

      $categories = \App\Category::orderby('name','ASC')->get();
      $categories_for_select = [];
      foreach($categories as $category) {
          $categories_for_select[$category->id] = $category->name;
      }

      /* Provide list of valid authors*/
      $authors = \App\User::orderby('name','ASC')->get();
      $authors_for_select = [];
      foreach($authors as $author) {
          $authors_for_select[$author->id] = $author->name;
      }

      return view('articles.edit', compact('article','categories_for_select', 'authors_for_select','id'));

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
      // Validation
      $this->validate($request, [
          'title' => 'required|min:5',
          'bottomline' => 'required|max:150',
          'body' => 'required|min:5|max:1500',
      ]);
      dump($request);
      $article = \App\Article::find($request->id); // {id} is defined at the route
      // dump($article);
      $article->title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      //$article->category = $request->category; // To-Do:  loop categories and save in pivot table
      $article->author_id = $request->author_id;
      # Invoke the Eloquent save() method
      # This will generate a new row in the `books` table, with the above data
      $article->save();



      \Session::flash('flash_message','Your article was updated.');
      return redirect('/articles/show/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
