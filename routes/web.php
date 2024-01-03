<?php

use Illuminate\Support\Facades\Route;
use App\Models\Resources;

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

Route::get('/case-study', function () {
    return view('case-study');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/consult-date', function () {
    return view('consult-date');
});

Route::get('/resources', function () {
    return view('resources', [
        'heading' => 'Latest Articles',
        'resources' => Resources::all()
    ]);
});

Route::get('/resources/{id}', function($id) {
    return view('resource', [
        'resource' => Resources::find($id)
    ]);
});