<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;

class Admin  extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        // dd($this->auth->user()->Admin());
        if ($this->auth->user()->Admin()) {
            return $next($request);
        } else {
            // abort(401);
            return redirect()->route('denied');
        }
    }
}
