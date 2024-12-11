<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\LessonController;
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

//Route::get('/', function () {

//    return view('front.welcome');

//});


// welcome view not exists in view
    Route::get("/home", [HomeController::class,"index"])->name("home");
    Route::get("/about", [AboutController::class,"index"]);
    Route::get("/contact", [ContactController::class,"show"])->name("contact");
    Route::post("/contact_us", [ContactController::class,"store"])->name("contact.store");
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/studentregister', [StudentRegistrationController::class, 'index'])->middleware('auth');
    Route::post('/studentregister', [StudentRegistrationController::class, 'register'])->name('studentregister');
    Route::get('/lesson/{id}', [LessonController::class, 'show'])->name('lesson.show');
    Route::get('/lesson ', [LessonController::class, 'index'])->name('lesson.index');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
