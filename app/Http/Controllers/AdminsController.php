<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;

use Storage;

use Mail;

use Hash;

use Session;

use datetime;

use App\Term;

use App\Country;

use App\Models;

use App\Models\Extra;

use App\Transfer;

use App\Privacy;

use App\Booking;

use App\CarType;

use App\Duration;

use App\Models\Sample;

use App\Location;

use App\Car;

use App\Fuel;

use App\Gallery;

use App\Itinery;

use App\Admin;

use App\User;

use App\Page;

use App\Slider;

use App\Order;

use App\Banner;

use App\Certificate;

use App\Page_Settings;

use App\Message;

use App\ReplyMessage;

use App\Category;

use App\SubCategory;

use App\Lesson;

use App\Topic;

use App\Product;

use App\Services;

use App\Portfolio;

use App\Pricing;

use App\Subscriber;

use App\Update;

use App\Payment;

use App\Notifications;

use App\Testimonial;

use App\Service_Rendered;

use App\Daily;

use App\Blog;

use App\Comment;

use App\TraceServices;

use App\Quote;

use App\ServiceRequest;

use App\Teacher;

use App\Register;

use App\Material;

use App\Curriculum;

use App\Examinfo;

use App\Question;

use App\Event;

use App\Models\Destination;

use App\Models\Experience;

use App\Guide;

use App\Student;

use App\Hotel;

use App\Room;



