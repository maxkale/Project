<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller {
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate() {
        $postData = file_get_contents('php://input');
        $request = json_decode($postData, true);
        $authData = $request['userData'];
        $email = $authData['userName'];
        $password = $authData['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           return json_encode(['success' => true]);
        } else {
            return json_encode(['success' => false]);
        }
    }

}
