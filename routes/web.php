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


//Route to view individual lead
Route::get('leads/view_lead/{id}', [AdminController::class, 'viewLead'])->name('view_lead')->middleware('auth');

//Route to convert lead
Route::get('leads/convert_lead/{id}', [AdminController::class, 'convertLead'])->name('convert_lead')->middleware('auth');


Route::post('leads/convert_lead/{id}', [AdminController::class, 'convertLeadForm'])->name('convert_lead')->middleware('auth');


Route::get('/accounts/manage_accounts', [AdminController::class, 'manageAccounts'])->name('manage_accounts')->middleware('auth');
Route::get('/accounts/add_account', [AdminController::class, 'addAccount'])->name('add_account')->middleware('auth');
Route::post('/accounts/add_account', [AdminController::class, 'addAccountData'])->name('add_account')->middleware('auth');
Route::get('/accounts/edit_account/{id}', [AdminController::class, 'editAccount'])->name('edit_account')->middleware('auth');
Route::post('/accounts/edit_account/{id}', [AdminController::class, 'updateAccount'])->name('update_account')->middleware('auth');
Route::get('/accounts/delete_account/{id}', [AdminController::class, 'deleteAccount'])->name('delete_account')->middleware('auth');
Route::get('/contacts/manage_contacts', [AdminController::class, 'manageContacts'])->name('manage_contacts')->middleware('auth');
Route::get('/contacts/manage_deals', [AdminController::class, 'manageDeals'])->name('manage_deals')->middleware('auth');
