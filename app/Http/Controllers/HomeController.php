<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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


}
