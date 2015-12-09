<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
  /**
   * Display articles in home page
   *
   * @return \Illuminate\Http\Response
   *----------------------------------*/
  public function index(Request $request)
  {
    // USE our ORM book model to retrieve all the articles, pass to view
    $articles = \App\Article::orderBy('id','DESC')->get();
    return view("welcome", compact('articles'));
  }


}
