<?php

use App\Models\CaseStudy;
use App\Models\Resources;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\PHPMailerController;

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



Route::get('/about', function () {
    return view('about-us');
});

// Route::get('/resources', function () {
//     return view('resources');
// });

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
// Route::delete('/resources/{id}', [ResourceController::class, 'destroy'])->middleware('auth');

Route::post('/cs-posting', [CaseStudyController::class, 'store'])->middleware('auth');
Route::get('/cs-post', [CaseStudyController::class, 'create'])->middleware('auth');

Route::get('/case-study', [CaseStudyController::class, 'index']);
Route::get('/case-study/{id}', function($id) {
    $caseStudy = CaseStudy::find($id);
    return view('case-study', [
        'case-study' => $caseStudy
    ]);
});

Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/resources/{id}', function($id) {
    $resource = Resources::find($id);
    return view('resource', [
        'resource' => $resource
    ]);
});


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/contact-us', [PHPMailerController::class, 'index'])->name('send.mail');
Route::post('send-mail-contact', [PHPMailerController::class, 'contact'])->name('send.mail.contact');
Route::post('send-mail-resource', [PHPMailerController::class, 'resource'])->name('send.mail.resource');
Route::post('send-mail-consultation', [PHPMailerController::class, 'consultation'])->name('send.mail.consultation');