<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Slider;
use App\AboutPages;
use App\User_update;
use App\testimonial;
use App\Toppers;
use App\News;
use App\JobPost;
use App\Career;
use App\Center_location;
use App\Events;
use Illuminate\Support\Facades\Storage;



class Admin1Controller extends Controller
{
    public function index()
    {
        if(Auth::user()->type == 2) {
            return redirect('/');
        } else {
            return view('admin.index');
        }
        
    }
    public function slider()
    {
        $data['test']=Slider::OrderBy('id','asc')->where('page','home')->get();
        return view('admin.forms.addslider',$data);
    }
    public function slider_data(Request $request)
    {
        $image=$request->file("image");
         if ($request->hasfile("image")) { 
         $image->move("upload/",$image->getClientOriginalName());
                                        }
        $obj =new Slider();
        $obj->title =$request->title;
        $obj->subtitle =$request->sub_title;
        $obj->title_clr =$request->title_clr;
        $obj->subtitle_clr =$request->sub_title_clr;
        $obj->order_no =$request->order;
        $obj->btn_link =$request->link;
        $obj->btn_txt =$request->btn_txt;
        
        $obj->image=$image->getClientOriginalName();
       
        $obj->save();
         return back()->with('success', 'Slider Content Change Succesfully');
    }
    public function about_cnt()
    {
          $data['info'] = AboutPages::OrderBy('id', 'asc')->get();
          return view('admin.aboutpage',$data);
    }
    public function update(Request $req)
    { 
    	 $this->validate($req, [
            'image' => 'required|max:2048',
        ]);

        
        $image = $req->file('image');

        $imagename = 'upload'.time().'.'.$req->image->extension();

        $destinationPath = storage_path('../../../www/bbs/upload');

        $image->move($destinationPath, $imagename);
        AboutPages::where('id', $req->id)->update([
            'content' => $req->content,
            'video_link' => $req->video_link,
            'image' => 'upload/'.$imagename
        ]);
        
         return back()->with('success', 'Your Page Content Updated');
    }
    public function user()
    {
        $data['info'] = User_update::OrderBy('id', 'asc')->get();    
    	return view('admin.user_details',$data);
    }
    public function user_update(Request $req)
    {
      
        User_update::Where('id', $req->id)->update([
            'teacher'=>$req->teacher,
            'user'=>$req->user,
            'course'=>$req->course,
            'result'=>$req->result
        ]);
         return back()->with('success', 'All Details Update Succesfully');
    }
    public function testimonial()
    {
        $data['test']=testimonial::OrderBy('id','desc')->get();
        return view('admin.forms.testimonial',$data);
    }
    public function testimonial_data(Request $req)
    {
        $image = $req->file('image');

        $imagename = 'testimonial'.time().'.'.$req->image->extension();

        $destinationPath = storage_path('../../../www/bbs/upload');

        $image->move($destinationPath, $imagename);
        $obj= new testimonial();
        $obj->content=$req->content;
        $obj->name=$req->name;
        $obj->image='upload/'.$imagename;
        $obj->rating=$req->rating;
        $obj->save();
        return back()->with('success', 'Done done done');
    }
    public function topper()
    {
        $data['test']=Toppers::OrderBy('id','asc')->get();
        return view('admin.forms.topper',$data);
    }
    public function topper_data(Request $req)
    {
        $image = $req->file('image');

        $imagename = 'upload'.time().'.'.$req->image->extension();

        $destinationPath = storage_path('../../../www/bbs/upload');

        $image->move($destinationPath, $imagename);
        $obj= new Toppers();
        $obj->name=$req->name;
        $obj->course=$req->course;
        $obj->image='upload/'.$imagename;
        $obj->save();
        return back()->with('success', 'Done done done');
    }
    public function news()
    {
        $data['test'] = News::where('type', '1')->get();
        return view('admin.forms.news_part',$data);
    }
    public function news_data(Request $req)
    {
        $obj =new News();
        $obj->type=$req->type;
        $obj->content=$req->content;
        $obj->link=$req->link;
        $obj->status=$req->status;
        $obj->save();
        return back()->with('success','Data updated successfully');
    }
    public function imp_notice()
    {
        $data['test'] = News::where('type', '2')->get();
        return view('admin.forms.latest_job',$data);   
    }
    public function batch()
    {
        $data['test'] = News::where('type', '3')->get();
        return view('admin.forms.upcoming_batches',$data);
    }
    public function delete_batch($id)
    {
        News::where('id',$id)->delete();
        return back()->with('delete', 'You have successfully Deleted Batch');
    }

    public function change_status($id , $status)
    {
        News::Where('id',$id)->update([
            'status'=>$status
        ]);
         return back()->with('done', 'Status has been changed');
    }
    public function career_data(Request $req)
    {
        $image = $req->file('image');

        $imagename = 'career'.time().'.'.$req->image->extension();

        $destinationPath = storage_path('../../../www/bbs/upload');

        $image->move($destinationPath, $imagename);
        $obj= new Career();
        $obj->category=$req->post_type;
        $obj->resume='upload/'.$imagename;
        $obj->save();
        return back()->with('success', 'You have successfully apply');
    }
    public function Add_post()
    {
        $data['test'] = JobPost::get();
        return view('admin.forms.add_post',$data);
    }
    public function add_post_data(Request $req)
    {
        $obj= new JobPost();
        $obj->post_name=$req->add_post;
        $obj->save(); 
        return back()->with('success', 'You have successfully Add New Post');
    }
    public function destroy($id)
    {
        JobPost::where('id',$id)->delete();
        return back()->with('delete', 'You have successfully Deleted Post');
    }
    public function center_locator()
    {
        $data['test'] = Center_location::get();
        return view('admin.forms.manage_center',$data);
    }
    public function center_location_data(Request $req)
    {
        $obj = new Center_location();
        $obj->center_name=$req->c_name;
        $obj->city=$req->city;
        $obj->address=$req->address;
        $obj->phone1=$req->phone1;
        $obj->phone2=$req->phone2;
        $obj->email_1=$req->email_1;
        $obj->email_2=$req->email_2;
        $obj->region=$req->region;
        $obj->save();
        return back()->with('success', 'You have successfully Add Center');
    }
    public function delete_center($id)
    {
        Center_location::where('id',$id)->delete();
        return back()->with('center', 'You have successfully Deleted Post');
    }
    public function events_add()
    {
        $data['test'] = Events::get();
        return view('admin.forms.media',$data);
    }
    public function events(Request $req)
    {
        $image = $req->file('image');
        $imagename = 'events'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../../../www/bbs/upload');
        $image->move($destinationPath, $imagename);
        $obj = new Events();
        $obj->event_type=$req->events;
        $obj->image='upload/'.$imagename;
        $obj->save();
        return back()->with('success', 'You have successfully Add Events');     
    }
     public function delete_event($id)
    {
        Events::where('id',$id)->delete();
        return back()->with('events', 'You have successfully Deleted Events');
    }
}
