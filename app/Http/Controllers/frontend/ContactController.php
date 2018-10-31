<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Contact;
use Mail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Setting::find(1);
        return view('front.contact', compact('settings'));
    }
    
    public function contact_email(Request $request){

        $name =$request->input('username');
        $email =$request->input('email');
        $mobile =$request->input('mobile');
        $subject =$request->input('subject');
        $msg =$request->input('message');               
        
            try {
                    $data = array('username'=>$name,
                                  'subject'=>$subject,
                                  'email'=>$email,
                                  'mobile'=>$mobile,
                                  'message'=>$msg,
                                );
                    Contact::create($data);       
                    Mail::send(['text'=>'front.emails.contact'], $data, function ($message) use($email,$subject,$name) {
                    $message->from($email);
                    $message->to('saraadelalshora@yahoo.com');
                    $message->subject($subject);
                    });
                    $settings = Setting::find(1);
                    return view('front.contact', compact('settings'))->with('settings','message','Your email has been sent successfully<br>Thank You for contacting us');
            } catch (Exception $e) {
                    return view('front.contact', compact('settings'))
                                        ->with('error','Something went wrong')
                                        ->withInput();
            }
        
    }

}
