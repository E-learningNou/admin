<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\CourseController;
use App\Http\Controllers\Course_StudentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AnswerController;
=======
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\LessonController;
>>>>>>> front/main
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/home', function () {
//     return view('Pages.Home');
// })->name('home');
// Route::get('students/index',[StudentController::class,'index'])->name('students.index');
// Route::get('students/create',[StudentController::class,'create'])->name('students.create');
// Route::post('/students',[StudentController::class,'store'])->name('students.store');
// Route::delete('students/{student}', [StudentController::class,'destroy'])->name('students.destroy');
// Route::get('students/{student}',[StudentController::class,'edit'])->name('students.edit');
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/charts',function(){
    return view('Pages.charts');
})->name('charts');
Route::resource('enrolls', Course_StudentController::class);
Route::resource('quizes',QuizController::class);
Route::resource('questions',QuestionController::class);
Route::resource('answers', AnswerController::class);
//Route::get('/enroll',[Course_StudentController::class,'index'])->name('enroll');

// Route::get('courses/index',[CourseController::class,'index'])->name('courses.index');
// Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
// Route::post('/courses',[CourseController::class,'store'])->name('courses.store');
=======
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
>>>>>>> front/main