class AdminsController extends Controller
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

    //  Home Page
    public function index(){
        $Message = DB::table('messages')->where('status','0')->get();
        $Comments = DB::table('comments')->where('status','0')->get();
        $page_title = 'Admin Home';
        $page_name = 'Admin Home';
        return view('admin.index',compact('page_title','page_name','Comments','Message'));
    }

    public function list(){
        $page_title = 'list';
        return view('admin.list',compact('page_title'));
    }

    public function changecat(){
        $Products = DB::table('experiences')->where('cat','14')->get();
        foreach($Products as $pro){
            $updateDetails = array(
                'cat'=>7,
            );
            DB::table('experiences')->where('id',$pro->id)->update($updateDetails);
        }
        echo "Done";
        die();
    }

    public function form(){
        $page_title = 'form';
        return view('admin.form',compact('page_title'));
    }
    public function formfile(){
        $page_title = 'formfile';
        return view('admin.formfile',compact('page_title'));
    }
    public function formfiletext(){
        $page_title = 'formfiletext';
        return view('admin.formfiletext',compact('page_title'));
    }

    public function error403(){
        $page_title = 'Error';
        return view('admin.403',compact('page_title'));
    }

    public function error404(){
        $page_title = 'Error';
        return view('admin.404',compact('page_title'));
    }

    public function error405(){
        $page_title = 'Error';
        return view('admin.405',compact('page_title'));
    }

    public function error500(){
        $page_title = 'Error';
        return view('admin.500',compact('page_title'));
    }

    public function error503(){
        $page_title = 'Error';
        return view('admin.503',compact('page_title'));
    }


    public function under_construction(){
        $page_title = 'Website Is Under Construction';
        return view('admin.under_construction',compact('page_title'));
    }
    public function wizard(){
        $page_title = 'Wizard';
        return view('admin.wizard',compact('page_title'));
    }

    public function maps(){
        $page_title = 'Maps';
        $page_name = 'Maps';
        return view('admin.maps',compact('page_title','page_name'));
    }

    //sitesettings
    public function sitesettings(){
        $SiteSettings = DB::table('sitesettings')->get();
        $page_title = 'formfiletext';
        $page_name = 'Site Setting';
        return view('admin.sitesettings',compact('page_title','page_name','SiteSettings'));
    }

    public function savesitesettings(Request $request)
    {
        $path = 'uploads/logo';
        if(isset($request->logo)){
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo = $filename;
        }else{
            $logo = $request->logo_cheat;
        }
        if(isset($request->logoo)){
            $file = $request->file('logoo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logoo = $filename;
        }else{
            $logoo = $request->logoo_cheat;
        }
        if(isset($request->favicon)){
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $favicon = $filename;
        }else{
            $favicon = $request->favicon_cheat;
        }
        $updateDetails = array(
            'sitename'=>$request->sitename,
            'logo'=>$logo,
            'logoo'=>$logoo,
            'favicon'=>$favicon,
            'email'=>$request->email,
            'email_one'=>$request->email_one,
            'mobile'=>$request->mobile,
            'mobile_one'=>$request->mobile_one,
            'mobile_two'=>$request->mobile_two,
            'tagline'=>$request->tagline,
            'url'=>$request->url,
            'director'=>$request->director,
            'location'=>$request->location,
            'address'=>$request->address,
            'facebook'=>$request->facebook,
            'paypal'=>$request->paypal,
            'mpesa'=>$request->mpesa,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
            'google'=>$request->google,
            'payment'=>$request->payment,
            'welcome'=>$request->welcome

        );
        DB::table('sitesettings')->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    public function copyright(){
        $Copyright = DB::table('copyright')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'Copyright';
        return view('admin.copyright',compact('page_title','page_name','Copyright'));
    }
    public function edit_copyright(Request $request){
        $updateDetails = array(
            'content'=>$request->content
        );
        DB::table('copyright')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    public function about(){
        $About = DB::table('about')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'About Us';
        return view('admin.about',compact('page_title','page_name','About'));
    }
    public function about_save(Request $request){
        $path = 'uploads/images';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'content'=>$request->content,
            'image'=>$image,
            'support' => $request->support,
            'handpicked' => $request->handpicked,
            'price' => $request->price,
        );
        DB::table('about')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    //
    public function abouts(){
        $About = DB::table('about')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'About Us';
        return view('admin.abouts',compact('page_title','page_name','About'));
    }
    public function abouts_save(Request $request){

        $updateDetails = array(
            'contents'=>$request->content,

        );
        DB::table('about')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }

    //

    public function how(){
        $How = DB::table('how')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'How it works';
        return view('admin.how',compact('page_title','page_name','How'));
    }

    public function how_save(Request $request){

        $updateDetails = array(
            'content'=>$request->content,

        );
        DB::table('how')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }


    public function addTerms(){
        $page_name = 'Add Terms & Conditions';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addTerms',compact('page_title','page_name'));
    }
    public function add_term(Request $request){
        $terms = new Term;
        $terms->title = $request->title;
        $terms->content = $request->content;
        $terms->save();
        Session::flash('message', "Content Has been Added");
        return Redirect::back();
    }

    public function terms(){
        $page_name = 'Terms & Conditions';
        $Terms = Term::All();
        $page_title = 'list';
        return view('admin.terms',compact('page_title','Terms','page_name'));
    }
    public function editTerm($id){
        $Terms = Term::find($id);
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = $Terms->title;
        return view('admin.editTerm')->with('Terms',$Terms)->with('page_title',$page_title)->with('page_name',$page_name);
    }

    public function edit_term(Request $request, $id){
       $updateDetails = array(
           'title'=>$request->title,
           'content' =>$request->content
       );
       DB::table('terms')->where('id',$id)->update($updateDetails);
       Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_term($id){
        DB::table('terms')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function addPrivacy(){
        $page_name = 'Add Privacy Policy';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addPrivacy',compact('page_title','page_name'));
    }
    public function add_privacy(Request $request){
        $privacy = new Privacy;
        $privacy->title = $request->title;
        $privacy->content = $request->content;
        $privacy->save();
        Session::flash('message', "Content Has been Added");
        return Redirect::back();
    }

    public function privacy(){
        $Privacy = Privacy::All();
        $page_name = 'Privacy Policies';
        $page_title = 'list';
        return view('admin.privacy',compact('page_title','Privacy','page_name'));
    }
    public function editPrivacy($id){
        $Privacy = Privacy::find($id);
        $page_name = $Privacy->title;
        $page_title = 'formfiletext';//For Style Inheritance

        return view('admin.editPrivacy')->with('Privacy',$Privacy)->with('page_name',$page_name)->with('page_title',$page_title);
    }

    public function edit_privacy(Request $request, $id){
       $updateDetails = array(
           'title'=>$request->title,
           'content' =>$request->content
       );
       DB::table('privacy')->where('id',$id)->update($updateDetails);
       Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_privacy($id){
        DB::table('privacy')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function gallery(){
        $page_title = 'Gallery';
        $page_name = 'Image Gallery';
        $Gallery = Gallery::all();
        return view('admin.gallery',compact('page_title','Gallery','page_name'));
    }

    public function editGallery($id){
        $page_title = 'formfiletext';
        $Gallery = Gallery::find($id);
        $page_name =  $Gallery->title;
        return view('admin.editGallery',compact('page_title','Gallery','page_name'));
    }

    public function addGallery(){
        $page_title = 'formfiletext';

        $page_name =  'Add Image';
        return view('admin.addGallery',compact('page_title','page_name'));
    }
    public function add_Gallery(Request $request){
            $path = 'uploads/gallery';
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
            $Gallery  = new Gallery;
            $Gallery->title = $request->title;
            $Gallery->content = $request->content;
            $Gallery->image = $image;
            $Gallery->save();
            Session::flash('message', "Image Added To Gallery");
            return Redirect::back();

    }

    public function save_gallery(Request $request, $id){
        $path = 'uploads/gallery';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'title'=>$request->title,
            'content' =>$request->content,
            'image' =>$image
        );
        DB::table('gallery')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function galleryList(){
        $page_title = 'list';
        $page_name = 'Image Gallery';
        $Gallery = Gallery::all();
        return view('admin.galleryList',compact('page_title','Gallery','page_name'));
    }

    public function deleteGallery($id){
        DB::table('gallery')->where('id',$id)->delete();
        return Redirect::back();
    }
    public function addAdmin(){
        $page_name = 'Add Site Admin';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addAdmin',compact('page_title','page_name'));
    }

    public function add_Admin(Request $request){
        $path = 'uploads/admins';

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;

        $password_inSecured = $request->password;
        //harshing password Here
        $password = Hash::make($password_inSecured);
         $Admin = new Admin;
         $Admin->name = $request->name;
         $Admin->email = $request->email;
         $Admin->password = $password;
         $Admin->image = $image;
         $Admin->save();
         Session::flash('message', "$request->name has been added as new admin");
         return Redirect::back();

    }
    public function admins(){
        $page_title = 'list';
        $page_name = 'Site Administrator';
        $Admin = Admin::all();
        return view('admin.admins',compact('page_title','Admin','page_name'));
    }

    public function editAdmin($id){
        $newID = Auth::user()->id;
        $Admin = Admin::find($newID);
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'Edit Site Administrator';

        return view('admin.editAdmin',compact('page_title','Admin','page_name'));
    }

    public function edit_Admin(Request $request, $id){
        $path = 'uploads/admins';
        if($request->email == Auth::user()->email ){
            if(isset($request->image)){
                $fileSize = $request->file('image')->getClientSize();
                if($fileSize>=1800000){
                   Session::flash('message', "File Exceeded the maximum allowed Size");
                   Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

                }else{

                    $file = $request->file('image');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $timestamp = new Datetime();
                    $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                    $image_main_temp = $new_timestamp.'image'.$filename;
                    $image = str_replace(' ', '',$image_main_temp);
                    $file->move($path, $image);
                }
            }else{
                $image = $request->image_cheat;
            }
            $updateDetails = array(
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'facebook'=>$request->facebook,
                    'twitter'=>$request->twitter,
                    'linkedin'=>$request->linkedin,
                    'instagram'=>$request->instagram,
                    'youtube'=>$request->youtube,
                    'google'=>$request->google,
                    'content'=>$request->content,
                    'position'=>$request->position,
                    'image'=>$image
            );
            DB::table('admins')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Your Changes Have Been Saved");
            return Redirect::back();
        }else{
            if(isset($request->image)){
                $fileSize = $request->file('image')->getClientSize();
                if($fileSize>=1800000){
                   Session::flash('message', "File Exceeded the maximum allowed Size");
                   Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

                }else{

                    $file = $request->file('image');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $timestamp = new Datetime();
                    $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                    $image_main_temp = $new_timestamp.'image'.$filename;
                    $image = str_replace(' ', '',$image_main_temp);
                    $file->move($path, $image);
                }
            }else{
                $image = $request->image_cheat;
            }
            $updateDetails = array(
                'name'=>$request->name,
                'email'=>$request->email,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
                'google'=>$request->google,
                'content'=>$request->content,
                'position'=>$request->position,
                'image'=>$image
            );
            DB::table('admins')->where('id',$id)->update($updateDetails);
            Auth::guard('admin')->logout();
            return Redirect::back();
        }
    }


    public function deleteAdmin($id){
        if($id==1){
            echo "<script>alert('You cannot Delete the Supper Admin)</script>";

            return Redirect::back();
        }else{
            DB::table('admins')->where('id',$id)->delete();
            return Redirect::back();
        }
    }

    public function addUser(){
        $page_name = 'Add USer';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addUser',compact('page_title','page_name'));
    }

    public function add_User(Request $request){
        $path = 'uploads/users';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $password_inSecured = $request->password;
        //harshing password Here
        $password = Hash::make($password_inSecured);
         $User = new User;
         $User->name = $request->name;
         $User->email = $request->email;
         $User->password = $password;
         $User->image = $image;
         $User->save();
         Session::flash('message', "$request->name has been added as new User");
         return Redirect::back();

    }
    public function users(){
        $page_title = 'list';
        $page_name = 'Site Users';
        $User = User::all();
        return view('admin.users',compact('page_title','User','page_name'));
    }

    public function deleteUser($id){
        if($id==1){
            echo "<script>alert('You cannot Delete the Supper Admin)</script>";

            return Redirect::back();
        }else{
            DB::table('users')->where('id',$id)->delete();
            return Redirect::back();
        }
    }

    public function slider(){
        $Slider = Slider::all();
        $page_title = 'list';
        $page_name = 'Home Page Slider';
        return view('admin.slider',compact('page_title','Slider','page_name'));
    }

    public function addSlider(){
        $page_title = 'formfiletext';
        $page_name = 'Add Home Page Slider';
        return view('admin.addSlider',compact('page_title','page_name'));
    }

    public function add_Slider(Request $request){
        $path = 'uploads/slider';
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;
        $Slider = new Slider;
        $Slider->name = $request->name;
        $Slider->content = $request->content;
        $Slider->image = $image;
        $Slider->save();
        Session::flash('message', "Slider Image Has Been Added");
        return Redirect::back();
    }

    public function editSlider($id){
        $Slider = Slider::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editSlider',compact('page_title','Slider','page_name'));
    }

    public function edit_Slider(Request $request, $id){
        $path = 'uploads/slider';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }

        if(isset($request->thumbnail)){
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $thumbnail = $filename;
        }else{
            $thumbnail = $request->thumbnail_cheat;
        }


        $updateDetails = array(
            'name'=>$request->name,
            'content' =>$request->content,
            'thumbnail' => $thumbnail,
            'image' =>$image
        );
        DB::table('slider')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteSlider($id){
        DB::table('slider')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function banners(){
        $Slider = Banner::all();
        $page_title = 'list';
        $page_name = 'Banners';
        return view('admin.banner',compact('page_title','Slider','page_name'));
    }

    public function editBanner($id){
        $Banner = Banner::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Site Banner';
        return view('admin.editBanner',compact('page_title','Banner','page_name'));
    }

    public function edit_Banner(Request $request, $id){
        $path = 'uploads/banners';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());

            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'name'=>$request->name,
            'section' =>$request->section,
            'image' =>$image
        );
        DB::table('banners')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function addPage(){
        $page_title = 'formfiletext';//For Layout Inheritance
        $page_name = 'Add New Page';
        return view('admin.addPage',compact('page_title','page_name'));
    }

    public function add_Page(Request $request){

        $path = 'uploads/pages';
        if(isset($request->image_one)){
            $fileSize = $request->file('image_one')->getClientSize();
                if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
                return Redirect::back();
                }else{

                $file = $request->file('image_one');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_one = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_one);
                }
        }else{
            $image_one = $request->pro_img_cheat;
        }

        if(isset($request->image_two)){
            $fileSize = $request->file('image_two')->getClientSize();
             if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

             }else{

                $file = $request->file('image_two');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_two = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_two);
             }
        }else{
            $image_two = $request->pro_img_cheat;
        }


        if(isset($request->image_three)){
            $fileSize = $request->file('image_three')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_three');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_three = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_three);
            }
        }else{
            $image_three = $request->pro_img_cheat;
        }
        //Additional images

        if(isset($request->image_four)){
            $fileSize = $request->file('image_four')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_four');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_four = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_four);
            }
        }else{
            $image_four = $request->pro_img_cheat;
        }



        if(isset($request->image_five)){
            $fileSize = $request->file('image_five')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_five');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_five = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_five);
            }
        }else{
            $image_five = $request->pro_img_cheat;
        }
        $Page = new Page;
        $Page->name = $request->name;
        $Page->content = $request->content;
        $Page->image_one = $image_one;
        $Page->image_two = $image_two;
        $Page->image_three = $image_three;
        $Page->image_four = $image_four;
        $Page->image_five = $image_five;
        $Page->save();


        $Page_Settings = new Page_Settings;
        $Page_Settings->page_name = $request->name;
        $Page_Settings->save();
        Session::flash('message', "A Page Has Been Added");
        return Redirect::back();
    }

    public function pages(){
        $Page = Page::all();
        $page_title = 'list';
        $page_name = 'All Dynamic Pages';
        return view('admin.pages',compact('page_title','Page','page_name'));
    }

    public function editPage($id){
        $Page = Page::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Page';
        return view('admin.editPage',compact('page_title','Page','page_name'));
    }

    public function setPage($name){
        $Page = DB::table('pages_settings')->where('page_name',$name)->get();
        $page_title = 'formfiletext';
        $page_name = 'PageSettings';
        return view('admin.setPage',compact('page_title','Page','page_name'));
    }

    public function set_Page(Request $request, $name){

        $updateDetails = array(
            'sidebar'=>$request->sidebar,
            'sidebar_right' =>$request->sidebar_right,
            'slider' => $request->slider,
            'menu' => $request->menu,
        );

        DB::table('pages_settings')->where('page_name',$name)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function edit_Page(Request $request, $id){
        $path = 'uploads/pages';
        if(isset($request->image_one)){
            $fileSize = $request->file('image_one')->getClientSize();
                if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
                return Redirect::back();
                }else{

                $file = $request->file('image_one');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_one = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_one);
                }
        }else{
            $image_one = $request->image_one_cheat;
        }

        if(isset($request->image_two)){
            $fileSize = $request->file('image_two')->getClientSize();
             if($fileSize>=1800000){
                Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

             }else{

                $file = $request->file('image_two');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_two = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_two);
             }
        }else{
            $image_two = $request->image_two_cheat;
        }


        if(isset($request->image_three)){
            $fileSize = $request->file('image_three')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_three');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_three = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_three);
            }
        }else{
            $image_three = $request->image_three_cheat;
        }
        //Additional images

        if(isset($request->image_four)){
            $fileSize = $request->file('image_four')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message_image_four', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_four');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_four = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_four);
            }
        }else{
            $image_four = $request->image_four_cheat;
        }



        if(isset($request->image_five)){
            $fileSize = $request->file('image_five')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message_image_five', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image_five');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_five = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_five);
            }
        }else{
            $image_five = $request->image_five_cheat;
        }

        $updateDetails = array(
            'name' => $request->name,
            'content' => $request->content,
            'image_one' =>$image_one,
            'image_two' =>$image_two,
            'image_three' =>$image_three,
            'image_four' =>$image_four,
            'image_five' =>$image_five,
        );
        DB::table('pages')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function allMessages(){
        $Message = Message::all();
        $page_title = 'list';
        $page_name = 'Messages';
        return view('admin.allMessages',compact('page_title','Message','page_name'));
    }
    public function unread(){
        $Message = DB::table('messages')->where('status','0')->get();
        $page_title = 'list';
        $page_name = 'Messages';
        return view('admin.allMessages',compact('page_title','Message','page_name'));
    }
    public function read($id){
        $Message = Message::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Messages';
        return view('admin.read',compact('page_title','Message','page_name'));
    }
    public function reply(Request $request,$id){
        $reply = $request->message;
        $subject = $request->subject;
        $name = $request->name;
        $email = $request->email;

        //Call The Generic Reply Class
        ReplyMessage::SendMessage($reply,$subject,$name,$email,$id);
    }
    public function deleteMessage($id){
        DB::table('messages')->where('id',$id)->delete();
        return Redirect::back();
    }


