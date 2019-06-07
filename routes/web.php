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

Route::get('/', 'Blades_Controller@main_page')->name('main.page');

Route::get('/DASH', 'Blades_Controller@dashboard_page')->name('dash.page');

Route::get('/PROF', 'Blades_Controller@profile_page')->name('profile.page');

Route::get('/REG', 'Blades_Controller@register_page')->name('register.page');

Route::get('/SEAR', 'Blades_Controller@search_page')->name('search.page');


Route::get('/userOUT', 'Con_user@logout')->name('user.logout');

Route::post('/userIN', 'Con_user@login')->name('user.login');

Route::post('/saving', 'Con_user@store')->name('user.register');

Route::post('/post', 'Con_post@store')->name('post.new');

Route::post('/index', 'Con_post@index')->name('post.index');

Route::post('/mComment', 'Con_comment@store')->name('comm.do');

Route::post('/editUser', 'Con_user@update')->name('user.edit');

Route::post('/followuser', 'Con_user@follow')->name('user.follow');

Route::post('/search', 'Con_user@search')->name('user.search');

//Route::post('/mail', 'Con_email@store')->name('mail.store');

//Route::resource('/mail', 'Con_email');

//Route::get('sendmail', function(){
//    $data = array(
//        'name' => "Curso Laravel",
//    );
//
//    Mail::send('emails.contact', $data, function($message){
//
//        $message->from('aide.mora.sal@gmail.com', 'Curso Laravel');
//        $message->to('aide.mora.sal@gmail.com')->subject('test email curso laravel');
//
//    });
//
//    return "Email correctamente enviado"; 
//
//
//});

Route::get('sendmail', ['as' => 'sendmail', function () {

    $data = ['link' => 'http://styde.net'];

    \Mail::send('emails.contact', $data, function ($message) {

        $message->from('aide.mora.sal@gmail.com', 'Prueba de E-mail');

        $message->to('aide.mora.sal@gmail.com')->subject('test e-mail bonito');

    });

    return "Se envío el email";
}]);