<?php

use App\Http\Controllers\AdminController;
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

//Welcome view route
Route::get('/', function () {
    return view('welcome');
});

//Home view route
Route::get('/home', function () {
    return view('home');
})->name('dashboard')->middleware('auth');

//Login view route
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

//Login form data handling
Route::post('/login', [AdminController::class, 'login']);

//Logout route
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


//Add Lead Route
Route::get('/leads/add_lead', function () {
    return view('add_lead');
})->name('add_lead')->middleware('auth');

//Add Lead Form Data Handling
Route::post('/leads/add_lead', [AdminController::class, 'addLead'])->name('add_lead')->middleware('auth');

//Route for manage leads
Route::get('leads/manage_leads', [AdminController::class, 'manageLeads'])->name('manage_leads')->middleware('auth');

//Route to delete lead
Route::get('leads/delete_lead/{id}', [AdminController::class, 'deleteLead'])->name('delete_lead')->middleware('auth');


//Route for edit lead
Route::get('leads/edit_lead/{id}', [AdminController::class, 'editLead'])->name('edit_lead')->middleware('auth');


//Route for update lead
Route::post('leads/update_lead/{id}', [AdminController::class, 'updateLead'])->name('update_lead')->middleware('auth');
