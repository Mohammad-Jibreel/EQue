<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/',function(){
return view('FrontEnd.index');
});

Route::get('/table',function(){
    return view('BackEnd.table');
    });

    Route::get('/map',function(){
        return view('BackEnd.map');
        });
    
    Route::get('/calendar',function(){
        return view('BackEnd.calendar');
        });
    Route::get('/form',function(){
        return view('BackEnd.form');
        });
Route::get('/admin',function(){
    return view('BackEnd.index');
    });
    

    Route::get('/chart',function(){
        return view('BackEnd.chart');
        });
Route::get('/pricing',function(){
    return view('FrontEnd.pricing');
    });
    
    
Route::get('/feature',function(){
    return view('FrontEnd.feature');
    });
    


Route::get('/team',function(){
    return view('FrontEnd.team');
    });

Route::get('/about',function(){
    return view('FrontEnd.about');
    });

    Route::get('/service',function(){
        return view('FrontEnd.service');
        });

Route::get('/contact',function(){
    return view('FrontEnd.contact');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
