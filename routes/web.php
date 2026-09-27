<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'index'])
    ->name('portfolio');

Route::get('/projects/{project:slug}', [PortfolioController::class, 'show'])
    ->name('projects.show');


Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('projects', ProjectController::class);

        Route::delete('project-images/{projectImage}', [ProjectController::class, 'destroyImage'])
            ->name('project-images.destroy');
    });
require __DIR__.'/auth.php';
