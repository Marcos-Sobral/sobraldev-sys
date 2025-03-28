<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\techController;
use App\Http\Controllers\Admin\carrosselController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ExperienceControllr;
use App\Http\Controllers\Admin\projetoController;
use App\Http\Controllers\Admin\processoController;
use App\Http\Controllers\Admin\pj_cientificoController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;

//User
Route::get('/',[Controller::class, 'index'])->name('principal');
Route::view('/admin', 'welcome');

//ADMIN
Route::middleware("auth",'admin')->prefix('/admin')->group(function(){
    //tecnologia
    Route::prefix('/tecnologia')->group(function() {
        Route::get('/', [techController::class, 'index'])->name('admin.tech.index');
        Route::get('/criar', [techController::class, 'create'])->name('admin.tech.create');
        Route::post('/criar', [techController::class, 'store'])->name('admin.tech.store');
        Route::get('/editar/{id}', [techController::class, 'edit'])->name('admin.tech.edit');
        Route::put('editar/{id}', [TechController::class, 'update'])->name('admin.tech.update');
        route::delete('/deletar/{id}', [techController::class, 'destroy'])->name('admin.tech.destroy');
    });

    //Carrossel
    Route::prefix('/carrossel')->group(function(){
        Route::get('/',[carrosselController::class, 'index'])->name('admin.carrossel.index');
        Route::get('/criar',[carrosselController::class, 'create'])->name('admin.carrossel.create');
        Route::post('/criar',[carrosselController::class, 'store'])->name('admin.carrossel.store');
        Route::get('/editar/{id}',[carrosselController::class, 'edit'])->name('admin.carrossel.edit');
        Route::put('/editar/{id}',[carrosselController::class, 'update'])->name('admin.carrossel.update');
        Route::delete('/deletar/{id}',[carrosselController::class, 'destroy'])->name('admin.carrossel.destroy');
    });

    //projeto
    Route::prefix('/projeto')->group(function(){
        Route::get('/',[projetoController::class, 'index'])->name('admin.projeto.index');
        Route::get('/criar',[projetoController::class, 'create'])->name('admin.projeto.create');
        Route::post('/criar',[projetoController::class, 'store'])->name('admin.projeto.store');
        Route::get('/processos/{id}', [ProjetoController::class, 'show'])->name('admin.projeto.show');
        Route::get('/editar/{id}',[projetoController::class, 'edit'])->name('admin.projeto.edit');
        Route::put('/editar/{id}',[projetoController::class, 'update'])->name('admin.projeto.update');
        Route::delete('/deletar/{id}',[projetoController::class, 'destroy'])->name('admin.projeto.destroy');
    });

    //Processos de projetos
    Route::prefix('/processos')->group(function(){
        Route::get('/',[processoController::class, 'index'])->name('admin.processo.index');
        Route::get('/ver',[processoController::class, 'show'])->name('admin.processo.show');
        Route::get('/criar',[processoController::class, 'create'])->name('admin.processo.create');
        Route::post('/criar',[processoController::class, 'store'])->name('admin.processo.store');
        Route::get('/editar/{id}',[processoController::class, 'edit'])->name('admin.processo.edit');
        Route::put('/editar/{id}',[processoController::class, 'update'])->name('admin.processo.update');
        Route::delete('/deletar/{id}',[processoController::class, 'destroy'])->name('admin.processo.destroy');

    });
    //projetoCientifico
    Route::prefix('/cientifico')->group(function(){
        Route::get('/', [pj_cientificoController::class, 'index'])->name('admin.cientifico.index');
        Route::get('/criar',[pj_cientificoController::class, 'create'])->name('admin.cientifico.create');
        Route::post('/criar',[pj_cientificoController::class, 'store'])->name('admin.cientifico.store');
        Route::get('/editar/{id}',[pj_cientificoController::class, 'edit'])->name('admin.cientifico.edit');
        Route::put('/editar/{id}',[pj_cientificoController::class, 'update'])->name('admin.cientifico.update');
        Route::delete('/deletar/{id}',[pj_cientificoController::class, 'destroy'])->name('admin.cientifico.destroy');
    });

    //educacao
    Route::prefix('/educacao')->group(function(){
        Route::get('/', [EducationController::class, 'index'])->name('admin.education.index');
        Route::get('/criar',[EducationController::class, 'create'])->name('admin.education.create');
        Route::post('/criar',[EducationController::class, 'store'])->name('admin.education.store');
        Route::get('/editar/{id}',[EducationController::class, 'edit'])->name('admin.education.edit');
        Route::put('/editar/{id}',[EducationController::class, 'update'])->name('admin.education.update');
        Route::delete('/deletar/{id}',[EducationController::class, 'destroy'])->name('admin.education.destroy');
    });

    //Experiencia
    Route::prefix('/experiencia')->group(function(){
        Route::get('/', [ExperienceController::class, 'index'])->name('admin.experience.index');
        Route::get('/criar',[ExperienceController::class, 'create'])->name('admin.experience.create');
        Route::post('/criar',[ExperienceController::class, 'store'])->name('admin.experience.store');
        Route::get('/editar/{id}',[ExperienceController::class, 'edit'])->name('admin.experience.edit');
        Route::put('/editar/{id}',[ExperienceController::class, 'update'])->name('admin.experience.update');
        Route::delete('/deletar/{id}',[ExperienceController::class, 'destroy'])->name('admin.experience.destroy');
    });

    //USER
    Route::prefix('/user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/criar',[UserController::class, 'create'])->name('admin.user.create');
        Route::post('/criar',[UserController::class, 'store'])->name('admin.user.store');
        Route::get('/editar/{id}',[UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/editar/{id}',[UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/deletar/{id}',[UserController::class, 'destroy'])->name('admin.user.destroy');
    });


});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
