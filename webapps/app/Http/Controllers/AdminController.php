<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseContent;
use App\CourseCategory;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    public function courseCategory()
    {
        $data['category']=CourseCategory::where('parent_category',null)->get();
        return view('admin.forms.create_course_category',$data);
    }
    public function categorySubmit(Request $req)
    {
        $reg = new CourseCategory;

        $reg->course_category = $req->course_category;
        $reg->parent_category = $req->course_parent;
        
        $reg->save();
        return redirect('course-category')->with('msg','Course Category add Successfully');
    }
    public function courseName()
    {
        $data['flag']=2;
        $data['category']=CourseCategory::where('parent_category','!=',null)->get();
    	return view('admin.forms.create-course',$data);
    }
    public function courseSubmit(Request $req)
    {
        $reg = new Course;
        $image=$req->file('image');
            $imagename='course'.time().'.'.$req->image->extension();
            $destination=storage_path('../../../www/bbs/upload/course_img');
            $image->move($destination,$imagename);
        $reg->image='course_img/'.$imagename;   
        $reg->course_name = $req->course_name;
        $reg->parent_category = $req->course_parent;
        
        $reg->save();
        return redirect('tab-name/'.$reg->id);
    }
    public function tabName($id)
    {
        $data['tabname']=Course::where('id',$id)->first();
        return view('admin.forms.add_tab',$data);
    }
    public function courseContent(Request $req)
    {
    	$reg = new CourseContent;
        $reg->course_id=$req->course_id;
        $reg->tab_name = $req->tab_name;
        $reg->content = $req->content; 
        $reg->save();
        return redirect('tab-name/'.$reg->course_id);
    }
    public function newPages()
    {
        return view('admin\forms\create_pages');
    }
}
