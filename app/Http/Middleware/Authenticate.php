<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        $redirect_back = str_replace('/','',\Request::getRequestUri());
        if (! $request->expectsJson()) {
            return route('login',['redirect_back' => $redirect_back]);
        }
    }
}
