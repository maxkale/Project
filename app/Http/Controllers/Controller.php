<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function getCurrentUser() {

        return json_encode(Auth::user());
    }

    public function getCountry() {
        $getCountry = \App\Models\Country::get();
        if (!empty($getCountry)) {
            $result = ['success' => true, 'records' => $getCountry];
        } else {
            $result = ['success' => false];
        }
        return json_encode($result);
    }

    public function getState() {
        $postData = file_get_contents('php://input');
        $request = json_decode($postData, true);

        if (!empty($request)) {
            $getState = \App\Models\State::where('country_id', $request['country_id'])->get();
            if (!empty($getState)) {
                $result = ['success' => true, 'records' => $getState];
            } else {
                $result = ['success' => false];
            }
        } else {
            $result = ['success' => false];
        }
        return json_encode($result);
    }

    public function getCity() {
        $postData = file_get_contents('php://input');
        $request = json_decode($postData, true);
        if (!empty($request)) {
            $getCity = \App\Models\Cities::where('state_id', $request['state_id'])->get();
            if (!empty($getCity)) {
                $result = ['success' => true, 'records' => $getCity];
            } else {
                $result = ['success' => false];
            }
        } else {
            $result = ['success' => false];
        }
        return json_encode($result);
    }

}
