<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Franchise;
use App\Slider;
use App\Settings;
use App\Upload_files;
use App\Apply_frenchisee;
use App\Contact;
use App\testimonial;
use App\Toppers;
use App\Std_registrations;
use App\User;

class FormController extends Controller
{
    public function our_team()
    {
        $data['test'] = Team::get();
    	return view('admin.forms.our_team',$data);
    }
    public function our_team_data(Request $req)
    {
        $image = $req->file('image');
        $imagename = 'events'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../../../www/bbs/upload');
        $image->move($destinationPath, $imagename);
        $obj = new Team();
        $obj->name=$req->name;
        $obj->designation=$req->designation;
        $obj->image='upload/'.$imagename;
        $obj->save();
        return back()->with('success', 'You have successfully Add Team Member');     
    }
    public function delete_team($id)
    {
        Team::where('id',$id)->delete();
        return back()->with('team', 'You have successfully Deleted Team Member');
    }
    public function franchise_form()
    {
        $data['info'] = Franchise::get();
        $data['test'] = Apply_frenchisee::get();
    	return view('admin.forms.franchise_form',$data);
    }
    public function franchise_data(Request $req)
    {
    	$obj = new Franchise();
        $obj->title=$req->title;
        $obj->content=$req->content;
        $obj->save();
        return back()->with('success', 'You have successfully Add Content');
    }
    public function franchise_slider(Request $req)
    {
        $image = $req->file('image');
        $imagename = 'frachise'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../../../www/bbs/upload');
        $image->move($destinationPath, $imagename);

        //$image->move('upload', $imagename);

        $obj = new Slider();
        $obj->page=$req->page;
        $obj->image='upload/'.$imagename;
        $obj->save();
        return back()->with('slider', 'You have successfully Add Slider image');     
    }
    public function apply_frenchise(Request $req)
    {
    	$obj = new Apply_frenchisee();
        $obj->frtaken=$req->frtaken;
        $obj->people=$req->people;
        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->mobile=$req->mobile;
        $obj->city=$req->city;
        $obj->state=$req->state;
        $obj->address1=$req->address1;
        $obj->address2=$req->address2;
        $obj->space=$req->space;
        $obj->area=$req->area;
        $obj->degcolleges=$req->degcolleges;
        $obj->engcolleges=$req->engcolleges;
        $obj->schools=$req->schools;
        
        $obj->save();
        return back()->with('success', 'You have successfully Add Content');
    }
    public function contact_form()
    {
        $data['result']=Settings::get();
        $data['test']=Contact::get();
        return view('admin.forms.contact_form',$data);
    }
    public function details_update(Request $req)
    {
       Settings::Where('name', 'phone1')->update([
            'value'=>$req->phone1
        ]);
       Settings::Where('name', 'phone2')->update([
            'value'=>$req->phone2
        ]);
        Settings::Where('name', 'email')->update([
            'value'=>$req->email
        ]);
        Settings::Where('name', 'address1')->update([
            'value'=>$req->address1
        ]);
        Settings::Where('name', 'address2')->update([
            'value'=>$req->address2
        ]);
        Settings::Where('name', 'description')->update([
            'value'=>$req->description
        ]);
        Settings::Where('name', 'facebook-link')->update([
            'value'=>$req->fb
        ]);
        Settings::Where('name', 'twitter')->update([
            'value'=>$req->twitter
        ]);
        Settings::Where('name', 'instagram')->update([
            'value'=>$req->insta
        ]);
        Settings::Where('name', 'youtube')->update([
            'value'=>$req->youtube
        ]);
         return back()->with('success', 'All Details Update Succesfully');
    }
    public function upload_file()
    {
        $data['test'] = Upload_files::OrderBy('id','asc')->get();
        return view('admin.forms.upload_download_data',$data);
    }
    public function upload_data(Request $req)
    {
        $image = $req->file('image');
        $imagename = 'download'.time().'.'.$req->image->extension();
        $destinationPath = storage_path('../../../www/bbs/upload');
        $image->move($destinationPath, $imagename);
        $obj = new Upload_files();
        $obj->f_type=$req->f_type;
        $obj->title=$req->title;
        $obj->files='upload/'.$imagename;
        $obj->save();
        return back()->with('data', 'You have successfully Add Documents Files'); 
    }
    public function download(Request $req)
    {
        return response()->download($req->file);
    }
    public function contact_us(Request $req)
    {
        $obj = new Contact();
        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->phone=$req->phone;
        $obj->subject=$req->subject;
        $obj->message=$req->msg;
        $obj->save();
        return back()->with('data', 'You have successfully send message'); 
    }
    //delete part
    public function delete_slider($id)
    {
        Slider::where('id',$id)->delete();
        return back()->with('slider', 'You have successfully Deleted Slider');
    }
     public function delete_testimonial($id)
    {
        testimonial::where('id',$id)->delete();
        return back()->with('testimonial', 'You have successfully Deleted Testimonial');
    }
    public function delete_toppers($id)
    {
        Toppers::where('id',$id)->delete();
        return back()->with('topper', 'You have successfully Deleted Testimonial');
    }
    public function delete_sidemenu_frenchise($id)
    {
        Franchise::where('id',$id)->delete();
        return back()->with('sidemenu', 'You have successfully Deleted Sidemenu');
    }
    public function delete_frenchisee($id)
    {
        Apply_frenchisee::where('id',$id)->delete();
        return back()->with('frenchise', 'You have successfully Deleted Franchise');
    }
    public function delete_download_files($id)
    {
        Upload_files::where('id',$id)->delete();
        return back()->with('files', 'You have successfully Deleted Upload_files');
    }
     public function std_regi(Request $req)
    {
        $obj = new Std_registrations();
        $obj->first_name=$req->first_name;
        $obj->last_name=$req->last_name;
        $obj->email=$req->email;
        $obj->phone=$req->phone;
        $obj->password=$req->password;
        $obj->confirm_pass=$req->confirm_pass;
        $obj->save();

        $reg=new User();
        $reg->name=$req->first_name;
        $reg->email=$req->email;
        $reg->password=bcrypt($req->password);
        $reg->type=2;
        $reg->save();
        return back()->with('success', 'You have successfully Registered');
    }
}
