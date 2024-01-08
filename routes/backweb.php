<?php

use App\Http\Controllers\backend\Login_dashboardcontrollers;
use App\Http\Controllers\backend\Blogcontrollers;
use App\Http\Controllers\backend\Learncontrollers;

Route::middleware(['auth', 'verified'])->group(function (){

Route::get('/dashboard', function () {
    return view('backend.page.dashboard.dashboard');
});
Route::GET('/blogposts',[Blogcontrollers::class, 'view'])->name('blogposts');
Route::GET('/addnewpost',[Blogcontrollers::class, 'addnewpost'])->name('addnewpost');
Route::POST('/addingpost',[Blogcontrollers::class, 'addingpost'])->name('addingpost');
Route::POST('/blogsdelete/{post_id}',[Blogcontrollers::class, 'blogsdelete']);
Route::get('/blogsupdate/{post_id}',[Blogcontrollers::class, 'blogsupdate']);
Route::POST('/blogsupdating/{post_id}',[Blogcontrollers::class, 'blogsupdating']);

Route::GET('/blogcategory',[Blogcontrollers::class, 'viewcategory'])->name('viewcategory');
Route::POST('/addingcategory',[Blogcontrollers::class, 'addingcategory'])->name('addingcategory');
Route::POST('/categorydelete/{post_id}',[Blogcontrollers::class, 'categorydelete']);


Route::GET('/learncategory',[Learncontrollers::class, 'learncategory'])->name('learncategory');
Route::POST('/adding_learn_category',[Learncontrollers::class, 'adding_learn_category'])->name('adding_learn_category');
Route::POST('/learn_categorydelete/{post_id}',[Learncontrollers::class, 'learn_categorydelete']);

Route::GET('/course_add',[Learncontrollers::class, 'course_add'])->name('course_add');
Route::POST('/course_adding',[Learncontrollers::class, 'course_addings'])->name('course_adding');

Route::post('/adding_learn_section', [LearnControllers::class, 'adding_learn_section'])->name('adding_learn_section');

Route::POST('/adding_learn_lesson', [LearnControllers::class, 'adding_learn_lesson'])->name('adding_learn_lesson');
Route::get('learn_lessondelete/{id}', [LearnControllers::class, 'learn_lessondelete'])->name('learn_lessondelete');
Route::get('showupdate_lesson/{id}', [LearnControllers::class, 'showupdate_lesson'])->name('showupdate_lesson');
Route::post('showupdating_lesson/{id}', [LearnControllers::class, 'updating_learn_lesson'])->name('showupdating_lesson');






Route::GET('/managecourse_view',[Learncontrollers::class, 'managecourse_view'])->name('managecourse_view');
Route::GET('/editcourse_view/{id}',[Learncontrollers::class, 'editcourse_view'])->name('editcourse_view');

Route::GET('/coupons_view',[Learncontrollers::class, 'coupons_view'])->name('coupons_view');


});