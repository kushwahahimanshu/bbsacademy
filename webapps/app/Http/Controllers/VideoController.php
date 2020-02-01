<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoCourseCategory;
use App\VideoCourse;
use App\Video;
class VideoController extends Controller
{
    // Course category
    public function manageCourses() {
        $data['categories'] = VideoCourseCategory::orderBy('name', 'asc')->get();
        return view('admin/video/manage_video_course', $data);
    }

    public function addCategorySubmit(Request $req) {
        $reg = new VideoCourseCategory;
        $reg->name = $req->name;
        $reg->description = $req->description;
        $reg->save();

        return back()->with('success', 'Category added successfully');
    }

    public function deleteCategory($id) {
        VideoCourseCategory::where('id', $id)->delete();

        return back()->with('success', 'Category deleted successfully');
    }
    
    // End Course category
    // Add course

    public function manageVideoCoursesCategory() {
        $data['categories'] = VideoCourseCategory::orderBy('name', 'asc')->get();
        $data['courses'] = VideoCourse::orderBy('id', 'desc')->get();
        return view('admin/video/manage_video', $data);
    }

    public function addVideoCourseSubmit(Request $req) {
    	$file = $req->file('image');
        $filename = 'cover'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../../video_cover_image');
        $file->move($destinationPath, $filename);

        $reg = new VideoCourse;
        $reg->name = $req->name;
        $reg->category = $req->category;
        $reg->author=$req->author;
        $reg->price=$req->price;
        $reg->cover =$filename;
        $reg->topic_description=$req->topic_description;
        $reg->save();

        return back()->with('success', 'Video Course added successfully');
    }

    public function deleteVideoCourse($id) {
        VideoCourse::where('id', $id)->delete();

        return back()->with('success', 'Video Course deleted successfully');
    }
    // Add course end
    //add course video
     public function addVideos($id) {
        $data['course'] = VideoCourse::where('id', $id)->first();
        //$data['courses'] = VideoCourse::orderBy('id', 'desc')->get();
        $data['videos'] = Video::where('course', $id)->orderBy('id', 'desc')->get();
        return view('admin/video/add_video', $data);
    }

    public function addVideoSubmit(Request $req) {       

		 if($req->hasFile('video')) {
            $file = $req->file('video');
            $filename = 'video'.time().'.'.$req->video->extension();
            $destinationPath = storage_path('../../videos');
            $file->move($destinationPath, $filename);
           // echo 'video/'.$filename;
        	}
        $reg = new Video;
        $reg->title = $req->title;
        $reg->video = 'videos/'.$filename;
        $reg->order_no = $req->order_no;
        $reg->demo = $req->demo;
        $reg->course = $req->course;
        $reg->category = $req->category;
        $reg->save();

        return back()->with('success', 'Video added successfully');
    }

    public function deleteVideo($id) {
        Video::where('id', $id)->delete();

        return back()->with('success', 'Video deleted successfully');
    }
    //end course video
}
