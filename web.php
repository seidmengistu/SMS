<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin_template', function () {
    return view('admin_template');
});

// ROUTE FOR LAPTOP CONTROL SYSTEM

Route::post('/campus/student/create', 'Student\SearchController@search')->name('search');
Route::post('/campus/teacher/create', 'Teacher\SearchtController@search')->name('searchh');
Route::post('/campus/other/create', 'Other\SearchoController@search')->name('searchhh');

Route::resource('/campus/student', 'Student\StudentController');
Route::resource('/campus/teacher', 'Teacher\TeacherController');
Route::resource('/campus/other', 'Other\OtherController');

Route::get('/campus/homee', 'Student\HomeeController@index')->name('homee');
Route::get('/campus/account', 'AccountController@index')->name('account');
Route::get('about', 'aboutController@about')->name('about');
// Route FOR STORE MANAGEMENT SYSTEM

Route::get('/shome', 'Store\ShomeController@shome')->name('shome');
Route::get('/contact', 'Store\ContactController@contact')->name('contact');

Route::post('/store/material/create', 'Material\SearchController@search')->name('msearch');

Route::resource('/store/material', 'Material\MaterialController');
Route::resource('/store/borrower', 'Borrower\BorrowerController');
Route::resource('/store/borrowedmat', 'Borrowed\BorrowedController');

//borrower search controller
Route::post('/store/borrower/create', 'Borrower\SearchController@search')->name('usersearch');

Auth::routes();
