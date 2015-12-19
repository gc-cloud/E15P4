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
    /* Retrieve all the articles, pass to view */
    $articles = \App\Article::orderBy('id','DESC')->get();
    return view("articles.welcome", compact('articles'));
  }
}
