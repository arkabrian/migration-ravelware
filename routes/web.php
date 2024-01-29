<?php

use App\Http\Controllers\CaseStudyController;
use Illuminate\Support\Facades\Route;
use App\Models\Resources;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use App\Models\CaseStudy;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact-us');
});

// Route::get('/resources', function () {
//     return view('resources');
// });

Route::get('/case-study', [CaseStudyController::class, 'index']);
Route::get('/case-study/{id}', function ($id) {
    return view('case_study', [
        'case_study' => CaseStudy::find($id)
    ]);
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/consult-date', function () {
    return view('consult-date');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/resources/?tag={tag}', function($tag) {
    return view('resource', [
        'resource' => Resources::find($tag)
    ]);
});

Route::get('/admin-login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin-logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/admin-register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/admin-post', [ResourceController::class, 'create'])->middleware('auth');
Route::post('/ngeposting', [ResourceController::class, 'store'])->middleware('auth');
// Route::delete('/ngedelete/{resource}', [ResourceController::class, 'destroy'])->middleware('auth');

Route::get('cs-post', [CaseStudyController::class, 'create'])->middleware('auth');
Route::post('cs-posting', [CaseStudyController::class, 'store'])->middleware('auth');
Route::get('/case-study/{id}', function($id) {
    return view('case-study', [
        'case-study' => CaseStudy::find($id)
    ]);
});

Route::get('/resources', [ResourceController::class, 'index']);

Route::get('/resources/{id}', function($id) {
    return view('resource', [
        'resource' => Resources::find($id)
    ]);
});