public function categories(){
    $Category = Category::all();
    $page_title = 'list';
    $page_name = 'Categories';
    return view('admin.categories',compact('page_title','Category','page_name'));
}

public function addCategory(){
    $page_title = 'formfiletext';
    $page_name = 'Add Category';
    return view('admin.addCategory',compact('page_title','page_name'));
}

public function add_Category(Request $request){

    $Category = new Category;
    $Category->cat = $request->name;

    $Category->save();
    Session::flash('message', "Category Has Been Added");
    return Redirect::back();
}

public function editCategories($id){
    $Category = Category::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Home Page Slider';
    return view('admin.editCategory',compact('page_title','Category','page_name'));
}

public function edit_Category(Request $request, $id){
    $path = 'uploads/categories';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
    $updateDetails = array(
        'cat'=>$request->name,
        // 'description'=>$request->content,
        'image'=>$image

    );
    DB::table('category')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteCategory($id){
    DB::table('category')->where('id',$id)->delete();
    return Redirect::back();
}

public function subCategories(){
    $Category = SubCategory::all();
    $page_title = 'list';
    $page_name = 'Categories';
    return view('admin.SubCategories',compact('page_title','Category','page_name'));
}

public function addSubCategory(){
    $page_title = 'formfiletext';
    $page_name = 'Add Category';
    return view('admin.addSubCategory',compact('page_title','page_name'));
}

public function add_SubCategory(Request $request){

    $SubCategory = new SubCategory;
    $SubCategory->name = $request->name;
    $SubCategory->cat_id = $request->cat_id;

    $SubCategory->save();
    Session::flash('message', "Category Has Been Added");
    return Redirect::back();
}

public function editSubCategories($id){
    $Category = SubCategory::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Home Page Slider';
    return view('admin.editSubCategory',compact('page_title','Category','page_name'));
}

public function edit_SubCategory(Request $request, $id){

    $updateDetails = array(
        'cat_id'=>$request->cat_id,
        'name' =>$request->name,

    );
    DB::table('sub_category')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteSubCategory($id){
    DB::table('sub_category')->where('id',$id)->delete();
    return Redirect::back();
}

public function addProduct(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Product';
    return view('admin.addProduct',compact('page_title','page_name'));
}

public function add_Product(Request $request){

    $path = 'uploads/product';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }
    //Additional images


    $Product = new Product;
    $Product->name = $request->name;
    $Product->teachers = $request->teacher;
    $Product->content = $request->content;
    $Product->price = $request->price;
    $Product->code = $request->code;
    $Product->cat = $request->cat;
    $Product->sub_cat = $request->sub_cat;
    $Product->image_one = $image_one;
    $Product->image_two = $image_two;
    $Product->image_three = $image_three;

    $Product->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}

public function Products(){
    $Product = Product::all();
    $page_title = 'list';
    $page_name = 'All Products';
    return view('admin.products',compact('page_title','Product','page_name'));
}

public function editProduct($id){
    $Product = Product::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editProduct',compact('page_title','Product','page_name'));
}





public function edit_Product(Request $request, $id){
    $path = 'uploads/product';
    if(isset($request->image)){
        $fileSize = $request->file('image')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }
    //Additional images



    $updateDetails = array(
        'name' => $request->name,
        'content' => $request->content,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,
        'price' =>$request->price,
        'code' =>$request->code,
        'cat' =>$request->cat,
        'teachers'=>$request->teacher,
        'sub_cat' =>$request->sub_cat,
    );
    DB::table('product')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteProduct($id){
    $Curriculum = DB::table('curriculum')->where('course_id',$id)->get();
    foreach($Curriculum as $curriculum){
        DB::table('materials')->where('curriculum_id',$curriculum->id)->delete();
    }

    DB::table('curriculum')->where('course_id',$id)->delete();
    DB::table('product')->where('id',$id)->delete();
    return Redirect::back();
}




public function addService(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Service';
    return view('admin.addService',compact('page_title','page_name'));
}

public function add_Service(Request $request){

    $path = 'uploads/services';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }

    $Services = new Services;
    $Services->title = $request->name;
    $Services->content = $request->content;
    $Services->image_one = $image_one;
    $Services->image_two = $image_two;
    $Services->image_three = $image_three;

    $Services->save();

    Session::flash('message', "Service Has Been Added");
    return Redirect::back();
}

public function services(){
    $Services = Services::all();
    $page_title = 'list';
    $page_name = 'Services';
    return view('admin.services',compact('page_title','Services','page_name'));
}

public function editServices($id){
    $Services = Services::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Services';
    return view('admin.editServices',compact('page_title','Services','page_name'));
}


public function edit_Services(Request $request, $id){
    $path = 'uploads/services';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }



    $updateDetails = array(
        'title' => $request->name,
        'content' => $request->content,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,

    );
    DB::table('services')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteService($id){
    DB::table('services')->where('id',$id)->delete();

    return Redirect::back();
}

public function addPortfolio(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'add Portfolio';
    return view('admin.addPortfolio',compact('page_title','page_name'));
}

public function add_Portfolio(Request $request){

    $path = 'uploads/portfolio';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }
    //Additional images

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }



    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->pro_img_cheat;
    }

    $Portfolio = new Portfolio;
    $Portfolio->title = $request->name;
    $Portfolio->content = $request->content;
    $Portfolio->client = $request->client;
    $Portfolio->link = $request->link;
    $Portfolio->service = $request->service;
    $Portfolio->image_one = $image_one;
    $Portfolio->image_two = $image_two;
    $Portfolio->image_three = $image_three;
    $Portfolio->image_four = $image_four;
    $Portfolio->image_five = $image_five;

    $Portfolio->save();

    Session::flash('message', "Portfolio Has Been Added");
    return Redirect::back();
}

public function portfolio(){
    $Portfolio = Portfolio::all();
    $page_title = 'list';
    $page_name = 'Portfolio';
    return view('admin.portfolio',compact('page_title','Portfolio','page_name'));
}

public function editPortfolio($id){
    $Portfolio = Portfolio::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Portfolio';
    return view('admin.editPortfolio',compact('page_title','Portfolio','page_name'));
}


public function edit_Portfolio(Request $request, $id){
    $path = 'uploads/portfolio';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }
    //Additional images

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_four', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }



    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_five', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->image_five_cheat;
    }



    $updateDetails = array(
        'title' => $request->name,
        'content' => $request->content,
        'service' => $request->service,
        'client' => $request->client,
        'link' => $request->link,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,
        'image_four' =>$image_four,
        'image_five' =>$image_five

    );
    DB::table('portfolio')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deletePortfolio($id){
    DB::table('portfolio')->where('id',$id)->delete();

    return Redirect::back();
}

public function pricing(){
    $Pricing = Pricing::all();
    $page_title = 'pricing';
    $page_name = 'Pricing';
    return view('admin.pricing',compact('page_title','Pricing','page_name'));
}

public function editPricing($id){
    $Pricing = Pricing::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Pricing';
    return view('admin.editPricing',compact('page_title','Pricing','page_name'));
}

public function addPricing(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'add Pricing';
    return view('admin.addPricing',compact('page_title','page_name'));
}

public function add_Pricing(Request $request){
    $Pricing = new Pricing;
    $Pricing->price = $request->price;
    $Pricing->frequency = $request->frequency;
    $Pricing->service = $request->service;
    $Pricing->content = $request->content;
    $Pricing->budget = $request->budget;
    $Pricing->save();

    Session::flash('message', "New Pricing has Been Added");
    return Redirect::back();
}

public function edit_Pricing(Request $request, $id){
    $updateDetails = array(

        'content' => $request->content,
        'service' => $request->service,
        'budget' => $request->budget,
        'price' => $request->price,
        'frequency' =>$request->frequency,


    );
    DB::table('pricing')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deletePricing($id){
    DB::table('pricing')->where('id',$id)->delete();

    return Redirect::back();
}

public function subscribers(){
    $Subscribers = Subscriber::all();
    $page_title = 'list';
    $page_name = 'Subscribers';
    return view('admin.subscribers',compact('page_title','Subscribers','page_name'));
}

public function mailSubscriber($email){
    //Collect info

    //mail subscriber
    ReplyMessage::mailSubscriber();
    return Redirect::back();

}
public function mailSubscribers($email){
    //Collect info

    //mail subscriber
    ReplyMessage::mailSubscribers();
    return Redirect::back();

}
public function deleteSubscriber($id){
    DB::table('subscribers')->where('id',$id)->delete();

    return Redirect::back();
}

public function updates(){
    $Update = Update::all();
    $page_title = 'list';
    $page_name = 'Updates';
    return view('admin.updates',compact('page_title','Update','page_name'));
}

public function update($id){
    $Update = Update::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Updates';
    return view('admin.update',compact('page_title','Update','page_name'));
}
public function mark($id){
    $updateDetails = array(
        'status'=>1
    );
    DB::table('updates')->where('id',$id)->update($updateDetails);
    return back();
}

public function payments(){
    $Payment = Payment::all();
    $page_title = 'list';
    $page_name = 'Payments';
    return view('admin.payments',compact('page_title','Payment','page_name'));
}

public function notifications(){
    $Notifications = Notifications::all();
    $page_title = 'list';
    $page_name = 'Notifications';
    return view('admin.notifications',compact('page_title','Notifications','page_name'));
}

public function notification($id){
    $Notifications = Notifications::all();
    $page_title = 'list';
    $page_name = 'Notification';
    return view('admin.notification',compact('page_title','Notifications','page_name'));
}

// Testimonials
public function addTestimonial(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'addTestimonial';
    return view('admin.addTestimonial',compact('page_title','page_name'));
}

public function add_Testimonial(Request $request){

    $path = 'uploads/testimonials';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }





    $Testimonial = new Testimonial;
    $Testimonial->name = $request->name;
    $Testimonial->content = $request->content;
    $Testimonial->company = $request->company;
    $Testimonial->service = $request->service;
    $Testimonial->position = $request->position;
    $Testimonial->rating = $request->rating;

    $Testimonial->image = $image_one;

    $Testimonial->save();

    Session::flash('message', "Testimonial Has Been Added");
    return Redirect::back();
}

