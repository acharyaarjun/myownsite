<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function getHome(){
        return view('site.home');
    }
    public function aboutdekhaunifunction(){
        return view('site.about');
    }
    public function getService(){
        return view('site.service');
    }
    public function getContact(){
        return view('site.contact');
    }
    public function postSendMessage(Request $request){
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $usermessage = $request->input('usermessage');
        $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'subject' => $subject,
            'usermessage' => $usermessage,
        );
        // dd($data);
        Mail::send('email.sendmessage', $data, function($message) use($data){
            $message->to('legendssssarjun333@gmail.com');
            $message->subject($data['subject']);
            $message->from($data['email']);
        });
        // return redirect()->back(); // jun page bata aayeko ho tehi page ma pathuna ko lagi yo garney
        return redirect()->route('getHome')->with('status', 'Contact form submitted successfully! We will contact you soon.');

    }

}
