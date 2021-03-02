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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index')->name('front.index');
Route::get('/destination', 'FrontController@destination')->name('front.destination');
Route::get('/destination/{id}/{slug}', 'FrontController@destinationSingle')->name('front.destinationSingle');
Route::get('/region/{id}/{slug}', 'FrontController@regionSingle')->name('front.regionSingle');
Route::get('/packages', 'FrontController@packages')->name('front.packages');
Route::get('/packages/{id}/{slug}', 'FrontController@packagesSingle')->name('front.packagesSingle');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::resource('region', 'RegionController');
    Route::resource('destination', 'DestinationController');
    Route::resource('slider', 'SliderController');
    Route::resource('packages', 'PackagesController');
    Route::post('region/getDestinations', 'RegionController@getDestinations')->name('region.getDestinations');

    Route::post('viewPackage', 'PackagesController@viewPackage')->name('admin.viewPackage');



    Route::get('question', 'QuestionController@index')->name('question.index');
    Route::get('question/{id}/delete', 'QuestionController@deleteData')->name('question.deleteData');
    Route::post('question/getData', 'QuestionController@getData')->name('question.getData');
    Route::get('question/getQuestion', 'QuestionController@getCustomSearch')->name('question.getQuestion');
    Route::get('question/getAnswer', 'QuestionController@getAnswers')->name('question.getAnswer');
});
