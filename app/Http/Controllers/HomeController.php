<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
    public function presskit(Request $request){
        if ($request->lang === 'zh_CN'||$request->lang === 'zh_cn'||$request->lang === 'cn'){
            return view('cn.presskit');
        }
        return view('presskit');
    }
    /* article list page*/
    public function posts()
    {
        return view('posts');
    }
    /* article show page*/
    public function post()
    {

    }
}
