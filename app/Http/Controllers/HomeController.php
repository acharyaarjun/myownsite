<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        $data = [
            'abouts' => About::all(),
        ];
        return view('admin.about.manage', $data);
    }
    public function postAddAbout(Request $request){
        // dd($request->all());
        $about_description = $request->input('about_description');
        // dd($about_description);
        $about_image = $request->file('about_image');
        

        // image ko name ko lagi
        $imagename = md5(time());
        // image ko extension ko lagi
        $extension = $about_image->getClientOriginalExtension();
        // image ko name rw extension milayera image name banaunako lagi
        $realimagename = $imagename.'.'.$extension;
        // image lai local ma save garna (site/uploads/about/) with name varkahr banayeko name
        $about_image->move('site/uploads/about/', $realimagename);

        $about = new About;
        $about->about_image = $realimagename;
        $about->about_description = $about_description;

        $about->save();
        return redirect()->back()->with('status', 'About added successfully!');
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
