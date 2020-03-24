<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Post as Post;
use App\Project as Project;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('projects', function() {
    $projects = Project::select('title', 'tools', );
    return view('projects', compact('projects'));
});

Route::get('posts', function() {
    $posts = Post::all();
    return view('posts', compact('posts'));
});