public function testimonials(){
    $Testimonial = Testimonial::all();
    $page_title = 'list';
    $page_name = 'Testimonial';
    return view('admin.testimonial',compact('page_title','Testimonial','page_name'));
}

public function editTestimonial($id){
    $Testimonial = Testimonial::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Testimonial';
    return view('admin.editTestimonial',compact('page_title','Testimonial','page_name'));
}


public function edit_Testimonial(Request $request, $id){
    $path = 'uploads/testimonials';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }




    $updateDetails = array(
        'name' => $request->name,
        'content' => $request->content,
        'service' => $request->service,
        'company' => $request->company,
        'position' => $request->position,
        'image' =>$image_one,


    );
    DB::table('testimonial')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteTestimonial($id){
    DB::table('testimonial')->where('id',$id)->delete();

    return Redirect::back();
}

// Service rendered
public function addService_rendered(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'addService_rendered';
    return view('admin.addService_rendered',compact('page_title','page_name'));
}

public function add_Service_rendered(Request $request){
    $Service_Rendered = new Service_Rendered;
    $Service_Rendered->name = $request->name;
    $Service_Rendered->cat = $request->cat;
    $Service_Rendered->save();

    Session::flash('message', "Service Rendered Has Been Added");
    return Redirect::back();
}

public function service_rendered(){
    $Service_Rendered = Service_Rendered::all();
    $page_title = 'list';
    $page_name = 'Service_Rendered';
    return view('admin.service_rendered',compact('page_title','Service_Rendered','page_name'));
}

public function editService_rendered($id){
    $Service_Rendered = Service_Rendered::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Service_Rendered';
    return view('admin.editService_rendered',compact('page_title','Service_Rendered','page_name'));
}


public function edit_Service_rendered(Request $request, $id){


    $updateDetails = array(
        'name' => $request->name,
        'cat' => $request->cat,

    );
    DB::table('service_delivered')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteService_rendered($id){
    DB::table('service_delivered')->where('id',$id)->delete();

    return Redirect::back();
}
//Dailies
public function addDaily(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'addDaily';
    return view('admin.addDaily',compact('page_title','page_name'));
}

public function add_Daily(Request $request){
    $Daily = new Daily;
    $Daily->author = $request->author;
    $Daily->content = $request->content;
    $Daily->save();

    Session::flash('message', "Daily Quote Has Been Added");
    return Redirect::back();
}

public function Daily(){
    $Daily = Daily::all();
    $page_title = 'list';
    $page_name = 'Daily';
    return view('admin.daily',compact('page_title','Daily','page_name'));
}

public function editDaily($id){
    $Daily = Daily::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Daily';
    return view('admin.editDaily',compact('page_title','Daily','page_name'));
}


public function edit_Daily(Request $request, $id){


    $updateDetails = array(
        'author' => $request->author,
        'content' => $request->content,

    );
    DB::table('daily')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteDaily($id){
    DB::table('daily')->where('id',$id)->delete();

    return Redirect::back();
}
// Blog Controls

// Blog Controls

public function addBlog(){
    $Category = DB::table('category')->get();
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'add Blog';
    return view('admin.addBlog',compact('page_title','page_name','Category'));
}

public function add_Blog(Request $request){
    $title = $request->title;
    $description = $request->content;


    $author = Auth::user()->name;
    $category = $request->cat;
    $path = 'uploads/blog';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }
    //Additional images

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }

    if(isset($request->link)){
         $video = 1;
    }else{
        $video = "0";
    }


    $blog = new Blog;
    $blog->title = $title;
    $blog->slung =  Str::slug($title);
    $blog->link = $request->link;
    $blog->meta = $request->meta;
    $blog->video = $video;
    $blog->content = $description;
    $blog->author = $author;
    $blog->cat = $category;
    $blog->image_one = $image_one;
    $blog->image_two = $image_two;
    $blog->save();
    Session::flash('message', "Changes Saved Successfully");
    return Redirect::back();




    $Blog->save();

    Session::flash('message', "Blog Has Been Added");
    return Redirect::back();
}

public function blog(){
    $Blog = Blog::all();
    $page_title = 'list';
    $page_name = 'Blog';
    return view('admin.blog',compact('page_title','Blog','page_name'));
}

public function editBlog($id){
    $Blog = Blog::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Blog';
    return view('admin.editBlog',compact('page_title','Blog','page_name'));
}


public function edit_Blog(Request $request, $id){
    $path = 'uploads/blog';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }
    //Additional images

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_four', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }

    if(isset($request->link)){
        $video = 1;
    }else{
        $video = "0";
    }

    $author = Auth::user()->name;
    $slung = str_slug($request->title);
    $updateDetails = array(
        'title' => $request->title,
        'slung' => Str::slug($request->title),
        'content' => $request->content,
        'author' => $author,
        'meta' => $request->meta,
        'cat' => $request->cat,
        'link' => $request->link,
        'video' => $video,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,
        'image_four' =>$image_four,

    );
    DB::table('blog')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function delete_Blog($id){
    DB::table('blog')->where('id',$id)->delete();

    return Redirect::back();
}




public function approve($id){
    $updateDetails = array(
        'status'=>1
    );
    DB::table('reviews')->where('id',$id)->update($updateDetails);
    Session::flash('message-comment', "Review Has Been Approved");
    return Redirect::back();
}

public function decline($id){
    DB::table('comments')->where('id',$id)->delete();

    Session::flash('message-comment', "Comment Has Been Deleted");
    return Redirect::back();
}
public function comments(){
    $Comment = Comment::all();
    $page_title = 'list';
    $page_name = 'Comment';
    return view('admin.comments',compact('page_title','Comment','page_name'));

}
//Payable Services
public function traceServices(){
    $TraceServices = TraceServices::all();
    $page_title = 'list';
    $page_name = 'traceServices';
    return view('admin.traceServices',compact('page_title','TraceServices','page_name'));
}

public function editTraceServices($id){
    $TraceServices = TraceServices::find($id);
    $page_title = 'formfiletext';
    $page_name = 'TraceServices';
    return view('admin.editTraceServices',compact('page_title','TraceServices','page_name'));
}

public function addTraceServices(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'addTraceServices';
    return view('admin.addTraceServices',compact('page_title','page_name'));
}

public function add_TraceServices(Request $request){
    $TraceServices = new TraceServices;
    $TraceServices->price = $request->price;
    $TraceServices->frequency = $request->frequency;
    $TraceServices->title = $request->title;
    $TraceServices->due = $request->due;
    $TraceServices->invoice = $request->invoice;
    $TraceServices->user_id = $request->user_id;
    $TraceServices->save();

    Session::flash('message', "New Traceble Service has Been Added");
    return Redirect::back();
}

