<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [ProfileController::class, 'openDashboard'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest:sanctum')->group(function () {
    Route::get('/profession/create', [ProfileController::class, 'createProfession'])->name('createprofession');
    Route::get('/profession/create-account/{id}', [ProfileController::class, 'createAccountProfession'])->name('createaccountprofession');
    Route::post('/getservices', [LeadsController::class, 'getServices'])->name('getservices');
    Route::post('/registeruser', [RegisteredUserController::class, 'store'])->name('registeruser'); 
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/seller/dashboard', [LeadsController::class, 'showLeads'])->name('show-leads');
    Route::get('/responses', [LeadsController::class, 'showResponses'])->name('show-responses');
    Route::get('/help', [LeadsController::class, 'showHelp'])->name('help'); 
    Route::post('/update_services', [ProfileController::class, 'updateServices'])->name('update_services'); 
    Route::post('/getleads', [LeadsController::class, 'getUserLeads'])->name('get_leads');    
    Route::post('/leaddetails', [LeadsController::class, 'getLeadDetails'])->name('lead_details'); 
    Route::post('/getresponsedetails', [LeadsController::class, 'getResponseDetails'])->name('getresponsedetails'); 
    Route::post('/opencontacts', [LeadsController::class, 'openContacts'])->name('open_contacts'); 
    Route::get('/gotoemail', [LeadsController::class, 'goToEmail'])->name('gotoemail'); 
    Route::post('/addleadstrail', [LeadsController::class, 'addLeadsTrail'])->name('addleadstrail'); 
    Route::post('/addleadnote', [LeadsController::class, 'postNote'])->name('addleadnote'); 
});

require __DIR__.'/auth.php';