<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Password Reset Controller
      |--------------------------------------------------------------------------
      |
      | This controller is responsible for handling password reset emails and
      | includes a trait which assists in sending these notifications from
      | your application to your users. Feel free to explore this trait.
      |
     */

use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    public function forgetPassword() {
        $postData = file_get_contents('php://input');
        $request = json_decode($postData, true);
        if (!empty($request['data']['email'])) {
            $check = \App\Models\User::select('id', 'first_name', 'last_name')
                    ->where('email', $request['data']['email'])
                    ->first();
            if (!empty($check)) {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $alphabet = str_shuffle($alphabet);
                $password = substr($alphabet, 1, 6);
                $mail = Mail::send([], [], function ($message) use($password, $request, $check) {
                            $message->to($request['data']['email'])
                                    ->subject("Max App Security Alert")
                                    // here comes what you want
                                    ->setBody("<!DOCTYPE html>
<html>
<head>

</head>
<body>

<p>Dear " . $check['first_name'] . " " . $check['last_name'] . ",<br>
    
Your Password Changed please use below password to login
            
 <br>" . $password . " <br>
     
Regards , <br>
Max App
     


</body>
</html>", 'text/html'); // for HTML rich messages
                        });
                $password = \Illuminate\Support\Facades\Hash::make($password);
                $check->update(['password' => $password]);
                $result = ['success' => true];
            } else {
                $result = ['success' => false];
            }
        } else {
            $result = ['success' => false];
        }
        return json_encode($result);
    }

}
