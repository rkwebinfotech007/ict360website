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

Route::post('/saveContactUsData', 'HomeController@saveContactUsData')->name('saveContactUsData');

Route::get('/',function() {
        return view('index');
    })->name('index');

Route::get('/blog',function() {
        return view('blog');
    })->name('blog');

Route::get('/blog', 'BlogController@getBlogs')->name('blog');
Route::get('/blog/{blogurl}','BlogController@getBlogDetail')->name('blogdetail');

Route::get('/about',function() {
        return view('about');
    })->name('about');
	Route::get('/privacy',function() {
        return view('privacy');
    })->name('privacy');
	Route::get('/terms',function() {
        return view('terms');
    })->name('terms');

Route::get('/competition',function() {
        return view('competition');
    })->name('competition');

Route::get('/ict',function() {
        return view('ict');
    })->name('ict');

Route::get('/innovation',function() {
        return view('innovation');
    })->name('innovation');

Route::get('/newsletter',function() {
        return view('newsletter');
    })->name('newsletter');

Route::get('/newsletter', 'NewsletterController@getNewsletter')->name('newsletter');
Route::get('/newsletter/{newsletterurl}','NewsletterController@getNewsletterDetail')->name('newsletterdetail');

/* Admin Routing */

Route::get('/admin/auth/login', function () {
	if(session()->get('admin_email')){   
	//Redirect::route('dashboard');
		return redirect('/admin/dashboard'); 
	}else{       
		return redirect('/admin/auth/login');
	}

});


Route::get('/admin/auth/login',function(){ 
	return view('admin/authlogin');})->name('authlogin');
	
	
Route::post('/admin/auth/login', 'Admin\Auth\LoginController@authentication')->name('postLogin');
Route::get('/admin/auth/log-out','Admin\Auth\LoginController@logOut')->name('logout');

Route::post('/files/post', 'Admin\FileUploadsController@store');

Route::post('/videos/post', 'Admin\FileUploadsController@upload_co_video'); 
	
Route :: group(['middleware'=>'Session'],function(){
	Route::get('admin/dashboard','Admin\DashboardController@index')->name('dashboard');

	Route::get('admin/newsletter','Admin\NewsletterController@index')->name('admin-newsletter');
	Route::Post('addNewsletterForm','Admin\NewsletterController@addNewsletterForm')->name('addNewsletterForm');
	Route::post('admin/newsletter/add','Admin\NewsletterController@add')->name('addNewsletter');
	Route::Post('NewsletterList','Admin\NewsletterController@newsletterList')->name('newsletterList');
	Route::Post('editNewsletterForm','Admin\NewsletterController@editNewsletterForm')->name('editNewsletterForm');
	Route::post('admin/newsletter/edit','Admin\NewsletterController@edit')->name('editnewsletter');
	Route::post('admin/newsletter/delete','Admin\NewsletterController@delete')->name('deleteNewsletter');

	Route::get('admin/blog','Admin\BlogController@index')->name('admin-blog');
	Route::Post('blogList','Admin\BlogController@blogList')->name('blogList');
	Route::Post('addBlogForm','Admin\BlogController@addBlogForm')->name('addBlogForm');
	Route::Post('editBlogForm','Admin\BlogController@editBlogForm')->name('editBlogForm');
	Route::post('admin/blog/add','Admin\BlogController@add')->name('addBlog');
	Route::post('admin/blog/edit','Admin\BlogController@edit')->name('edit');
	Route::post('admin/blog/delete','Admin\BlogController@delete')->name('delete');
	Route::match(['GET','POST'],'admin/contactList','Admin\DashboardController@contactList')->name('contactList');

	Route::POST('changePassword','Admin\ChangePasswordController@ChangePassword')->name('changePass');
	Route::POST('checkCurrentPass','Admin\ChangePasswordController@checkCurrentPass')->name('checkCurrentPass');
	Route::POST('updateChangePass','Admin\ChangePasswordController@updateChangePass')->name('updateChangePass');

});    

// admin route end
    Route::get('/dont_underestimate_the_knowledge_of_kittu',function() {
        return view('dont_underestimate_the_knowledge_of_kittu');
    })->name('dont_underestimate_the_knowledge_of_kittu');

Route::get('/demo-thank-you',function() {
    return view('thank-you');
})->name('demo-thank-you');
