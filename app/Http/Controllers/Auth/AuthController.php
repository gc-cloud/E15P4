<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    # Where should the user be redirected to if their login succeeds?
    protected $redirectPath = '/';

    # Where should the user be redirected to if their login fails?
    protected $loginPath = '/';

    # Where should the user be redirected to after logging out?
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        /* Get the role id of a reader */
        $role = \App\Role::where('role','reader')->first();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => $role->id,

        ]);
    }



    /**
     * Log the user out of the application.
     * Override getLogout from AuthenticatesUsers.php
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        \Auth::logout();
        \Session::flash('flash_message','You have been logged out.');
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    /*Override defaults for failed login*/
    protected function getFailedLoginMessage()
    {
      \Session::flash('flash_message','We don\'t recognize the login credentials your provided');
      return ;
    }

}