public function edit_TraceServices(Request $request, $id){
    $updateDetails = array(


        'user_id' => $request->user_id,
        'invoice' => $request->invoice,
        'title' => $request->title,
        'due' =>$request->due,
        'price' => $request->price,
        'frequency' =>$request->frequency,


    );
    DB::table('traceservices')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteTraceServices($id){
    DB::table('traceservices')->where('id',$id)->delete();

    return Redirect::back();
}

public function quoterequeste(){
    $Quote = Quote::all();
    $ServiceRequest = ServiceRequest::all();
    $page_title = 'list';
    $page_name = 'Services and Quotes Request';
    return view('admin.requests',compact('page_title','ServiceRequest','Quote','page_name'));
}

public function markRequest($id,$status,$type){
    if($status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus,
    );
    if($type == 'quote'){
        DB::table('quoterequests')->where('id',$id)->update($updateDetails);
    }else{

        DB::table('servicerequests')->where('id',$id)->update($updateDetails);
    }
    return Redirect::back();
}


public function teachers(){
    $Teacher = Teacher::all();
    $page_title = 'list';
    $page_name = 'Teacher';
    return view('admin.teachers',compact('page_title','Teacher','page_name'));
}

public function addTeacher(){
    $page_title = 'formfiletext';
    $page_name = 'Add Teacher';
    return view('admin.addTeacher',compact('page_title','page_name'));
}

public function add_Teacher(Request $request){
    $path = 'uploads/teachers';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
    $Teacher = new Teacher;
    $Teacher->name = $request->name;
    $Teacher->image = $image;

    $Teacher->save();
    Session::flash('message', "Instructor Has Been Added");
    return Redirect::back();
}

public function editTeacher($id){
    $Teacher = Teacher::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Home Page Instructor';
    return view('admin.editTeacher',compact('page_title','Teacher','page_name'));
}

public function edit_Teacher(Request $request, $id){
    $path = 'uploads/teachers';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
    $updateDetails = array(
        'name'=>$request->name,
        'image'=>$image,

    );
    DB::table('teachers')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteTeacher($id){
    DB::table('teachers')->where('id',$id)->delete();
    return Redirect::back();
}
public function approvepay($id,$status){
    if($status == 1){
       $status_new = 0;
    }else{
       $status_new = 1;
    }
    $updateDetails = array(
        'status'=>$status_new,
    );
    DB::table('payments')->where('id',$id)->update($updateDetails);
    return back();

}
public function registrations(){
    $Register = DB::table('payments')->where('status','1')->get();
    $page_title = 'list';
    $page_name = 'Registration';
    return view('admin.registrations',compact('page_title','Register','page_name'));
}

public function curriculum(){
    $Curriculum = Curriculum::all();
    $page_title = 'list';
    $page_name = 'Curriculum';
    return view('admin.curriculum',compact('page_title','Curriculum','page_name'));
}
public function material(){
    $Material = Material::all();
    $page_title = 'list';
    $page_name = 'Material';
    return view('admin.material',compact('page_title','Material','page_name'));
}
public function editCurriculum($id){
    $Curriculum = Curriculum::find($id);
    $page_title = 'formfiletext';
    $page_name = 'editCurriculum';
    return view('admin.editCurriculum',compact('Curriculum','page_title','page_name'));
}

public function addCurriculum(){

    $page_title = 'formfiletext';
    $page_name = 'AddCurriculum';
    return view('admin.addCurriculum',compact('page_title','page_name'));
}

public function addMaterial(){

    $page_title = 'formfiletext';
    $page_name = 'addMaterial';
    return view('admin.addMaterial',compact('page_title','page_name'));
}

public function add_material(Request $request){
    $path = 'uploads/file';
    if(isset($request->pdf)){
        $fileSize = $request->file('pdf')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('pdf');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'-file-'.$filename;
            $pdf = str_replace(' ', '',$image_main_temp);
            $file->move($path, $pdf);
            }
    }else{
        $pdf = 0;
    }
    $curriculum_id = $request->curriculum_id;
    $video = $request->video;
    $audio = $request->audio;

    $Material = new Material;
    $Material->curriculum_id = $curriculum_id;
    $Material->video = $video;
    $Material->audio = $audio;
    $Material->title = $request->title;
    $Material->pdf = $pdf;
    $Material->save();

    Session::flash('message', "Material has Been added");
    return Redirect::back();
}

public function add_Curriculum(Request $request){
    $objective = $request->objective;
    $level = $request->level;
    $course_id = $request->course_id;
    $Curriculum = new Curriculum;
    $Curriculum->course_id = $course_id;
    $Curriculum->level = $level;
    $Curriculum->title = $request->title;
    $Curriculum->price = $request->price;
    $Curriculum->duration = $request->duration;
    $Curriculum->objectives = $objective;
    $Curriculum->save();
    Session::flash('message', "Curriculum has Been added");
    return Redirect::back();
}





public function editMaterial($id){

    $Material = Material::find($id);
    $page_title = 'formfiletext';
    $page_name = 'editMaterial';
    return view('admin.editMaterial',compact('page_title','page_name','Material'));
}
public function edit_curriculum(Request $request,$id){

    $objective = $request->objective;
    $level = $request->level;
    $updateDetails = array(
        'objectives'=>$objective,
        'level'=>$level,
        'price'=>$request->price,
        'duration'=>$request->duration,
        'title'=>$request->title,
    );
    DB::table('curriculum')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
        return Redirect::back();

}
public function edit_material(Request $request,$id){
    $path = 'uploads/file';
    if(isset($request->pdf)){
        $fileSize = $request->file('pdf')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('pdf');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'-file-'.$filename;
            $pdf = str_replace(' ', '',$image_main_temp);
            $file->move($path, $pdf);
            }
    }else{
        $pdf = $request->pdf_cheat;
    }
    $curriculum_id = $request->curriculum_id;
    $video = $request->video;
    $audio = $request->audio;
    $updateDetails = array(
        'audio'=>$audio,
        'video'=>$video,
        'title'=>$request->title,
        'pdf'=>$pdf,
        'curriculum_id'=>$curriculum_id,
    );
    DB::table('materials')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}
public function deleteCurriculum($id){
    DB::table('curriculum')->where('id',$id)->delete();
    return back();
}
public function deleteMaterial($id){
    DB::table('materials')->where('id',$id)->delete();
    return back();
}
public function exams(){
    $Exam = Examinfo::all();
    $page_title = 'list';
    $page_name = 'Exams';
    return view('admin.exams',compact('page_title','Exam','page_name'));
}
public function questions($id){
    $Questions = DB::table('questions')->where('quiz_id',$id)->get();
    $page_title = 'list';
    $page_name = 'Questions';
    return view('admin.questions',compact('page_title','Questions','page_name'));
}
public function editQuestions($id){
    $Question = Question::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Question';
    return view('admin.editQuestions',compact('page_title','page_name','Question'));
}
public function edit_Questions(Request $request,$id){
    $question = $request->question;
    $choice1 = $request->choice1;
    $choice2 = $request->choice2;
    $choice3 = $request->choice3;
    $choice4 = $request->choice4;
    $answer = $request->answer;
    $updateDetails = array(
        'question'=>$question,
        'choice1'=>$choice1,
        'choice2'=>$choice2,
        'choice3'=>$choice3,
        'choice4'=>$choice4,
        'answer'=>$answer,
    );
    DB::table('questions')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}
public function results(){
    $Results = Student::all();
    $page_title = 'list';
    $page_name = 'Results';
    return view('admin.results',compact('page_title','Results','page_name'));
}
public function action($id){
    //Generate Certificate
}


public function add_Questions(Request $request){
    $question = $request->question;
    $choice1 = $request->choice1;
    $choice2 = $request->choice2;
    $choice3 = $request->choice3;
    $choice4 = $request->choice4;
    $answer = $request->answer;
    $quiz_id = $request->quiz_id;
    $Question = new Question;
    $Question->question = $question;
    $Question->choice1 = $choice1;
    $Question->choice2 = $choice2;
    $Question->choice3 = $choice3;
    $Question->choice4 = $choice4;
    $Question->answer = $answer;
    $Question->quiz_id = $quiz_id;
    $Question->save();

    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}
public function addQuestion($quiz_id){

    $page_title = 'formfiletext';
    $page_name = 'Add Question';
    return view('admin.addQuestions',compact('page_title','page_name','quiz_id'));
}





public function addCert(){
    $page_name = 'Add Certificate';
    $page_title = 'formfiletext';//For Style Inheritance
    return view('admin.addCert',compact('page_title','page_name'));
}

public function add_Cert(Request $request){
    $path = 'uploads/certificates';

    $file = $request->file('image');
    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    $image = $filename;


     $Certificate = new Certificate;
     $Certificate->cat = $request->cat;

     $Certificate->cert = $image;
     $Certificate->save();
     Session::flash('message', "Certificate Has Been Added");
     return Redirect::back();

}


public function certs(){
    $page_title = 'list';
    $page_name = 'Site Administrator';
    $Certificate = Certificate::all();
    return view('admin.certs',compact('page_title','Certificate','page_name'));
}


public function editCert($id){
    $Cert = Certificate::find($id);
    $page_title = 'formfiletext';//For Style Inheritance
    $page_name = 'Edit Site Administrator';

    return view('admin.editCert',compact('page_title','Cert','page_name'));
}



public function edit_Cert(Request $request, $id){
    $path = 'uploads/certificates';

        if(isset($request->image)){
            $fileSize = $request->file('image')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image);
            }
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
                'cat'=>$request->cat,

                'cert'=>$image
        );
        DB::table('certificates')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Your Changes Have Been Saved");
        return Redirect::back();

}

public function deleteCert($id){

        DB::table('certificates')->where('id',$id)->delete();
        return Redirect::back();

}
// Fetch Sessions
public function checkSessions(){
    $Users = User::all();
    $page_title = 'list';//For Style Inheritance
    $page_name = 'User Sesions';

    return view('admin.sessions',compact('page_title','Users','page_name'));
}


public function addLessons(){

    $page_title = 'formfiletext';
    $page_name = 'Add Lesson';
    return view('admin.addLesson',compact('page_title','page_name'));
}


public function addTopic(){

    $page_title = 'formfiletext';
    $page_name = 'Add Topic';
    return view('admin.addTopic',compact('page_title','page_name'));
}

public function add_Lessons(Request $request){
    $objective = $request->objective;
    $title = $request->title;
    $course_id = $request->course_id;
    $Lesson = new Lesson;
    $Lesson->course_id = $course_id;
    $Lesson->title = $request->title;
    $Lesson->content = $objective;
    $Lesson->save();
    Session::flash('message', "Curriculum has Been added");
    return Redirect::back();
}

public function add_Topic(Request $request){
    // Process Files
    $path = 'uploads/file';
    if(isset($request->pdf)){
        $fileSize = $request->file('pdf')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('pdf');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'-file-'.$filename;
            $pdf = str_replace(' ', '',$image_main_temp);
            $file->move($path, $pdf);
            }
    }else{
        $pdf = 0;
    }
    $objective = $request->objective;
    $title = $request->title;
    $video = $request->video;
    $course_id = $request->course_id;
    $Topic = new Topic;
    $Topic->lesson_id = $course_id;
    $Topic->title = $request->title;
    $Topic->content = $objective;
    $Topic->video = $video;
    $Topic->file = $pdf;
    $Topic->save();
    Session::flash('message', "Curriculum has Been added");
    return Redirect::back();
}


public function lessons(){
    $page_title = 'list';
    $page_name = 'Site Administrator';
    $Lesson = Lesson::all();
    return view('admin.lessons',compact('page_title','Lesson','page_name'));
}

public function topics(){
    $page_title = 'list';
    $page_name = 'Site Administrator';
    $Topic = Topic::all();
    return view('admin.topics',compact('page_title','Topic','page_name'));
}



public function editTopic($id){
    $Topic = Topic::find($id);
    $page_title = 'formfiletext';//For Style Inheritance
    $page_name = 'Edit Site Administrator';

    return view('admin.editTopic',compact('page_title','Topic','page_name'));
}

public function editLesson($id){
    $Lesson = Lesson::find($id);
    $page_title = 'formfiletext';//For Style Inheritance
    $page_name = 'Edit Lesson';

    return view('admin.editLesson',compact('page_title','Lesson','page_name'));
}

