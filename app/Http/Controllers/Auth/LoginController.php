<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLogin()
    // {

    //     //$food = Food::findOrFail($id);
    //     //$food->update();
    //     $data = '{"status":0,"data":{"id":7,"username":"jack","password":"","email":"jack@163.com","phone":null,"question":null}}';
    //     return $data;

    // }

    // public function Login()
    // {
    //     //$food = Food::findOrFail($id);
    //     //$food->update();
    //     $data = '{"status":0,"data":{"id":7,"username":"jack","password":"","email":"jack@163.com","phone":null,"question":null}}';
    //     return $data;

    // }
}
