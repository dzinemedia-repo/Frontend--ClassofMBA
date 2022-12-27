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