public function edit_topic(Request $request, $id){
    $path = 'uploads/file';
    if(isset($request->pdf)){
        $fileSize = $request->file('pdf')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('pdf');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'-file-'.$filename;
            $pdf = str_replace(' ', '',$image_main_temp);
            $file->move($path, $pdf);
            }
    }else{
        $pdf = $request->pdf_cheat;
    }
    $objective = $request->objective;
    $title = $request->title;
    $video = $request->video;
    $course_id = $request->course_id;

    $updateDetails = array(
        'lesson_id' => $course_id,
        'title' => $request->title,
        'content' => $objective,
        'video' => $video,
        'file' => $pdf,
    );

    DB::table('topics')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function edit_lesson(Request $request, $id){
    $objective = $request->objective;
    $title = $request->title;
    $course_id = $request->course_id;

    $updateDetails = array(
        'course_id' => $course_id,
        'title' => $request->title,
        'content' => $objective,

    );

    DB::table('lessons')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function deleteLesson($id){
    DB::table('lessons')->where('id',$id)->delete();
    DB::table('topics')->where('lesson_id',$id)->delete();
    return Redirect::back();
}

public function deleteTopics($id){
    DB::table('topics')->where('id',$id)->delete();
    return Redirect::back();
}

public function addOrder(){
    $page_title = 'formfiletext';
    $page_name = 'Add Order';
    return view('admin.addOrder',compact('page_title','page_name'));
}

public function orders(){
    $Order = Order::all();
    $page_title = 'formfiletext';
    $page_name = 'List';
    return view('admin.orders',compact('page_title','page_name','Order'));
}

public function deleteOrders($id){
    DB::table('orders')->where('id',$id)->delete();
    return Redirect::back();
}
public function editOrders($id){
   $Order = Order::find($id);
   $page_title = 'formfiletext';
   $page_name = 'Orders';
   return view('admin.editOrders',compact('page_title','page_name','Order'));
}
public function swapOrder($id){
    $Order = Order::find($id);
    if($Order->status == 'pending'){
        $newStatus = 'Completed';
    }else{
        $newStatus = 'pending';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('orders')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

public function edit_Orders(Request $request, $id){
    $updateDetails = array(
        'total' => $request->total,
        'user_id' => $request->user_id,
        'content' => $request->content,
        'status' => $request->status,
        'title' => $request->title,


    );
    DB::table('orders')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function add_Order(Request $request){
    $Order = new Order;
    $Order->total = $request->total;
    $Order->user_id = $request->user_id;
    $Order->content = $request->content;
    $Order->status = $request->status;
    $Order->title = $request->title;
    $Order->save();
    Session::flash('message', "Order Has been Added");
    return Redirect::back();
}

public function order_explore($id){
    $Order = DB::table('orders')->where('id',$id)->get();

    $page_name = 'Orders';
    $page_title = 'Admin Home';
    return view('admin.order',compact('page_title','Order','page_name'));
}

// Event Controls

public function addEvent(){

    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'add Event';
    return view('admin.addEvent',compact('page_title','page_name'));
}

public function swapevent($id){
    $Event = Event::find($id);
    $status = $Event->status;
    if($status == 0)
    {
        $new_status = 1;
    }else{
        $new_status = 0;
    }
    $updateDetails = array(
        'status' => $new_status,
    );
    DB::table('events')->where('id',$id)->update($updateDetails);

   return Redirect::back();
}



public function add_Event(Request $request){
    $title = $request->title;
    $description = $request->content;
    $start = $request->start;
    $stop = $request->stop;
    $date = $request->date;

    $author = Auth::user()->name;
    $category = $request->cat;
    $path = 'uploads/events';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }




    $Event = new Event;
    $Event->title = $title;
    $Event->start = $request->start;
    $Event->stop = $request->stop;
    $Event->date = $request->date;
    $Event->content = $description;
    $Event->location = $request->venue;
    $Event->author = $author;
    $Event->image = $image_one;

    $Event->save();
    Session::flash('message', "Changes Saved Successfully");
    return Redirect::back();


}

public function events(){
    $Event = Event::all();
    $page_title = 'list';
    $page_name = 'Event';
    return view('admin.events',compact('page_title','Event','page_name'));
}

public function editEvent($id){
    $Event = Event::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Event';
    return view('admin.editEvent',compact('page_title','Event','page_name'));
}


public function edit_Event(Request $request, $id){
    $path = 'uploads/events';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }


    $updateDetails = array(
        'title' => $request->title,
        'content' => $request->content,
        'author' => $request->author,
        'location' => $request->location,
        'venue' => $request->venue,
        'start' => $request->start,
        'stop' => $request->stop,

        'date' => $request->date,
        'image' =>$image_one,

    );
    DB::table('events')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function delete_Event($id){
    DB::table('events')->where('id',$id)->delete();

    return Redirect::back();
}



public function addDestination(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Destination';
    return view('admin.addDestination',compact('page_title','page_name'));
}

public function add_Destination(Request $request){

    $path = 'uploads/destinations';
    if(isset($request->image_one)){


            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){


            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);

    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){


            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);

    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){


            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);

    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images


    $Destination = new Destination;
    $Destination->slung = Str::slug($request->title);
    $Destination->title = $request->title;
    $Destination->location = $request->location;
    $Destination->content = $request->content;
    $Destination->price = $request->price;
    // $Destination->coordinates = $request->coordinates;
    $Destination->country = $request->country;
    $Destination->meta  = $request->meta;

    $Destination->image_one = $image_one;
    $Destination->image_two = $image_two;
    $Destination->image_three = $image_three;
    $Destination->image_four = $image_four;

    $Destination->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function destinations(){
    $Destination = Destination::all();
    $page_title = 'list';
    $page_name = 'All Destinations';
    return view('admin.destinations',compact('page_title','Destination','page_name'));
}

public function editDestination($id){
    $Destination = Destination::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editDestination',compact('page_title','Destination','page_name'));
}


public function edit_Destination(Request $request, $id){
    $path = 'uploads/destinations';
    if(isset($request->image_one)){


            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){


            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);

    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){


            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);

    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){


            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);

    }else{
        $image_four = $request->image_four_cheat;
    }

    $updateDetails = array(
        'title' => $request->title,
        'slung' =>  Str::slug($request->title),
        'country'=>$request->country,
        'location' => $request->location,
        'content' => $request->content,
        'price' => $request->price,
        'video' => $request->video,
        'guide' => $request->guide,
        'meta' => $request->meta,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'image_four' => $image_four,


    );
    DB::table('destinations')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteDestination($id){

    DB::table('destinations')->where('id',$id)->delete();
    DB::table('itineries')->where('product_id',$id)->delete();
    return Redirect::back();
}
public function swapDestination($id){
    $Order = Destination::find($id);
    if($Order->status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('destinations')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }



public function swapSlider($id){
    $Order = Destination::find($id);
    if($Order->slider == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'slider'=>$newStatus
    );
    DB::table('destinations')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }


//  Experience
public function addExperience(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Experience';
    return view('admin.addExperience',compact('page_title','page_name'));
}

public function add_Experience(Request $request){

    $path = 'uploads/experiences';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images
    //Additional images
    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->pro_img_cheat;
    }
    //Additional images
    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->pro_img_cheat;
    }
    //Additional images

    $CheckLocations = DB::table('locations')->where('name',$request->location)->get();
    if(count($CheckLocations) == 0){
    // Add Model
    $Fuel = new Location;
    $Fuel->name = $request->location;
    $Fuel->save();
    }

    $CheckDuration = DB::table('durations')->where('name',$request->duration)->get();
    if(count($CheckDuration) == 0){
    // Add Model
    $Fuel = new Duration;
    $Fuel->name = $request->duration;
    $Fuel->save();
    }
    $slung = str_slug($request->title);

    $Experience = new Experience;
    $Experience->title = $request->title;
    $Experience->slung =  Str::slug($request->title);
    $Experience->location = $request->location;
    $Experience->duration = $request->duration;
    $Experience->date = $request->date;
    $Experience->content = $request->content;
    $Experience->price = $request->price;
    // $Experience->coordinates = $request->coordinates;
    $Experience->guide = $request->guide;
    $Experience->cat = $request->cat;
    $Experience->meta  = $request->meta;
    $Experience->destination  = $request->town;


    $Experience->image_one = $image_one;
    $Experience->image_two = $image_two;
    $Experience->image_three = $image_three;
    $Experience->image_four = $image_four;
    $Experience->image_five = $image_five;
    $Experience->image_six = $image_six;
    $Experience->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function Experiences(){
    $Experience = Experience::all();
    $page_title = 'list';
    $page_name = 'All Experiences';
    return view('admin.experiences',compact('page_title','Experience','page_name'));
}

public function editExperience($id){
    $Experience = Experience::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editExperience',compact('page_title','Experience','page_name'));
}


