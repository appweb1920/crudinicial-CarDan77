<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

   
    protected $redirectTo;

    public function username(Type $var = null)
    {
     return 'name';
    }

    public function redirectTo(Type $var = null)
    {
        $user = Auth::user();

        if(is_null($user->tipo))
            $redirectTo = '/adios';
        else
            $redirectTo = '/home';

        return $redirectTo;
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
