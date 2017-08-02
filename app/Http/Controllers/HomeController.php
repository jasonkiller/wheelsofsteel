<?php

namespace App\Http\Controllers;

use Mews\Captcha\Facades\Captcha;

class HomeController extends Controller
{
    // home页面
    public function home()
    {
        // 生成一个验证码链接
        $src = Captcha::src();
        return view('home', ['src' => $src]);
    }

}
