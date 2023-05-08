<?php

header('Access-Control-Allow-Origin: https://panel.dnic.cloud');
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\VserverController;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/vserver/overview', [VserverController::class, 'overview'])->name('vserver.overview');
    Route::get('/vserver/view/{uid}', [VserverController::class, 'view'])->name('vserver.view');
    Route::get('/vserver/stats/{uid}', [VserverController::class, 'stats'])->name('vserver.stats');
    Route::get('/vmInfo/{uid}', [AjaxController::class, 'vmInfo'])->name('vserver.vmInfo');
    Route::get('/vmStats/{uid}', [AjaxController::class, 'vmStats'])->name('vserver.vmstats');
    Route::get('/ping/{id}', [AjaxController::class, 'getStatus'])->name('monitoring.status');
    Route::get('/monitoring/overview/{uid}', [MonitoringController::class, 'overview'])->name('monitoring.overview');
    Route::post('/monitoring/addhost', [AjaxController::class, 'addMonitor'])->name('monitoring.addhost');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('vserver.view');
});

require __DIR__.'/auth.php';
