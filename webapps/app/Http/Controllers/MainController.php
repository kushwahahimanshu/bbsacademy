<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
//use App\Settings;
use App\User_update;
use App\AboutPages;
use App\testimonial;
use App\Toppers;
use App\News;
use App\JobPost;
use App\Center_location;
use App\Events;
use App\Team;
use App\Franchise;
use App\Upload_files;
use App\CourseCategory;
use App\CourseContent;
use App\Course;

use App\Ebook;
use App\EbookCategory;
use App\EbookOrder;
use Auth;

use App\VideoCourseCategory;
use App\VideoCourse;
use App\Video;
use App\VideoOrder;

use DB;


class MainController extends Controller
{
    public $data = null;

    public function __construct() {
        $this->data['settings'] = DB::table('settings')->OrderBy('id', 'desc')->get();
        $this->data['course'] = CourseCategory::where('parent_category', null)->OrderBy('id', 'asc')->get();

    }

    public function index() {
        $data = $this->data;
        $data['page_code'] = 1;
    	$data['info'] = Slider::where('page', 'home')->OrderBy('order_no', 'asc')->get();
        //$data['settings'] = Settings::OrderBy('id', 'desc')->get();
        $data['test'] = testimonial::OrderBy('id', 'asc')->get();
        $data['page']=User_update::orderBy('id', 'asc')->first();
        $data['news']=News::get();
        $topper = DB::table('toppers')->get();

        //$settings = $this->settings;

	return view('webviews.index', $data,compact('topper'));
    }
     public function chairman()
    {
        $data = $this->data;
        $data['page_code'] = 9;
    	$data['page_title'] = "Chairman Note";
        $title['page_subtitle']="Chairman Message";
        $data['info'] = AboutPages::Where('id', 2)->first();
        //$data['settings'] = Settings::OrderBy('id', 'desc')->get();
    	return view('webviews.chairman', $data,$title);
    }
     public function about()
    {
        $data = $this->data;
        $data['page_code'] = 2;
    	$data['page_title'] = "About Us";
    	$title['page_subtitle']="About BBS";
        $data['info'] = AboutPages::where('id', 1)->first();
        //$data['settings'] = Settings::OrderBy('id', 'desc')->get();
    	return view('webviews.chairman', $data,$title);
    }
     public function mission()
    {
        $data = $this->data;
        $data['page_code'] = 10;
    	$data['page_title'] = "Vission & Mission";
    	$title['page_subtitle']="BBS Vission & Mission";
        $data['info'] = AboutPages::Where('id', 3)->first();
    	return view('webviews.chairman', $data,$title);
    }
     public function team()
    {
        $data = $this->data;
        $data['page_code'] = 11;
        $data['info'] = Team::get();
    	return view('webviews.our_team',$data);
    }
    public function media()
    {
        $data = $this->data;
        $data['page_code'] = 12;
         $data['info'] = Events::get();
        return view('webviews.media & events',$data);
    }
    public function franchise()
    {
        $data = $this->data;
        $data['page_code'] = 4;
        
        $data['info'] = Slider::where('page', 'franchise')->get();
        $data['test'] = Franchise::get();
        return view('webviews.franchise',$data);
    }
    public function center()
    { 
        $data = $this->data;
        $data['page_code'] = 5;
        $data['info'] = Center_location::get();
    	return view('webviews.center_locator',$data);
    }
    public function career()
    {
        $data = $this->data;
        $data['page_code'] = 6;
        $data['jobpost']= JobPost::all();
    	return view('webviews.career',$data);
    }
    public function contact()
    {
        $data = $this->data;
        $data['page_code'] = 8;
    	return view('webviews.contact',$data);
    }
    public function online()
    {
        $data = $this->data;
        $data['page_code'] = 20;
        $data['flag'] = 1;
        $hk['page_title'] = "Online Cource";
         $data['content']= "Bestselling Online Test Series";
        return view('webviews.online', $hk,$data);
    }
     public function video()
    {
        $data = $this->data;
        $data['page_code'] = 21;
        $data['flag'] = 2;
        $hk['page_title'] = "Video Cource";
        $data['content']= "Bestselling Video Courses";
        $data['courses'] = VideoCourse::orderBy('name', 'desc')->get(); 
        $data['category']=VideoCourseCategory::get();   
        return view('webviews.online', $hk,$data);
    }
    public function courseCategory($id) 
    {
       $data = $this->data;
        $data['page_code'] = 21;
        $data['flag'] = 2;
        $data['content']= "Bestselling ".$id. " Video Courses";
        $data['page_title'] = $id.' Courses';
        $data['courses'] = VideoCourse::where('category', $id)->get(); 
        $data['category']=VideoCourseCategory::get();   
        return view('webviews.online', $data);
    }
    /* public function viewVideo($id, $video = null) 
    {   
        $data = $this->data;
        $data['page_title'] = "View Video Details";
        $data['page_code'] = 25;
        $data['category']=VideoCourseCategory::get();   

        if($video == null) 
        {
            $data['courses'] = VideoCourse::where('id', $id)->first();
            $data['is_bought'] = 0;
            if(EbookOrder::where([
                ['user_id', '=', Auth::id()],
               // ['type', '=', 2],
                ['ebook_id', '=', $id],
                ['payment_status', '=', 'Credit'],
            ])->count() > 0) 
            {
                $data['is_bought'] = 1;
            }
            return view('webviews/view_book', $data);
        } 
    }*/
     public function viewVideo($id, $video = null) 
    {   
        $data = $this->data;
        $data['page_title'] = "View Video Details";
        $data['page_code'] = 25;
        $data['category']=VideoCourseCategory::get();   

        if($video == null) {
            $data['courses'] = VideoCourse::where('id', $id)->first();
            $data['demo'] = Video::where('course', $data['courses']->id)->where('demo', 1)->first();
            $data['videos'] = Video::where('course', $data['courses']->id)->orderBy('order_no', 'asc')->get();
            $data['is_bought'] = 0;
            if(VideoOrder::where([
                ['user_id', '=', Auth::id()],
                //['type', '=', 2],
                ['course_id', '=', $id],
                ['payment_status', '=', 'Credit'],
            ])->count() > 0) {
                $data['is_bought'] = 1;
            }
            return view('webviews/view_video', $data);
        }/* else {
            $data['course'] = Course::where('id', $id)->first();
            $data['demo'] = Video::where('course', $data['course']->id)->where('id', $video)->first();
            $data['videos'] = Video::where('course', $data['course']->id)->orderBy('order_no', 'asc')->get();
            $data['is_bought'] = 0;
            if(CourseOrder::where([
                ['user_id', '=', Auth::id()],
                ['type', '=', 2],
                ['course_id', '=', $id],
                ['payment_status', '=', 'Credit'],
            ])->count() > 0) {
                $data['is_bought'] = 1;
            }
            return view('webviews/view_course', $data);
        }*/
    }
    public function study()
    {
        $data = $this->data;
        $data['page_code'] = 22;
        $data['flag'] = 3;
        $hk['page_title'] = "Study Materials";
         $data['content']= "Bestselling Study Materials";
        return view('webviews.online', $hk,$data);
    }
    public function book()
    {
        $data = $this->data;
        $data['page_code'] = 23;
        $data['flag'] = 4;
        $data['books']=Ebook::get();
        $data['category']=EbookCategory::get();
        $hk['page_title'] = "Books";
        $data['content']= "Bestselling Online Books";
        return view('webviews.online', $hk,$data); 
    }
    public function bookCategory($id) 
    {
        $data = $this->data;
        $data['page_code'] = 23;
        $data['flag'] = 4;
        $data['content']= "Bestselling Online Books";

        $data['page_title'] = $id.' Courses';
        $data['books'] = Ebook::where('category', $id)->get();
        $data['category']=EbookCategory::get();
        return view('webviews.online', $data);
    }
     public function viewBook($id, $video = null) 
    {   
        $data = $this->data;
        $data['page_title'] = "View Book Details";
        $data['page_code'] = 24;
        $data['category']=EbookCategory::get();

        if($video == null) 
        {
            $data['courses'] = Ebook::where('id', $id)->first();
            $data['is_bought'] = 0;
            if(EbookOrder::where([
                ['user_id', '=', Auth::id()],
               // ['type', '=', 2],
                ['ebook_id', '=', $id],
                ['payment_status', '=', 'Credit'],
            ])->count() > 0) 
            {
                $data['is_bought'] = 1;
            }
            return view('webviews/view_book', $data);
        } 
    }
    public function demopdf(Request $request,$id)
    {   
        $data['course'] = Ebook::where('id', $id)->first();

        $deviceType = null;
            return redirect(url('ebook/demopdf/'.$data['course']->demo));



        
         
    } 

