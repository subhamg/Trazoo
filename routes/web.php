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

//Route::get('/', function () {
//    return view('auth/login');
//});



//Route::get('/admin/userList', function () {
//    return view('Admin/userList');
//})->name('admin.userList');

//Route::get('/getAllUsers',[
//    'uses' => 'AdminController@getAllUsers',
//    'as' => 'getAllUsers'
//]);

//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/', '\App\Http\Controllers\Auth\LoginController@showLoginForm');


Route::get('/admin/login', function () {
    return view('Admin/adminLogin');
});

Route::get('/registered', function () {
    return view('postRegistration');
});

Route::get('/UserRegistration','BusinessController@myform');
Route::post('/myformPost',[
    'middleware'=>'auth',
    'as' => 'myformPost',
    'uses' => 'BusinessController@myformPost'
]);


//This will redirect you to user registration page.
Route::get('/UserRegistration', function(){
    return view('newUserRegistration');
});

Route::get('/getAllUsers', 'AdminController@getAllUsers')->name('getAllUsers');


Auth::routes();




Route::post('/admin',[
   'uses' => 'LoginController@login',
    'as' => 'admin.login'
]);

Route::post('approveUser',
    [
        'middleware'=>'auth',
        'as'=>'approveUser',
        'uses'=>'AdminController@approveUser'
    ]);

Route::post('blockUnbockuser',
    [
        'middleware'=>'auth',
        'as'=>'blockUnbockuser',
        'uses'=>'AdminController@blockUnbockUser'
    ]);

Route::post('/userlogin',[
    'uses' => 'UserLoginController@login',
    'as' => 'user.login'
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/adminDashboard', function () {
        return view('adminDashBoard');
    })->name('adminDashboard');

    Route::get('/home', 'HomeController@index')->name('home');

});