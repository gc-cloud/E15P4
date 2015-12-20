<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
  /**
   * Display articles in home page
   *----------------------------------*/
  public function index(Request $request)
  {
    /* Retrieve all the articles, pass to view */
    $articles = \App\Article::orderBy('id','DESC')->get();
    return view("general.welcome", compact('articles'));
  }

  /**
   * Display about page
   *----------------------------------*/
  public function about(Request $request)
  {
    return view("general.about");
  }

  /**
   * Display PRivacy Page
   *----------------------------------*/
  public function privacy(Request $request)
  {
    return view("general.privacy");
  }

  /**
   * Display Contact Page
   *----------------------------------*/
  public function contact(Request $request)
  {
      return view("general.contact");
  }

  /**
   * Display Contact Page
   *----------------------------------*/
  public function contactConfirm(Request $request)
  {
    /* Validator: Create an array with all validation rules */
    $rules = [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ];

    $this->validate($request,$rules);

    $name = $request->name;
    $message = 'Thank you for contacting us ' .$name;

    \Session::flash('flash_message',$message);
    return redirect('/');
  }



}
