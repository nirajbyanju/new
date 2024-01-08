<?php

use App\Http\Controllers\frontend\FrontopportunityController;
use App\Http\Controllers\frontend\FrontvacancyController;
use App\Http\Controllers\frontend\FrontlearnController;
use App\Http\Controllers\frontend\FrontpraticeController;
use App\Http\Controllers\frontend\FrontblogsController;





Route::GET('/frontopportunity-view',[FrontopportunityController::class, 'view'])->name('frontopportunity-view');
Route::GET('/viewingopp', [FrontopportunityController::class,'viewingopp'])->name('viewingopp');
Route::GET('/details-opporunity/{type}/{id}',[FrontopportunityController::class,'details'])->name('details-opporunity');
Route::GET('/records/{id}/{type}',[FrontopportunityController::class,'show']);




Route::GET('/frontvacancy-view',[FrontvacancyController::class, 'view'])->name('frontvacancy-view');
Route::GET('/vacancy-detail/{postingvacancyid}',[FrontvacancyController::class,'detail']);
Route::GET('/viewingvacy', [FrontvacancyController::class,'viewingvacy'])->name('viewingvacy');
Route::GET('/vacancyrecords/{id}',[FrontvacancyController::class,'show']);
Route::GET('/vacancyexplore', [FrontvacancyController::class,'vacancyexplore'])->name('vacancyexplore');



Route::GET('/frontlearn-view',[FrontlearnController::class, 'view'])->name('frontvacancy-view');
Route::GET('/coursesintro/{course_id}',[FrontlearnController::class, 'coursesintro']);
Route::GET('/lessonshow/{courseId}',[FrontlearnController::class, 'lessonshow']);
Route::get('/enroll/{courseId}/{userId}', [FrontlearnController::class, 'enroll'])->name('enroll');
Route::GET('/records/{id}',[FrontlearnController::class,'show']);

Route::GET('/frontpratie-view',[FrontpraticeController::class, 'view'])->name('frontpratie-view');



Route::get('/frontblogs-view/{category?}', [FrontblogsController::class, 'view'])->name('frontblogs-view');
Route::GET('/frontblogs-details/{post_id}',[FrontblogsController::class, 'details'])->name('blog-details');
Route::POST('/replystore/{commentId}',[FrontblogsController::class, 'storeReply']);
Route::POST('/commentstore/{post_id}',[FrontblogsController::class, 'store']);
Route::get('/deletecmt/{commentId}',[FrontblogsController::class, 'deletecmt']);
