<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormQuisionerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IbuHamilController;
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

// jika belum login maka akan diarahkan ke halaman login dan jika sudah maka akan diarahkan ke halaman dashboard
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});

Route::group(['middleware' => ['auth', 'role:a,u']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name("dashboard");

        // Crud Ibu Hamil
        Route::get('/ibu-hamil', [IbuHamilController::class, 'index'])->name("ibu-hamil");
        Route::get('/ibu-hamil/edit/{id}', [IbuHamilController::class, 'edit'])->name("ibu-hamil.edit");
        Route::put('/ibu-hamil/edit/{id}', [IbuHamilController::class, 'update'])->name("ibu-hamil.update");
        Route::get('/ibu-hamil/show/{id}', [IbuHamilController::class, 'show'])->name("ibu-hamil.show");

        // Crud Form Quisioner
        Route::get('/list-quisioner', [FormQuisionerController::class, 'list'])->name("list-quisioner");
        Route::get('/list-quisioner/show/{id}', [FormQuisionerController::class, 'show'])->name("list-quisioner.show");

        // Step 1
        Route::get('/quisioner', [FormQuisionerController::class, 'index'])->name("form-quisioner");
        Route::post('/quisioner', [FormQuisionerController::class, 'store'])->name("form-quisioner.store");

        // Step 2
        Route::get('/quisioner/step2', [FormQuisionerController::class, 'step2'])->name("form-quisioner.step2");
        Route::post('/quisioner/step2', [FormQuisionerController::class, 'storeStep2'])->name("form-quisioner.step2.store");
    });
});

Auth::routes();
