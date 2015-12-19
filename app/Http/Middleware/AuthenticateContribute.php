<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AuthenticateContribute
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     * This is an override of the original method
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

      /* First, make sure the user is logged in */
      if ($this->auth->guest()) {
          if ($request->ajax()) {
              return response('Unauthorized.', 401);
          } else {
              \Session::flash('flash_message','You must be logged in to access this page.');
              return redirect()->guest('/');
          }
      }

      /* Now, make sure the user has the appropriate rights */
      if ($this->auth->check())
      {
        if ($this->auth->user()->role_id == 3)
        {
        return $next($request);
        } else {
          \Session::flash('flash_message','You must be an admin to access this page.');
          return redirect()->guest('/');
        }
      }

      /* Return next request for other cases */
      return $next($request);

    }

}
