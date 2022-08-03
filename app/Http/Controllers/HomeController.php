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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // about manage garni function haru
    public function getAboutManage(){
        return view('admin.about.manage');
    }

    // service manage garni function haru
    public function getServiceManage(){
        return view('admin.service.manage');
    }

    // class manage garni function haru
    public function getClassManage(){
        return view('admin.class.manage');
    }

    // contact manage garni function haru
    public function getContactManage(){
        return view('admin.contact.manage');
    }
}
