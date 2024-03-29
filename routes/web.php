<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\URL;

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
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


//Rota de gerente
Route::middleware(['auth', 'verified', 'gerente'])->group(function (){
    Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/dashboard/inscricoes', fn() => Inertia::render('Dashboard/Inscricoes'))->name('dashboard.inscricoes');
    Route::get('/dashboard/cursos', fn() => Inertia::render('Dashboard/Cursos'))->name('dashboard.cursos');
    Route::resource('/receita', 'ReceitaController');
    Route::get('/usuario-logado', function (){
        return response()->json(['id' => auth()->id()]);
    });
});

//Rota user auth
Route::middleware('auth')->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');


//Vue Router
//Route::get('/{any}', fn() => view('index'))->where('any', '.*');
require __DIR__.'/auth.php';