    public function bank($bank, $bank2 = null)
    {
        //echo $bank2;
        if($bank2 != null) {
            $bank = $bank.'/'.$bank2;
        }
        //echo $bank;

        $data = $this->data;
        $data['page_code'] = 7;
       $data['courses']=Course::where('parent_category',urldecode($bank))->get();
       $hk['page_title'] = "Bank Coaching";
        return view('webviews.coaching', $hk,$data); 
    }
    public function download_file()
    {
        $data = $this->data;
        $data['page_title'] = "Download";
        $data['page_code'] = 1;
        return view('webviews.download',$data);
    }
    public function monthly()
    {
        $data = $this->data;
        $data['page_title'] = "Monthly Magazines";
        $data['page_code'] = 1;
        $data['info'] = Upload_files::where('f_type','monthly')->OrderBy('id', 'desc')->get();
        return view('webviews.show_files',$data);
    }
    public function newslatter()
    {
        $data = $this->data;
        $data['page_title'] = "News Latter";
        $data['page_code'] = 1;
        $data['info'] = Upload_files::where('f_type','newslatter')->OrderBy('id', 'desc')->get();
        return view('webviews.show_files',$data);
    }
    public function examcracker()
    {
        $data = $this->data;
        $data['page_title'] = "Exam Cracker";
        $data['page_code'] = 1;
        $data['info'] = Upload_files::where('f_type','examcracker')->OrderBy('id', 'desc')->get();
        return view('webviews.show_files',$data);
    }
    public function mock()
    {
        $data = $this->data;
        $data['page_title'] = "Mock Practice Test";
        $data['page_code'] = 1;
        $data['info'] = Upload_files::where('f_type','mock')->OrderBy('id', 'desc')->get();
        return view('webviews.show_files',$data);
    }
     public function courseDetails($id)
    {
        $data = $this->data;
        $data['page_code'] = 15;
        $data['test']=CourseContent::where('course_id',$id)->get();
        return view('webviews/course_details',$data);
    }
   public function std_login()
   {
       return view('components.student_login');
   }
   public function std_reg()
   {
       return view('components.std_reg');
   }
}
