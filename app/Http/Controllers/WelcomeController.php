<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        //渲染视图文件
        
        return view('welcome.index');
    }
}
