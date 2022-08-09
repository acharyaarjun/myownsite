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
    public function postAddAbout(Request $request){
        dd($request->all());
    }

    // service manage garni function haru
    public function getServiceManage(){
        return view('admin.service.manage');
    }
    public function postAddService(Request $request){
        dd($request->all());    
    }

    // class manage garni function haru
    public function getClassManage(){
        return view('admin.class.manage');
    }
    public function postAddClass(Request $request){
        dd($request->all());
    }

    // contact manage garni function haru
    public function getContactManage(){
        return view('admin.contact.manage');
    }
}
