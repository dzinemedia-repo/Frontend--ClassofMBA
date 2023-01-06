<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})  ->name('index') ;;

Route::get('essayWritingHelp', function () {
    return view('essayWritingHelp');
})->name('essayWritingHelp') ;

Route::get('CaseStudySolution', function () {
    return view('CaseStudySolution');
}) ->name('CaseStudySolution') ;

Route::get('ReportWriting', function () {
    return view('ReportWriting');
}) ->name('ReportWriting') ;

Route::get('Dissertation', function () {
    return view('Dissertation');
}) ->name('Dissertation') ;

Route::get('DissertationProposal', function () {
    return view('DissertationProposal');
}) ->name('DissertationProposal');

Route::get('DissertationProposal', function () {
    return view('DissertationProposal');
}) ->name('DissertationProposal');

Route::get('PPTPresentation', function () {
    return view('PPTPresentation');
}) ->name('PPTPresentation') ;

Route::get('Coursework', function () {
    return view('Coursework');
}) ->name('Coursework') ;

Route::get('TermPaper', function () {
    return view('TermPaper');
}) ->name('TermPaper') ;

Route::get('aboutus', function () {
    return view('aboutus');
}) ->name('aboutus') ;

Route::get('howitworks', function () {
    return view('howitworks');
}) ->name('howitworks') ;

Route::get('order', function () {
    return view('order');
}) ->name('order') ;

Route::get('order_details', function () {
    return view('order_details');
}) ->name('order_details') ;

Route::get('thankyou', function () {
    return view('thankyou');
}) ->name('thankyou') ;

Route::get('contactus', function () {
    return view('contactus');
}) ->name('contactus') ;

Route::get('review', function () {
    return view('review');
}) ->name('review') ;

Route::get('codehonor', function () {
    return view('codehonor');
}) ->name('codehonor') ;

Route::get('integrity', function () {
    return view('integrity');
}) ->name('integrity');

Route::get('faqs', function () {
    return view('faqs');
}) ->name('faqs') ;

Route::get('blog', function () {
    return view('blog');
}) ->name('blog') ;


Route::get('blog_details', function () {
    return view('blog_details');
}) ->name('blog_details') ;


Route::get('user_login', function () {
    return view('user_login');
}) ->name('user_login') ;

Route::get('forget_password', function () {
    return view('forget_password');
}) ->name('forget_password') ;


Route::get('register', function () {
    return view('register');
}) ->name('register') ;


Route::get('checkMail', function () {
    return view('checkMail');
}) ->name('checkMail') ;

Route::get('policy', function () {
    return view('policy');
}) ->name('policy');

Route::get('term', function () {
    return view('term');
}) ->name('term');















