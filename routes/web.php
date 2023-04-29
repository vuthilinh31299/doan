<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

function dashBoardRoutes(){
    require_once('dashboard.php');
}

/**
 * Include routes for front
 */
// function frontRoutes(){
//     require_once('front.php');
// }

Route::group(['prefix' => '/', 'namespace' => 'Auth', 'as' => 'front.'],function(){
    Route::get('/loginuser', 'App\Http\Controllers\Auth\LoginController@getLoginPageUser')->name('getlogin');
    Route::post('/loginuser', 'LoginController@postLoginUser')->name('postLogin');
    Route::get('/registeruser', 'RegisterController@getRegister')->name('registerUser');
    Route::post('registeruser', 'RegisterController@postRegister')->name('postRegister');
    Route::get('/logoutUser',  function(){Auth::logout();return redirect()->route('front.index');})->name('logOutUser');
});



Route::group(['prefix' => 'admin', 'as' => 'dashboard.'], function(){
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@getLoginPage')->name('login');
    Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
    Route::get('logout', 'LoginController@logOutAdmin')->name('logOut');
}); 

Route::group(['prefix' => 'admin', 'as' => 'dashboard.', 'namespace' => 'Dashboard','middleware' => 'adminLogin'], function(){
    Route::get('/', 'DashboardController@index')->name('index');
    Route::group(['prefix' => 'provider'], function(){
        Route::get('/', 'ProvidersController@getList')->name('provider.list');
        Route::get('create', 'ProvidersController@getCreate')->name('provider.getCreate');
        Route::post('create', 'ProvidersController@postCreate')->name('provider.postCreate');
   });
    
});
// frontRoutes();
// dashBoardRoutes();

// Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
