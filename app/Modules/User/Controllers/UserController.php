<?php

namespace App\Modules\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("User::index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function addUser() {
        $postData = file_get_contents('php://input');
        $request = json_decode($postData, true);
//        $data = User::create($request['data']);
        $data = '';
//        to('kkalemahesh@gmail.com')->send(new SendMailable());
        Mail::send([], [], function ($message) {
            $message->to("kalepravin4321@gmail.com")
                    ->subject("Max Laravel")
                    // here comes what you want
                    ->setBody("<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1 style='color: red;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;'>Max Kale!</h1>

</body>
</html>", 'text/html'); // for HTML rich messages
        });

        if ($data) {
            $result = ['success' => true];
        } else {
            $result = ['success' => false];
        }
        return json_encode($result);
    }

}
