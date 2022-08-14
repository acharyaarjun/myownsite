<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        $data = [
            'services' => Service::all(),
        ];
        return view('admin.service.manage', $data);
    }
    public function postAddService(Request $request){
        $service_icon = $request->input('service_icon');  
        $service_title = $request->input('service_title');  
        $service_description = $request->input('service_description');  
        // dd($service_icon, $service_title, $service_description);  

        $service = new Service;
        $service->service_icon = $service_icon;
        $service->service_title = $service_title;
        $service->service_description = $service_description;

        $service->save();
        return redirect()->back()->with('status', 'Service Added Successfully!');
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
