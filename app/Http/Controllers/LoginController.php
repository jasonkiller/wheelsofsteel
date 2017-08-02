<?php

namespace App\Http\Controllers;

use App\Common\JsonResponse;
use Illuminate\Http\Request;
use Validator;
use Input;

class LoginController extends Controller
{

    public function register(Request $request)
    {

    }

    //
    public function login(Request $request)
    {
        $input = $request->all();

        $rules = [
            'captcha' => 'required|captcha'
        ];

        $message = [
            'captcha.required' => 'Please fill the capthca!',
        ];

        $validator = Validator::make($input, $rules, $message);
        if ($validator->fails()) {
            return JsonResponse::error();
        }

    }


}
