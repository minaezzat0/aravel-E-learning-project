<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});


Route::middleware('logged')->group(function(){

    Route::get('/logout',[UserController::class, "logout"])->name('logout');
    Route::get('/create',[TeacherController::class, "create"])->name('createCourse');
    Route::post('/store',[TeacherController::class, "store"])->name('storeCourse');
    Route::get('/enroll/{id}',[StudentController::class, "enroll"])->name('enroll');
    Route::get('/myenroll',[StudentController::class, "myenroll"])->name('myenroll');
    Route::get('/unenroll/{id}',[StudentController::class, "unenroll"])->name('unenroll');
    Route::get('/deletecourse/{id}',[TeacherController::class, "deletecourse"])->name('deletecourse');
    Route::get('/editecourse/{id}',[TeacherController::class, "editecourse"])->name('editecourse');
    Route::post('/updatecourse/{id}',[TeacherController::class, "updatedcourse"])->name('updatedcourse');
    Route::get('view/course/{id}',[StudentController::class, "viewcourse"])->name('viewcourse');
    Route::post('add/comment/{id}',[CommentController::class, "addcomment"])->name('addcomment');
    Route::get('/myprofile',[HomeController::class, "myprofile"])->name('myprofile');
    Route::get('/delete/account',[UserController::class, "deleteaccount"])->name('deleteaccount');
    Route::get('edite/myname',[UserController::class, "editename"])->name('editename');
    Route::post('update/myname',[UserController::class, "updatename"])->name('updatename');
    Route::get('/home',[HomeController::class, "myhome"])->name('myhome');
});


Route::get('/register',[UserController::class, "register"])->name('register');
Route::post('/register',[UserController::class, "handleregister"])->name('handleregister');

Route::get('/login',[UserController::class, "login"])->name('login');
Route::post('/login',[UserController::class, "handlelogin"])->name('handlelogin');
