<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

Route::get('/index', function (){
    return Inertia::render('index');
})->name('index');

Route::get('/{any}', function () {
    return Inertia::render('App');
})->where('any', '.*');

Route::get('/registro', function (){
    return Inertia::render('Index/register');
})->name('/registro');

Route::get('/contatos', function (){
    return Inertia::render('Index/contatos');
})->name('/contatos');


Route::get('/login', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth', 'verified', 'admin'])->group(function (){
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/dashboard/formandos', function (){
        return Inertia::render('Formandos');
    })->name('/dashboard/formando');
});
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('/receita', ReceitaController::class);
});


require __DIR__.'/auth.php';
