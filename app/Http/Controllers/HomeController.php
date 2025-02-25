<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\SendEmail;
use Session;
use Storage;
use Redirect;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        return view('front.index');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function privacy()
    {
        return view('front.privacy');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function book()
    {
        return view('front.booking');
    }

    public function category($slung){
        $Category = DB::table('category')->where('slung',$slung)->first();
        $Experiences = DB::table('experiences')->where('cat',$Category->id)->get();
        return view('front.category', compact('Experiences','Category'));
    }

    public function subcategories ($category,$subcategory){
        $Category = DB::table('category')->where('slung',$category)->first();
        $SubCategory = DB::table('sub_categories')->where('slung',$subcategory)->first();
        $Experiences = DB::table('experiences')->where('cat',$Category->id)->where('sub_cat',$SubCategory->id)->get();
        return view('front.subcategory', compact('Experiences','Category','SubCategory'));
    }

    public function experience($slung){
        $Experiences = DB::table('experiences')->where('slung',$slung)->get();
        return view('front.experience', compact('Experiences'));
    }

    public function contact_store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $subject = "Contact Request";
        $to = "info@talimaafrica.com";
        $MailMessage = "Hello Talima, A client called $name. Email $email, wants to contact you. Message: $message";
        //Send Email
        SendEmail::SendMessage($to,$MailMessage,$name, $email,$subject);
        Session::flash('message', "Your message has been sent. We will get back to you shortly");
        return Redirect::back();
    }

    public function booking(Request $request){
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $date = $request->date;
        $guests = $request->guests;
        $message = $request->message;
        $subject = "Booking Request";
        $to = "info@talimaafrica.com";

        $MailMessage = "Hello Talima, A client called $name. Mobile $mobile, Email $email, wants to book an experience: $request->experience on $date for $guests guests. Message: $message";
        //Send Email
        SendEmail::SendMessage($to,$MailMessage,$name, $email,$subject);

        Session::flash('message', "Your booking request has been sent. We will get back to you shortly");
        return Redirect::back();
    }


}
