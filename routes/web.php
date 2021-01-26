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

Auth::routes();

Route::group(['middleware'=>['gust']],function(){ 

    Route::get('/', function()
        {
    return view('auth.login');
     });

});




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ], function(){ 

       Route::get('dashboard', 'HomeController@index')->name('dashboard');
       
       Route::group(['namespace'=>'Grads'],function(){

                Route::resource('grade','GradeController');


       });
      

    });



//Route::get('/home', 'HomeController@index')->name('home');
