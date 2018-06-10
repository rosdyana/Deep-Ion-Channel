<?php
use Illuminate\Http\Request;
use App\Mail\Contact;
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
    return view('welcome');
});

# contact us
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

# submission
Route::get('submission', 'SubmissionController@submissionView');
Route::post('submission', ['as'=>'submission.store','uses'=>'SubmissionController@submissionPost']);

# result
Route::get('/task/{id}', 'TaskController@result');
Route::get('/finish{id}', 'TaskController@finish');