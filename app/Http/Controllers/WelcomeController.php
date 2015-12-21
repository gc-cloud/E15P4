<?php

namespace App\Http\Controllers;

use Mail;
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
   * Handle submission of contact form
   *----------------------------------*/
  public function contactConfirm(Request $request)
  {
    /* Validate input */
    $rules = [  'name' => 'required',
                'email' => 'required|email',
                'body' => 'required',];
    $this->validate($request,$rules);

    /* Collect the info to be passed to the message */
    $content = [ 'name'=>$request->get('name'),
                 'body' =>$request->get('body'),];

    /* Send message */
    Mail::send('emails.contact',$content,
               function($message) use ($request){
                  $message->from('support@zudbu.com','Zudbu');
                  $message->to($request->get('email'),$request->get('name'));
                  $message->subject('Contact request submission');
                  $message->bcc('support@zudbu.com','Zudbu');
    });

    $thanks = 'Thank you for contacting us ' .$request->name.'!';

    \Session::flash('flash_message',$thanks);
     return redirect('/');
  }



}
