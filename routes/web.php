<?php

use Illuminate\Support\Facades\Route;
use App\Project as Project;
use TCG\Voyager\Models\Post as Article;

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
    $featuredProject = Project::select('title', 'tools', 'slug', 'image')->where('featured', '=', 1)->first();
    return view('welcome', compact('featuredProject'));
});

Route::get('projects', function() {
    $projects = Project::select('title', 'tools', 'created_at', 'description', 'slug', 'image', 'url')->get();
    return view('projects.index', compact('projects'));
});

Route::get('projects/{slug}', function($slug) {
    $project = Project::where('slug', '=', $slug)->firstOrFail();
    return view('projects.show', compact('project'));
});

Route::get('articles', function() {
    $articles = Article::orderBy('created_at', 'desc')->get();
    return view('articles.index', compact('articles'));
});

Route::get('articles/{slug}', function($slug) {
    $article = Article::where('slug', '=', $slug)->firstOrFail();
    return view('articles.show', compact('article'));
});

Route::post('/message', 'FormController@message');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// https://devdojo.com/tutorials/working-with-voyager-on-the-front-end