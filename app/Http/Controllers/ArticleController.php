<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
  /**
   * Display home page
   *
   * @return \Illuminate\Http\Response
   */
  public function home(Request $request)
  {
    // USE our ORM book model to retrieve all the articles, pass to view
    $articles = \App\Article::orderBy('id','DESC')->get();
    return view("welcome", compact('articles'));
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // USE our ORM book model to retrieve all the articles, pass to view
      $articles = \App\Article::orderBy('id','DESC')->get();
      return view("articles.index", compact('articles'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validate the request data
      $this->validate($request, [
          'title' => 'required|min:5',
          'bottomline' => 'required|max:150',
          'body' => 'required|min:200|max:1500',
      ]);

      # Instantiate a new Book Model object
      $article = new \App\Article();

      # Set the parameters
      # Note how each parameter corresponds to a field in the table
      # Todo : read about mass assignments to avoid verbose code
      $article->title = $request->title;
      $article->bottomline = $request->bottomline;
      $article->body = $request->body;
      //$article->category = $request->category; // To-Do:  loop categories and save in pivot table
      $article->author_id = $request->author;

      # Invoke the Eloquent save() method
      # This will generate a new row in the `books` table, with the above data
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
