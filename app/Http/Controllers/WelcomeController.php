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
    /* Validate input */
    $rules = [  'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',];

    $this->validate($request,$rules);

    $name = $request->get('name');
    $email = $request->get('email');

    $content = [ 'name'=>$name,
                 'email' =>$email,
                 'message' =>$request->get('message'),];


    \Mail::send('emails.contact',$content,
               function($message){
                  $message->from('support@zudbu.com');
                  $message->to('gcastaneda@yattas.com','Jerry')
                  ->subject('Contact request submission');
    });

    $name = $request->name;
    $thankyou = 'Thank you for contacting us ' .$name.'!';

    \Session::flash('flash_message',$thankyou);
     return redirect('/');
  }



}
