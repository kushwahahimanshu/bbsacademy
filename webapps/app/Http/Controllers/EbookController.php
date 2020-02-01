<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EbookCategory; 
use App\Ebook;
use Auth;
use App\EbookOrder;
class EbookController extends Controller
{
    // E-Book 
    public function manageEbookCategory() {
        $data['categories'] = EbookCategory::orderBy('name', 'asc')->get();
        return view('admin/books/manage_ebook_category', $data);

    }

    public function addEbookCategorySubmit(Request $req) {
        $reg = new EbookCategory;
        $reg->name = $req->name;
        $reg->save();

        return back()->with('success', 'Category added successfully');
    }

    public function deleteEbookCategory($id) {
        EbookCategory::where('name', $id)->delete();
        Ebook::where('category',$id)->delete();

        return back()->with('success', 'Category  deleted with subcategory successfully');
    }
    // E-book end

    // Add E-book

    public function manageEbook() {
        $data['categories'] = EbookCategory::orderBy('name', 'asc')->get();
        $data['courses'] = Ebook::orderBy('id', 'desc')->get();
        return view('admin/books/manage_ebook', $data);
        
    }

    public function addEbookSubmit(Request $req) 
    {
        $file = $req->file('image');
        $filename1 = 'image'.time().'.'.$req->image->extension();
        $destination1 = storage_path('../../ebook/image');
        $file->move($destination1,$filename1);

        $file = $req->file('demo');
        $filename2 = 'demo'.time().'.'.$req->demo->extension();
        $destination2 = storage_path('../../ebook/demopdf');
        $file->move($destination2,$filename2);

        $file = $req->file('full');
        $filename3 = 'full'.time().'.'.$req->full->extension();
        $destination3 = storage_path('../../ebook/fullpdf');
        $file->move($destination3,$filename3); 

        $reg = new Ebook;
        $reg->title = $req->title;
        $reg->author = $req->author;
        $reg->price = $req->price;
        $reg->description = $req->description;


        $reg->image=$filename1;//where image is a database name
        $reg->demo=$filename2;//where image is a database name
        $reg->full=$filename3;//where image is a database name

        $reg->category = $req->category;
        $reg->save();

        return back()->with('success', 'E-book added successfully');
    }

    public function deleteEbook($id) {
        Ebook::where('id', $id)->delete();

        return back()->with('success', 'E-book deleted successfully');
    } 
    // Add e-book end

    //view book details
     public function viewBook($id, $video = null) 
    {   
        if($video == null) 
        {
        	$data['page_title'] = "View Book Details";
            $data['course'] = Ebook::where('id', $id)->first();
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
       /* else 
        {
            $data['course'] = Course::where('id', $id)->first();
            $data['demo'] = Video::where('course', $data['course']->id)->where('id', $video)->first();
            $data['videos'] = Video::where('course', $data['course']->id)->orderBy('order_no', 'asc')->get();
            $data['is_bought'] = 0;
            if(CourseOrder::where([
                ['user_id', '=', Auth::id()],
                ['type', '=', 2],
                ['course_id', '=', $id],
                ['payment_status', '=', 'Credit'],
            ])->count() > 0) 
            {
                $data['is_bought'] = 1;
            }
            return view('webviews/view_book', $data);
        }*/
    }

}