public function edit_Experience(Request $request, $id){
    $path = 'uploads/experiences';
    if(isset($request->image_one)){


            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->image_five_cheat;
    }

    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->image_six_cheat;
    }

    $CheckLocations = DB::table('locations')->where('name',$request->location)->get();
    if(count($CheckLocations) == 0){
    // Add Model
    $Fuel = new Location;
    $Fuel->name = $request->location;
    $Fuel->save();
    }

    $CheckDuration = DB::table('durations')->where('name',$request->duration)->get();
    if(count($CheckDuration) == 0){
    // Add Model
    $Fuel = new Duration;
    $Fuel->name = $request->duration;
    $Fuel->save();
    }



    $updateDetails = array(
        'title' => $request->title,
        'slung' => Str::slug($request->title),
        'location' => $request->location,
        'content' => $request->content,
        'price' => $request->price,
        'duration' => $request->duration,
        'date' => $request->date,
        'guide' => $request->guide,
        'cat' => $request->cat,
        'meta' => $request->meta,
        'destination' => $request->town,
        'country'=>$request->country,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'image_four' => $image_four,
        'image_five' => $image_five,
        'image_six' => $image_six,


    );
    DB::table('experiences')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function edit_Experiences(){
    $Experience = DB::table('hotels')->get();
    foreach($Experience as $Experiences)
    {
        $title = $Experiences->name;

        $updateDetails = array(
            'slung' =>  Str::slug($title)
        );
        DB::table('hotels')->where('id',$Experiences->id)->update($updateDetails);
    }
    echo "Done";

}
public function deleteExperience($id){

    DB::table('experiences')->where('id',$id)->delete();
    DB::table('itineries')->where('product_id',$id)->delete();
    return Redirect::back();
}
public function swapExperience($id){
    $Order = Experience::find($id);
    if($Order->status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('experiences')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

 public function swapBeach($id){
    $Order = Experience::find($id);
    if($Order->beach_holidays == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'beach_holidays'=>$newStatus
    );
    DB::table('experiences')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }


 public function addHotel(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Hotel';
    return view('admin.addHotel',compact('page_title','page_name'));
}

public function add_Hotel(Request $request){

    $path = 'uploads/hotels';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images
    //Additional images
    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->pro_img_cheat;
    }
    //Additional images
    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->pro_img_cheat;
    }
    //Additional images


    $Hotel = new Hotel;
    $Hotel->name = $request->name;
    $Hotel->location = $request->location;
    $Hotel->meta = $request->meta;
    $Hotel->content = $request->content;
    $Hotel->image_one = $image_one;
    $Hotel->image_two = $image_two;
    $Hotel->image_three = $image_three;
    $Hotel->image_four = $image_four;
    $Hotel->image_five = $image_five;
    $Hotel->image_six = $image_six;

    $Hotel->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function hotels(){
    $Hotel = Hotel::all();
    $page_title = 'list';
    $page_name = 'All Hotels';
    return view('admin.hotels',compact('page_title','Hotel','page_name'));
}

public function editHotel($id){
    $Hotel = Hotel::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editHotel',compact('page_title','Hotel','page_name'));
}


public function edit_Hotel(Request $request, $id){
    $path = 'uploads/hotels';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }


    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->image_five_cheat;
    }

    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->image_six_cheat;
    }

    $updateDetails = array(
        'name' => $request->name,
        'location' => $request->location,
        'content' => $request->content,
        'meta' => $request->meta,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'image_four' => $image_four,
        'image_five' => $image_five,
        'image_six' => $image_six,


    );
    DB::table('hotels')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteHotel($id){

    DB::table('hotels')->where('id',$id)->delete();
    return Redirect::back();
}
public function swapHotel($id){
    $Order = Hotel::find($id);
    if($Order->status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('hotels')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

 public function addRoom(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Room';
    return view('admin.addRoom',compact('page_title','page_name'));
}

public function add_Room(Request $request){

    $path = 'uploads/rooms';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images


    $Room = new Room;
    $Room->name = $request->name;
    $Room->price = $request->price;
    $Room->hotel_id = $request->hotel_id;
    $Room->content = $request->content;
    $Room->image_one = $image_one;
    $Room->image_two = $image_two;
    $Room->image_three = $image_three;
    $Room->image_four = $image_four;

    $Room->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function rooms(){
    $Room = Room::all();
    $page_title = 'list';
    $page_name = 'All Rooms';
    return view('admin.rooms',compact('page_title','Room','page_name'));
}

public function room($id){
    $Room = DB::table('rooms')->where('hotel_id',$id)->get();
    $page_title = 'list';
    $page_name = 'All Rooms';
    return view('admin.rooms',compact('page_title','Room','page_name'));
}

public function editRoom($id){
    $Room = Room::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editRoom',compact('page_title','Room','page_name'));
}


public function edit_Room(Request $request, $id){
    $path = 'uploads/rooms';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }

    $updateDetails = array(
        'name' => $request->name,

        'content' => $request->content,
        'price' => $request->price,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'image_four' => $image_four,


    );
    DB::table('rooms')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteRoom($id){

    DB::table('rooms')->where('id',$id)->delete();
    return Redirect::back();
}
public function swapRoom($id){
    $Order = Room::find($id);
    if($Order->availability == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'availability'=>$newStatus
    );
    DB::table('rooms')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

//  Guide
public function addGuide(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Guide';
    return view('admin.addGuide',compact('page_title','page_name'));
}

public function add_Guide(Request $request){

    $path = 'uploads/guides';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }




    $Guide = new Guide;
    $Guide->name = $request->name;
    $Guide->email = $request->email;
    $Guide->mobile = $request->mobile;
    $Guide->content = $request->content;
    $Guide->image_one = $image_one;


    $Guide->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function guides(){
    $Guide = Guide::all();
    $page_title = 'list';
    $page_name = 'All Guides';
    return view('admin.guides',compact('page_title','Guide','page_name'));
}

public function Guide($id){
    $Guide = DB::table('guides')->where('hotel_id',$id)->get();
    $page_title = 'list';
    $page_name = 'All Guides';
    return view('admin.Guides',compact('page_title','Guide','page_name'));
}

public function editGuide($id){
    $Guide = Guide::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editGuide',compact('page_title','Guide','page_name'));
}


public function edit_Guide(Request $request, $id){
    $path = 'uploads/guides';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }



    $updateDetails = array(
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'content' => $request->content,
        'image_one' => $image_one,



    );
    DB::table('guides')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteGuide($id){

    DB::table('guides')->where('id',$id)->delete();
    return Redirect::back();
}
// Itineries
//  Experience

public function addItinery($keyword){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Experience';
    return view('admin.addItinery',compact('page_title','page_name','keyword'));
}

public function add_Itinery(Request $request){

    $path = 'uploads/itineries';
    if(isset($request->image_one)){
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){


        $file = $request->file('image_two');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'image'.$filename;
        $image_two = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_two);
        }
else{
    $image_two = $request->pro_img_cheat;
}



    $Itinery = new Itinery;
    $Itinery->content = $request->content;
    $Itinery->type = $request->type;
    $Itinery->product_id = $request->product_id;
    $Itinery->day = $request->day;
    $Itinery->image_one = $image_one;
    $Itinery->image_two = $image_two;


    $Itinery->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}




public function itineries(){
    $Itinery = Itinery::all();
    $page_title = 'list';
    $page_name = 'All Itinery';
    return view('admin.itineries',compact('page_title','Itinery','page_name'));
}



public function editItinery($id){
    $Itinery = Itinery::find($id);
    $keyword = $Itinery->type;
    $page_title = 'formfiletext';
    $page_name = 'Edit Itinery';
    return view('admin.editItinery',compact('page_title','Itinery','page_name','keyword'));
}


public function edit_Itinery(Request $request, $id){
    $path = 'uploads/itineries';
    if(isset($request->image_one)){

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){

        $file = $request->file('image_two');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'image'.$filename;
        $image_two = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_two);

    }else{
        $image_two = $request->image_two_cheat;
    }



    $updateDetails = array(
        'day' => $request->day,
        'type' => $request->type,
        'product_id' => $request->product_id,
        'content' => $request->content,
        'image_one' => $image_one,
        'image_two' => $image_two,



    );
    DB::table('itineries')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteItinery($id){


    DB::table('itineries')->where('id',$id)->delete();
    return Redirect::back();
}


// Booking
public function bookings_explore($id){
    $Booking = Booking::find($id);
    $page_name = 'Booking';
    $page_title = 'Admin Home';
    return view('admin.booking',compact('page_title','Booking','page_name'));
}


public function bookings(){
    $Booking = Booking::all();
    $page_title = 'list';
    $page_name = 'All Bookings';
    return view('admin.bookings',compact('page_title','Booking','page_name'));
}

public function swapBooking($id){
    $Booking = Booking::find($id);
    if($Booking->status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('bookings')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

 public function deleteBooking($id){


    DB::table('bookings')->where('id',$id)->delete();
    return Redirect::back();
}

//  Car
public function addCar(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Car';
    return view('admin.addCar',compact('page_title','page_name'));
}

public function add_Car(Request $request){

    $path = 'uploads/Cars';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images
    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->pro_img_cheat;
    }
    //Additional images
    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->pro_img_cheat;
    }
    //Additional images

    $CheckModel = DB::table('models')->where('name',$request->model)->get();
    if(count($CheckModel) == 0){
    // Add Model
    $Model = new Models;
    $Model->name = $request->model;
    $Model->save();
    }

    $CheckFuel = DB::table('fuels')->where('name',$request->fuel)->get();
    if(count($CheckFuel) == 0){
    // Add Model
    $Fuel = new Fuel;
    $Fuel->name = $request->fuel;
    $Fuel->save();
    }

    $Car = new Car;
    $Car->name = $request->name;
    $Car->price = $request->price;
    $Car->model = $request->model;
    $Car->year = $request->year;
    $Car->fuel = $request->fuel;
    $Car->meta = $request->meta;
    $Car->speed = $request->speed;
    $Car->milage = $request->milage;
    $Car->capacity = $request->capacity;
    $Car->luggage = $request->luggage;
    $Car->engine = $request->engine;
    $Car->transmission = $request->transmission;
    $Car->navigation = $request->navigation;
    $Car->child = $request->child;
    $Car->music = $request->music;
    $Car->content = $request->content;
    $Car->category = $request->cartype;

    $Car->image_one = $image_one;
    $Car->image_two = $image_two;
    $Car->image_three = $image_three;
    $Car->image_four = $image_four;
    $Car->image_five = $image_five;
    $Car->image_six = $image_six;

    $Car->save();

    Session::flash('message', "You have Added One New Car");
    return Redirect::back();
}


public function cars(){
    $Car = Car::all();
    $page_title = 'list';
    $page_name = 'All Cars';
    return view('admin.cars',compact('page_title','Car','page_name'));
}

public function editCar($id){
    $Car = Car::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editCar',compact('page_title','Car','page_name'));
}


public function edit_Car(Request $request, $id){
    $path = 'uploads/Cars';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message_image_two', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->image_four_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        }
    }else{
        $image_five = $request->image_five_cheat;
    }

    if(isset($request->image_six)){
        $fileSize = $request->file('image_six')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message_image_three', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        }
    }else{
        $image_six = $request->image_six_cheat;
    }

    $CheckModel = DB::table('models')->where('name',$request->model)->get();
    if(count($CheckModel) == 0){
    // Add Model
    $Model = new Models;
    $Model->name = $request->model;
    $Model->save();
    }

    $CheckFuel = DB::table('fuels')->where('name',$request->fuel)->get();
    if(count($CheckFuel) == 0){
    // Add Model
    $Fuel = new Fuel;
    $Fuel->name = $request->fuel;
    $Fuel->save();
    }

    $updateDetails = array(

            'name' => $request->name,
            'price' => $request->price,
            'model' => $request->model,
            'year' => $request->year,
            'fuel' => $request->fuel,
            'meta' => $request->meta,
            'speed' => $request->speed,
            'milage' => $request->milage,
            'capacity' => $request->capacity,
            'luggage' => $request->luggage,
            'engine' => $request->engine,
            'transmission' => $request->transmission,
            'navigation' => $request->navigation,
            'child' => $request->child,
            'music' => $request->music,
            'category' => $request->cartype,
            'content' => $request->content,

            'image_one' => $image_one,
            'image_two' => $image_two,
            'image_three' => $image_three,
            'image_four' => $image_four,
            'image_five' => $image_five,
            'image_six' => $image_six,


    );
    DB::table('cars')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteCar($id){

    DB::table('cars')->where('id',$id)->delete();
    DB::table('itineries')->where('product_id',$id)->delete();
    return Redirect::back();
}
public function swapCar($id){
    $Order = Car::find($id);
    if($Order->executive == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'executive'=>$newStatus
    );
    DB::table('cars')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }


public function deleteImage($id,$image,$table){

    $updateDetails = array(
        $image=>NULL,
    );

    DB::table($table)->where('id',$id)->update($updateDetails);
    return Redirect::back();
}


public function cartypes(){
    $CarType = CarType::all();
    $page_title = 'list';
    $page_name = 'Categories';
    return view('admin.cartypes',compact('page_title','CarType','page_name'));
}


public function editCarType($id){
    $CarType = CarType::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Car Types';
    return view('admin.editCarType',compact('page_title','CarType','page_name'));
}

public function edit_CarType(Request $request, $id){
    $path = 'uploads/cartypes';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
    $updateDetails = array(
        'name'=>$request->name,
        'seats'=>$request->seats,
        'luggage'=>$request->luggage,
        // 'description'=>$request->content,
        'image'=>$image

    );
    DB::table('cartypes')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}


public function transfers(){
    $page_title = 'list';
    $page_name = 'Transfers';
    $Transfer = Transfer::all();
    return view('admin.transfers',compact('page_title','Transfer','page_name'));
}

public function addTransfer(){

    // $Transfer = Transfer::find($id);
    $page_title = 'formfiletext';//For Style Inheritance
    $page_name = 'Add Transfers';

    return view('admin.addTransfer',compact('page_title','page_name'));
}

// Add_Transfers
public function add_Transfer(Request $request){
    $path = 'uploads/transfers';

        if(isset($request->image)){
            $fileSize = $request->file('image')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image);
            }
        }else{
            $image = "0";
        }

                $Transfers = new Transfer;
                $Transfers->from = $request->from;
                $Transfers->to = $request->to;
                $Transfers->dep = $request->dep;
                $Transfers->arr = $request->arr;
                $Transfers->stop = $request->stop;
                $Transfers->duration = $request->duration;
                $Transfers->mode = $request->mode;
                $Transfers->capacity = $request->capacity;
                $Transfers->price = $request->price;
                $Transfers->image = $image;
                $Transfers->save();


        Session::flash('message', "Your Changes Have Been Saved");
        return Redirect::back();

}

public function editTransfer($id){

    $Transfer = Transfer::find($id);
    $page_title = 'formfiletext';//For Style Inheritance
    $page_name = 'Edit Transfers';

    return view('admin.editTransfer',compact('page_title','Transfer','page_name'));
}

public function edit_Transfer(Request $request, $id){
    $path = 'uploads/transfers';

        if(isset($request->image)){
            $fileSize = $request->file('image')->getClientSize();
            if($fileSize>=1800000){
               Session::flash('message', "File Exceeded the maximum allowed Size");
               Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

            }else{

                $file = $request->file('image');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image);
            }
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'from'=>$request->from,
            'to'=>$request->to,
            'dep'=>$request->dep,
            'arr'=>$request->arr,
            'stop'=>$request->stop,
            'duration'=>$request->duration,
            'mode'=>$request->mode,
            'capacity'=>$request->capacity,
            'price'=>$request->price,

            'image'=>$image
        );
        DB::table('transfers')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Your Changes Have Been Saved");
        return Redirect::back();

}



