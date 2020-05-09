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

Route::get('/', 'ForumController@index');
Route::get('discussion/{slug}', 'ForumController@show_discussion')->name('forum.show');
Route::get('channel/{slug}', 'ForumController@channel')->name('channel.show');

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/login/{provider}', 'Auth\SocialAccountController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('channels', 'ChannelsController');
    Route::resource('discussions', 'DiscussionsController');

    Route::post('discussion/reply', 'ForumController@reply')->name('discussion.reply');
 
    Route::get('reply/like{id}', 'ForumController@like')->name('reply.like');
    Route::get('reply/unlike/{id}', 'ForumController@unlike')->name('reply.unlike');
    Route::get('reply/best-answer/{id}', 'ForumController@best_answer')->name('reply.best');
    Route::get('reply/unbest-answer/{id}', 'ForumController@remove_best_answer')->name('reply.unbest');
    
    Route::get('discussion/watch/{id}', 'WatcherController@watch')->name('discussion.watch');
    Route::get('discussion/unwatch/{id}', 'WatcherController@unwatch')->name('discussion.unwatch');

});