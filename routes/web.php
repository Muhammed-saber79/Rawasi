<?php

use App\Models\Article;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],function(){
    	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        /**  All Dashboard Routes **/
    	Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
            Route::resource('projects',ProjectController::class);
            Route::resource('articles',ArticleController::class);
            Route::resource('cities',CityController::class);
            
            Route::get('project_images/{id}',[ProjectController::class,'project_images'])->name('project_images');
            Route::post('project_add_images/{id}',[ProjectController::class ,'add_images'])->name('project_add_images');
            Route::get('delete_project_image/{id}',[ProjectController::class,'delete_project_image'])->name('delete_project_image');
            Route::get('accept_comment/{id}',[CommentController::class,'accept_comment'])->name('accept_comment');
            Route::get('comment_delete/{id}',[CommentController::class,'destroy'])->name('comment_delete');
        });

        Route::group([
            'prefix' => 'admin'
        ], function () {
            Route::resource('messages',MessageController::class);
            Route::resource('comments',CommentController::class);
        });

        /**  All Website Routes **/
        Route::get('/', function (){
            $projects = Project::latest()->take(3)->get();
            $articles = Article::latest()->take(3)->get();

            return view('front.index', compact('projects', 'articles'));
        })->middleware('cache_response')->name('index');

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/about', function () {
            return view('front.about');
        })->name('about');

        Route::get('/services', function () {
            return view('front.services');
        })->name('services');

        Route::get('/contact', function () {
            return view('front.contact');
        })->name('contact');

        Route::get('/articles', [FrontController::class,'articles'])->name('articles');
        Route::get('article/{id}',[FrontController::class,'get_article'])->name('get_article');

        Route::get('/projects', [FrontController::class,'projects'])->name('projects');
        Route::get('get_project/{id}',[FrontController::class ,'get_project'])->name('get_project');
    }
);

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/