<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
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


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('admin.make_subdomain');
        });

        // // Use the defined route name
        Route::post('/subdomain', [AdminController::class, 'storeSubdomain']);
        Route::get('/all_tenants', [AdminController::class, 'allTenants']);

        // Add other admin routes as needed
    });
}