public function deleteTransfer($id){

        DB::table('transfers')->where('id',$id)->delete();
        return Redirect::back();

}

//
public function countries(){
    $Country = Country::all();
    $page_title = 'list';
    $page_name = 'Countries';
    return view('admin.countries',compact('page_title','Country','page_name'));
}

public function editCountries($id){
    $Country = Country::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Services';
    return view('admin.editCountries',compact('page_title','Country','page_name'));
}


public function edit_Countries(Request $request, $id){
    $path = 'uploads/countries';
    if(isset($request->image)){

            $file = $request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image);

    }else{
        $image = $request->image_cheat;
    }

    if(isset($request->banner)){
        $file = $request->file('banner');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'banner'.$filename;
        $banner = str_replace(' ', '',$image_main_temp);
        $file->move($path, $banner);

    }else{
        $banner = $request->banner_cheat;
    }




    $updateDetails = array(
        'title' => $request->title,
        'video' => $request->video,
        'meta' => $request->meta,
        'content' => $request->content,
        'image' =>$image,
        'banner' =>$banner,

    );
    DB::table('countries')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteCountries($id){
    DB::table('countries')->where('id',$id)->delete();

    return Redirect::back();
}

public function addSample(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Sample';
    return view('admin.addSample',compact('page_title','page_name'));
}

public function add_Sample(Request $request){

    $path = 'uploads/samples';
    if(isset($request->image_one)){
        $fileSize = $request->file('image_one')->getClientSize();
            if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
            return Redirect::back();
            }else{

            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            }
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        $fileSize = $request->file('image_two')->getClientSize();
         if($fileSize>=1800000){
            Session::flash('message', "File Exceeded the maximum allowed Size");
            Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

         }else{

            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         }
    }else{
        $image_two = $request->pro_img_cheat;
    }


    if(isset($request->image_three)){
        $fileSize = $request->file('image_three')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        }
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four')->getClientSize();
        if($fileSize>=1800000){
           Session::flash('message', "File Exceeded the maximum allowed Size");
           Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");

        }else{

            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        }
    }else{
        $image_four = $request->pro_img_cheat;
    }
    //Additional images


    $Sample = new Sample;
    $Sample->title = $request->title;
    $Sample->slung =  Str::slug($request->title);
    $Sample->location = $request->location;
    $Sample->content = $request->content;
    $Sample->price = $request->price;
    // $Sample->coordinates = $request->coordinates;
    $Sample->guide = $request->guide;
    $Sample->meta  = $request->meta;

    $Sample->image_one = $image_one;
    $Sample->image_two = $image_two;
    $Sample->image_three = $image_three;
    $Sample->image_four = $image_four;

    $Sample->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function samples(){
    $Sample = Sample::all();
    $page_title = 'list';
    $page_name = 'All Samples';
    return view('admin.samples',compact('page_title','Sample','page_name'));
}

public function editSample($id){
    $Sample = Sample::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editSample',compact('page_title','Sample','page_name'));
}


public function edit_Sample(Request $request, $id){
    $path = 'uploads/samples';
    if(isset($request->image_one)){


            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){


            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);

    }else{
        $image_two = $request->image_two_cheat;
    }


    if(isset($request->image_three)){

            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);

    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){


            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);

    }else{
        $image_four = $request->image_four_cheat;
    }


    $updateDetails = array(
        'title' => $request->title,
        'slung' => Str::slug($request->title),
        'country'=>$request->country,
        'location' => $request->location,
        'content' => $request->content,
        'price' => $request->price,
        'video' => $request->video,
        'guide' => $request->guide,
        'meta' => $request->meta,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'image_four' => $image_four,


    );
    DB::table('samples')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteSample($id){

    DB::table('samples')->where('id',$id)->delete();
    DB::table('itineries')->where('product_id',$id)->delete();
    return Redirect::back();
}

public function swapSample($id){
    $Order = Sample::find($id);
    if($Order->status == '1'){
        $newStatus = '0';
    }else{
        $newStatus = '1';
    }
    $updateDetails = array(
        'status'=>$newStatus
    );
    DB::table('samples')->where('id',$id)->update($updateDetails);
    return Redirect::back();

 }

//

public function addExtra(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add Extra';
    return view('admin.addExtra',compact('page_title','page_name'));
}

public function add_Extra(Request $request){

    $path = 'uploads/extras';

    if(isset($request->image)){

        $file = $request->file('image');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'image'.$filename;
        $image = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image);

    }else{
        $image = "0";
    }

    if(isset($request->image_one)){
        $file = $request->file('image_one');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'image'.$filename;
        $image_one = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }
        //Additional images


    $Extra = new Extra;
    $Extra->title = $request->title;
    $Extra->type = $request->type;
    $Extra->product_id = $request->product_id;
    $Extra->slung =  Str::slug($request->title);
    $Extra->content = $request->content;
    $Extra->image = $image;
    $Extra->image_one = $image_one;
    $Extra->save();

    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}


public function extras(){
    $Extra = Extra::all();
    $page_title = 'list';
    $page_name = 'All Extras';
    return view('admin.extra',compact('page_title','Extra','page_name'));
}

public function editExtra($id){
    $Extra = Extra::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editExtra',compact('page_title','Extra','page_name'));
}


public function edit_Extra(Request $request, $id){
    $path = 'uploads/extras';
    if(isset($request->image)){

        $file = $request->file('image');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'image'.$filename;
        $image = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image);

    }else{
        $image = $request->image_cheat;
    }

    if(isset($request->image_one)){
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);

    }else{
        $image_one = $request->image_one_cheat;
    }

    $updateDetails = array(
        'title' => $request->title,
        'product_id' =>$request->product_id,
        'slung' => Str::slug($request->title),
        'content' => $request->content,
        'image_one' => $image_one,
        'image' => $image,

    );
    DB::table('extras')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteExtra($id){

    DB::table('extra')->where('id',$id)->delete();
    return Redirect::back();
}



}




