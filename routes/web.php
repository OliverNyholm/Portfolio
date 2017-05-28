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
use App\Project;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $projects = Project::all();
    return view('index', [
      "projects" => $projects
    ]);
});

Route::resource('projects', 'ProjectController');
Route::resource('courses', 'CourseController');
Route::resource('tools', 'ToolController');

Route::get("/about", function () {
    return view("about");
});

Route::get("/contact", function () {
    return view("contact");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
