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

use Auth;

Route::get('debug', function () {
/*
\Cmgmyr\Messenger\Models\Participant::create([
'thread_id' => 5,
'user_id' => Auth::user()->id,
'read_at' => null,
]);

\Cmgmyr\Messenger\Models\Participant::create([
'thread_id' => 5,
'user_id' => 564564,
'read_at' => null,
]);
 */
    //$thread->activateAllParticipants();
    /*
    $message = \cmgmyr\Messenger\Models\Message::findOrfail(6);
    dd($message->thread->users->pluck("email"));
     */

    $thread = \cmgmyr\Messenger\Models\Thread::findorfail(5);

    $thread->attach(6);

    dd("Done");
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'chat'], function () {

    Route::get('/{threadID?}', "MainController@index");

    Route::get('groups', function () {
        return "Groups";
    });

    Route::post('store', 'MainController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
