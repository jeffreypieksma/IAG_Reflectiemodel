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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('home', 'HomeController@index')->middleware('auth');
Route::get('/profiel', 'ProfileController@index')->middleware('auth');
Route::get('/profiel/contacten', 'ProfileController@contacten')->middleware('auth');
Route::get('/profiel/gegevens', 'ProfileController@gegevens')->middleware('auth');
Route::get('/profiel/instellingen', 'ProfileController@instellingen')->middleware('auth');
Route::get('/profiel/agenda', 'ProfileController@agenda')->middleware('auth');

//Archief routes
Route::get('archief', 'ArchiveController@index')->middleware('auth');

//reflectie routes
Route::get('reflecties', 'ReflectionController@list')->middleware('auth');
Route::get('reflectie/{id}/view', 'ReflectionController@getReflection')->middleware('auth');
Route::get('reflectie/{id}/update', 'ReflectionController@updateReflection')->middleware('auth');
Route::post('reflectie/update', 'ReflectionController@storeReflection')->middleware('auth');
Route::get('reflectie/create', 'ReflectionController@newReflection')->middleware('auth');
Route::post('reflectie/create', 'ReflectionController@storeReflection')->middleware('auth');

//feedback routes
Route::get('feedback', 'FeedbackCOntroller@index')->middleware('auth');
//Route::get('feedback/{id}/view', 'FeedbackCOntroller@getFeedback');
Route::get('feedback/{id}/view', 'FeedbackController@getReflectionWithFeedback')->middleware('auth');
Route::post('feedback/create', 'FeedbackController@storeFeedback')->middleware('auth');
Route::post('feedback/update', 'FeedbackController@storeFeedback')->middleware('auth');

//reflectionmodel routes
Route::get('reflectionmodel', 'ReflectionModelController@getModel')->middleware('auth');
//individuele radar routes
Route::get('reflectionmodel/theory', 'ReflectionModelController@theory');
Route::get('reflectionmodel/model', 'ReflectionModelController@model');
Route::get('reflectionmodel/focus', 'ReflectionModelController@focus');
Route::get('reflectionmodel/strategy', 'ReflectionModelController@strategy');
Route::get('reflectionmodel/methodology', 'ReflectionModelController@methodology');
Route::get('reflectionmodel/feedback,', 'ReflectionModelController@feedback');
Route::get('reflectionmodel/transparent', 'ReflectionModelController@transparent');
Route::get('reflectionmodel/custom', 'ReflectionModelController@custom');
