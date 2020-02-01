<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');  //index page
/*All ui pages*/
Route::get('about','MainController@about');
Route::get('chairman','MainController@chairman');
Route::get('mission','MainController@mission');
Route::get('team','MainController@team');
Route::get('media','MainController@media');
Route::get('center-locater','MainController@center');
Route::get('career','MainController@career');
Route::get('contact','MainController@contact');
Route::get('franchise','MainController@franchise');
Route::get('online','MainController@online');
Route::get('video','MainController@video');
Route::get('courseCategory/{id}', 'MainController@courseCategory');
Route::get('view-video/{id}/', 'MainController@viewVideo');

Route::get('study','MainController@study');
Route::get('books','MainController@book');
Route::get('bookcategory/{id}', 'MainController@bookCategory');

Route::get('view-book/{id}/', 'MainController@viewBook');
Route::get('demo/{id}','MainController@demopdf'); 

Route::get('bank/{bank}/{bank2?}','MainController@bank');
//student part
Route::get('student_login','MainController@std_login');
Route::get('student_registration','MainController@std_reg');
Route::post('std_reg','FormController@std_regi');





Auth::routes();

Route::get('/home', function() {
	return redirect('admin');
})->name('home');

Route::group(['middleware'=>['auth']],function(){

/*admin dashboard*/
Route::get('admin','Admin1Controller@index');
Route::get('home_slider','Admin1Controller@slider');
Route::post('home_slider_data','Admin1Controller@slider_data');
/*all about,chairmain  pages update */
Route::get('page_edit','Admin1Controller@about_cnt');
Route::post('update/{id}','Admin1Controller@update');
/*user update page */
Route::get('user_details','Admin1Controller@user');
Route::post('user_update/{id}','Admin1Controller@user_update');
/*testimonial section*/
Route::get('testimonial','Admin1Controller@testimonial');
Route::post('testimonial_data','Admin1Controller@testimonial_data');
/*Topper form*/
Route::get('topper','Admin1Controller@topper');
Route::post('topper_update','Admin1Controller@topper_data');
/*News and Update part*/
Route::get('news','Admin1Controller@news');
Route::post('news_data','Admin1Controller@news_data');
Route::get('imp_notice','Admin1Controller@imp_notice');
Route::get('batch','Admin1Controller@batch');
Route::get('delete_batch/{id}','Admin1Controller@delete_batch');

/*Status Change route*/
Route::get('news_status_toggle/{id}/{status}','Admin1Controller@change_status');
/*Career page editing*/
Route::get('add_post','Admin1Controller@Add_post');
Route::post('add_post_data','Admin1Controller@add_post_data');
Route::get('delete_post/{id}','Admin1Controller@destroy');
Route::post('career_data','Admin1Controller@career_data');
/*Center Locator*/
Route::get('center_locator','Admin1Controller@center_locator');
Route::post('center_location_data','Admin1Controller@center_location_data');
Route::get('delete_center/{id}','Admin1Controller@delete_center');
//Add new events part
Route::get('add_event','Admin1Controller@events_add');
Route::post('add_events_data','Admin1Controller@events');
Route::get('delete_event/{id}','Admin1Controller@delete_event');
//add team member
Route::get('our_team','FormController@our_team');
Route::post('our_team_data','FormController@our_team_data');
Route::get('delete_team_member/{id}','FormController@delete_team');
//franchise page
Route::get('franchise_form','FormController@franchise_form');
Route::post('franchise_data','FormController@franchise_data');
Route::post('franchise_slider','FormController@franchise_slider');
Route::post('apply_frenchise','FormController@apply_frenchise');
//contact form or settings
Route::get('contact_form','FormController@contact_form');
Route::post('details_update','FormController@details_update');
Route::post('contact_us','FormController@contact_us');
//download page 
Route::get('upload_file','FormController@upload_file');
Route::post('upload_data','FormController@upload_data');
//show files magazine exam cracker etc
Route::get('download_file','MainController@download_file');
Route::get('monthly','MainController@monthly');
Route::get('newslatter','MainController@newslatter');
Route::get('examcracker','MainController@examcracker');
Route::get('mock','MainController@mock');
//download files
Route::get('download','FormController@download');
//delete section
Route::get('delete_slider/{id}','FormController@delete_slider');
Route::get('delete_testimonial/{id}','FormController@delete_testimonial');
Route::get('delete_topper/{id}','FormController@delete_toppers');
Route::get('delete_content/{id}','FormController@delete_sidemenu_frenchise');
Route::get('delete_frenchisee/{id}','FormController@delete_frenchisee');
Route::get('delete_files/{id}','FormController@delete_download_files');
//course section
Route::get('course-category','AdminController@courseCategory');
Route::post('category-submit','AdminController@categorySubmit');

Route::get('course-name','AdminController@courseName');
Route::post('course-submit','AdminController@courseSubmit');

Route::get('tab-name/{id}','AdminController@tabName');
Route::post('tab-data','AdminController@courseContent');
// Ebook Category
	Route::get('manage-ebook-category', 'EbookController@manageEbookCategory');
	Route::post('add-ebookcategory-submit', 'EbookController@addEbookCategorySubmit');
	Route::get('delete-ebookcategory/{id}', 'EbookController@deleteEbookCategory'); 
// end  Ebook Category 
//add  Ebook start
	Route::get('manage-ebook', 'EbookController@manageEbook');
	Route::post('add-ebook-submit', 'EbookController@addEbookSubmit');
	Route::get('delete-ebook/{id}', 'EbookController@deleteEbook');
//add  Ebook end

//Video  Course Category
	Route::get('manage-video-courses', 'VideoController@manageCourses');
	Route::post('add-category-submit', 'VideoController@addCategorySubmit');
	Route::get('delete-video-course-category/{id}', 'VideoController@deleteCategory');
// end Video Course Category

//add Video Course start
	Route::get('manage-courses-video', 'VideoController@manageVideoCoursesCategory');
	Route::post('add-video-course-submit', 'VideoController@addVideoCourseSubmit');
	Route::get('delete-video-course/{id}', 'VideoController@deleteVideoCourse'); 
//add Video Course end
//add video
Route::get('add-videos/{id}', 'VideoController@addVideos');
Route::post('add-video-submit', 'VideoController@addVideoSubmit');
Route::get('delete-video/{id}', 'VideoController@deleteVideo');
//end video
//new page 
Route::get('create-new-page/','AdminController@newPages');

});

Route::get('course-details/{id}','MainController@courseDetails');

