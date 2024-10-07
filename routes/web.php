<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\HodController;
use App\Http\Controllers\PchoController;
use App\Http\Controllers\PchiaController;
use App\Http\Controllers\CasecloseController;
use App\Http\Controllers\ReportController;

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
// 

Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new', function () {
    return view('index');
});
// Route::get('/form', function () {
//     return view('form-wizard');
// });

Route::middleware(['auth'])->group(function () {
Route::get('/CounsellingRequest', [FormController::class, 'form1']);
Route::get('/get-user-details/{Class_ID}', [FormController::class, 'getUserDetails']);
Route::get('/CounsellingRequest', [FormController::class, 'getClassIds']);
Route::post('/CounsellingRequest', [FormController::class, 'requestform']);
Route::get('/CounsellingAssistance', [ScreenController::class, 'screen'])->name('screen');
Route::post('/appointment', [ScreenController::class, 'appointment'])->name('appointment');
Route::post('/reappointment', [ScreenController::class, 'reappointment'])->name('reappointment');
Route::post('/coordinator', [CoordinatorController::class, 'coordinator'])->name('coordinator');
Route::post('/counselor', [CoordinatorController::class, 'counselor'])->name('counselor');

// Route::get('/coordinator', [CoordinatorController::class, 'coordinator'])->name('coordinator');
Route::post('/hod', [HodController::class, 'hod'])->name('hod');
Route::post('/pcho', [PchoController::class, 'pcho'])->name('pcho');
Route::post('/pchia', [PchiaController::class, 'pchia'])->name('pchia');
Route::post('/close', [CasecloseController::class, 'close'])->name('close');
Route::post('/folowup', [CasecloseController::class, 'followup'])->name('followup');
Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
Route::get('/reports', [ReportController::class, 'getDataByRequestID'])->name('report.all');
Route::get('/stats', [ReportController::class, 'getStats'])->name('getStats');
Route::get('/student-appointments/{class_id}', [ReportController::class, 'getStudentAppointments'])
    ->name('studentAppointments'); 
    });