<?php
use App\Http\Controllers\Registrationcontroller;
use App\Models\Customer;
use App\Http\Controllers\Customercontrollers;
use App\Http\Controllers\Profilecontrollers;
use App\Http\Controllers\Postingcontrollers;
use App\Models\Posting;

use App\Http\Controllers\Signupcontrollers;
use App\Models\Singup;
use App\Http\Controllers\homecontrollers;
use App\Http\Controllers\Usercontrollers;
use App\Http\Controllers\Internshipcontrollers;
use App\Http\Controllers\Opportunitycontrollers;
use App\Http\Controllers\Opportunityupdatecontrollers;


use App\Http\Controllers\welcomecontroller;

use App\Http\Controllers\Scholarshipscontroller;
use App\Http\Controllers\Entreneurshipcontroller;
use App\Http\Controllers\Grantscontroller;
use App\Http\Controllers\Internshipcontroller;
use App\Http\Controllers\Opportunitycontroller;
use App\Http\Controllers\popmessagecontroller;



Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    dd('clear');

 });
Route::get('/aboutus', function () {
    return view('frontend/page/aboutus');
});

Route::get('/ourservices', function () {
    return view('frontend/page/ourservices');
});

Route::get('/contactus', function () {
    return view('frontend/page/contactus');
});
Route::get('/cvandresume', function () {
    return view('frontend/page/cvandresume');
});
Route::get('/interviewidea', function () {
    return view('frontend/page/interviewidea');
});

Route::get('/faq', function () {
    return view('frontend/page/faq');
});


Route::get('/termsofservice', function () {
    return view('frontend/page/termsofservice');
});
Route::get('/privacypolicy', function () {
    return view('frontend/page/privacypolicy');
});

/*Route::get('/customer', function(){
    $customers = customer::all();
    echo"<pre>";
    print_r($customers->toArray());
});*/




Route::get('/profileinfo/{id}',[Profilecontrollers::class, 'view'])->name('profileinfo');
Route::POST('/profileinfo/{userId}',[Profilecontrollers::class, 'store'])->name('profileinfostore');


Route::get('/postingajob',[Postingcontrollers::class, 'index'])->name('postingajob');
Route::POST('/posting',[Postingcontrollers::class, 'store'])->name('posting');
Route::PUT('/Updatingjob/{id}',[Postingcontrollers::class, 'Updatingjob']);
Route::get('/postajobtable',[Postingcontrollers::class, 'updatejob'])->name('postajobtable');
Route::delete('/delete-posting/{id}',[Postingcontrollers::class,'destoryjob']);
Route::get('/postajobedit/{id}',[Postingcontrollers::class,'postajobedit']);


Route::get('/posting_opporunity',[Scholarshipscontroller::class, 'view'])->name('posting_opporunity');
Route::PUT('/scholarshipupdate/{id}',[Scholarshipscontroller::class, 'update'])->name('scholarshipupdate');
Route::post('/scholarshipstore',[Scholarshipscontroller::class, 'scholarshipstore'])->name('scholarshipstore');


Route::post('/entreneurshipstore',[Entreneurshipcontroller::class, 'entreneurshipstore'])->name('entreneurshipstore');
Route::PUT('/entreneurshipupdate/{id}',[Entreneurshipcontroller::class, 'update'])->name('entreneurshipupdate');

Route::post('/grantsstore',[Grantscontroller::class, 'grantsstore'])->name('grantsstore');
Route::PUT('/grantsupdate/{id}',[Grantscontroller::class, 'update'])->name('grantsupdate');

Route::post('/internshipstore',[Internshipcontroller::class, 'internshipstore'])->name('internshipstore');
Route::PUT('/internshipupdate/{id}',[Internshipcontroller::class, 'update'])->name('internshipupdate');

Route::GET('/opporunitytable',[Opportunitycontroller::class, 'opporunitytable'])->name('opporunitytable');
Route::delete('/delete-opporunity/{type}/{id}',[Opportunitycontroller::class,'destory'])->name('delete-opporunity');
Route::GET('/update-opporunity/{type}/{id}',[Opportunitycontroller::class,'update'])->name('update-opporunity');


Route::GET('/popmessageview',[popmessagecontroller::class, 'view'])->name('popmessageview');
Route::POST('/popmessagestore',[popmessagecontroller::class, 'store'])->name('popmessagestore');
Route::delete('/delete-popmessage/{id}',[popmessagecontroller::class,'destory'])->name('delete-popmessage');



Route::get('/',[welcomecontroller::class,'view'], function () {
    return view('home')->name('welcome');
});
Route::post('/subscribing', [WelcomeController::class, 'subscribing'])->name('subscribing');
Route::get('/search', [WelcomeController::class, 'search'])->name('search');
Route::GET('/searchrecords/{id}/{type}',[WelcomeController::class,'searching']);
Route::get('/searchings', [WelcomeController::class, 'searchings']);









Route::get('/customer',[Customercontrollers::class, 'index']);
Route::get('/test', [Customercontrollers::class,'ShareWidget']);
Route::get('/check-username-email', 'Customercontrollers@checkUsernameEmail');












Route::get('/welcome',[Postingcontrollers::class,'view']);
Route::get('/categories',[Postingcontrollers::class,'categories']);





Route::post('image-upload', [homecontrollers::class, 'storeImage'])->name('image.upload');


Route::get('/internship',[Internshipcontrollers::class, 'internshipshow']);
Route::get('/internship/{internshipid}',[Internshipcontrollers::class, 'internship']);
Route::get('/schoolarshipdetails/{schoolarshipid}',[Internshipcontrollers::class, 'schoolarshipdetails']);
Route::get('/onlinecoursedetails/{onlinecourseid}',[Internshipcontrollers::class, 'onlinecoursedetails']);
Route::get('/entreneurshipdetails/{entreneurshipid}',[Internshipcontrollers::class, 'entreneurshipdetails']);
Route::get('/intopprtunity',[Internshipcontrollers::class, 'intopprtunity']);
