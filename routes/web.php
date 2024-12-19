<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', function () {
    return view('home');
});




Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('courses', [Controllers\CourseController::class, 'index'])->name('courses.index');
    Route::get('course/create', [Controllers\CourseController::class, 'create'])->name('courses.create');
});

Route::middleware(['auth', 'verified'])->group(function (){
    Route::resource('courses', Controllers\CourseController::class)->except('index')->names([
            'store' => 'courses.course']);
});


Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/pemrograman', [Controllers\GalleryController::class, 'index'])->name('pemrograman');
Route::resource('users', Controllers\UserController::class)->middleware(['auth','verified', 'role_or_permission:tambah-user|admin']);
Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout',Controllers\LogoutController::class)->name('logout')->middleware('auth');
Route::get('/course',   [Controllers\CourseController::class, 'index'])->name('course');
Route::post('/users/course', [Controllers\UserController::class, 'course'])->name('users.course');

Route::get('/courses/{id}', [Controllers\CourseController::class, 'showCourse'])->name('courses.show');
Route::get('/courses/{id}/payment', [Controllers\CourseController::class, 'showPayment'])->name('courses.payment');


Route::get('admin', function(){
    return view('home');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('user', function(){
    return view('home');
})->middleware(['auth', 'verified', 'role:user']);

Route::get('tulisan', function(){
    return view('home');
})->middleware(['auth', 'verified', 'permission:lihat-course']);



require __DIR__.'/auth.php';