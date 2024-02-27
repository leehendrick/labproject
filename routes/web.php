<?php

use App\Http\Controllers\CursoController;
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

//Rotas inicial
Route::get('/', fn() => Inertia::render('index'))->name('index');
Route::get('/registro', fn() => Inertia::render('Index/registro'))->name('registro');
Route::get('/contatos', fn() => Inertia::render('Index/contatos'))->name('contatos');

//Rotas livres
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/error', fn() => Inertia::render('Error'))->name('error');
Route::get('/registro/{id}', [CursoController::class, 'show'])->name('registro.curso');

//Rota de login
Route::get('/login', function () {
    sleep(5);
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Rota de administrador
Route::middleware(['auth', 'verified', 'admin'])->group(function (){
    Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/dashboard/formandos', fn() => Inertia::render('Formandos'))->name('dashboard.formandos');
    Route::resource('/receita', 'ReceitaController');
});

//Rota user auth
Route::middleware('auth')->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Vue Router
Route::get('/{any}', fn() => view('index'))->where('any', '.*');
require __DIR__.'/auth.php';
