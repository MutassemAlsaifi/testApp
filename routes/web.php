<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

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

// Route::view('/', 'front.index')->name('index');
// Route::view('contact', 'front.contact')->name('contact');
// Route::view('new', 'front.newsdetailes')->name('newsdetailes');
// Route::view('all-new', 'front.all-news')->name('all-news');
// Route::view('index', 'fronts.index');

// Route::view('/', 'new.index')->name('index');
// Route::view('about', 'new.about')->name('about');
// Route::view('coming', 'new.coming-soon')->name('coming');
// Route::view('contact', 'new.contact')->name('contact-us');
// Route::view('page-404', 'new.page-404')->name('404');
// Route::view('services-details', 'new.services-detail')->name('details');
// Route::view('services', 'new.services')->name('services');

// Route::view('/', 'quiz.index')->name('index');
// Route::view('contact', 'quiz.contact')->name('contact');
// Route::view('about', 'quiz.about')->name('about');
// Route::view('single', 'quiz.blog-single')->name('single');
// Route::view('blog', 'quiz.blog')->name('blog');
// Route::view('portfolio', 'quiz.portfolio')->name('portfolio');
// Route::view('services', 'quiz.services')->name('services');
// Route::view('team', 'quiz.team')->name('team');
// Route::get ('store' , [CategoryController::class , 'store'] );
// Route::get ('read' , [CategoryController::class , 'read'] );
// Route::get ('show/{id}' , [CategoryController::class , 'show'] );
// Route::get ('update/{id}' , [CategoryController::class , 'update'] );
// Route::get ('delete/{id}' , [CategoryController::class , 'delete'] );
// Route::get ('delete' , [CategoryController::class , 'deleteAll'] );



// Route::get('workers/store', [WorkerController::class , 'store']);
// Route::get('workers/index', [WorkerController::class , 'index']);
// Route::get('workers/show/{id}', [WorkerController::class , 'show']);
// Route::get('workers/update/{id}', [WorkerController::class , 'update']);
// Route::get('workers/delete/{id}', [WorkerController::class , 'delete']);
// Route::get('workers/trancate', [WorkerController::class , 'trancate']);


Route::get('visitor/index', [VisitorsController::class , 'index']);
Route::get('visitor/create', [VisitorsController::class , 'create']);
Route::get('visitor/show/{id}', [VisitorsController::class , 'show']);
Route::get('visitor/delete/{id}', [VisitorsController::class , 'delete']);

Route::get('tests/store', [TestController::class , 'store']);
Route::get('tests/index', [TestController::class , 'index']);
// Route::get ('delete' , [CategoryController::class , 'deleteAll'] );
