<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{StudentController,
 HomeController,
 CourseController,
 Course_StudentController,
 QuizController,
 QuestionController,
 AnswerController,
 AboutController,
 ContactController,
 RegisterController,
 LoginController,
 StudentRegistrationController,
 LessonController,
 MainController,
 AdminController};
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
Route::get('/adminhome',[HomeController::class,'index'])->name('adminhome');
Route::get('/charts',function(){
    return view('Pages.charts');
})->name('charts');
Route::resource('enrolls', Course_StudentController::class);
Route::resource('quizes',QuizController::class);
Route::Post('/quizes/{id}',[QuizController::class,'all'])->name('all');
Route::resource('questions',QuestionController::class);
Route::resource('answers', AnswerController::class);
//Route::get('/enroll',[Course_StudentController::class,'index'])->name('enroll');

// Route::get('courses/index',[CourseController::class,'index'])->name('courses.index');
// Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
// Route::post('/courses',[CourseController::class,'store'])->name('courses.store');


//Route::get('/', function () {

//    return view('front.welcome');

//});


// welcome view not exists in view
    Route::get("/home", [MainController::class,"index"])->name("home")->middleware('authuser');
    Route::get("/about", [AboutController::class,"index"])->middleware('authuser');
    Route::get("/contact", [ContactController::class,"show"])->name("contact")->middleware('authuser');
    Route::post("/contact_us", [ContactController::class,"store"])->name("contact.store");
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index')->middleware('authuser');
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/studentregister', [StudentRegistrationController::class, 'index'])->middleware('auth');
    Route::post('/studentregister', [StudentRegistrationController::class, 'register'])->name('studentregister');
    Route::get('/lesson/{id}', [LessonController::class, 'show'])->name('lesson.show');
    Route::get('/lesson ', [LessonController::class, 'index'])->name('lesson.index');
    Route::resource('admins', AdminController::class);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
