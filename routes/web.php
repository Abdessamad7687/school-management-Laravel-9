<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;

use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/motDirecteur', 'motDirecteur')->name('motDirecteur');
    Route::get('/Presentation', 'Presentation')->name('Presentation');
    Route::get('/Press', 'Press')->name('Press');
    Route::get('/Technique', 'Technique')->name('Technique');
    Route::get('/Formation', 'Formation')->name('Formation');
    Route::get('/News', 'News')->name('News');
    Route::get('/Reportage', 'Reportage')->name('Reportage');
    Route::get('/Couverture', 'Couverture')->name('Couverture');
    Route::get('/Emission', 'Emission')->name('Emission');
    Route::get('/Magazine', 'Magazine')->name('Magazine');
    Route::get('/Podcast', 'Podcast')->name('Podcast');
    Route::get('/Making', 'Making')->name('Making');
    Route::get('/Court', 'Court')->name('Court');
    Route::get('/Documentaire', 'Documentaire')->name('Documentaire');
    Route::get('/Autres', 'Autres')->name('Autres');
    Route::get('/Agenda', 'Agenda')->name('Agenda');
});

Route::get('/inscription', [ClientController::class, 'create'])->name('inscription');
Route::post('/inscription', [ClientController::class, 'store']);

Route::get('/Contacter', [ClientController::class, 'Contacter'])->name('Contacter');
Route::post('/Contacter', [ClientController::class, 'contact']);

Route::get('/admin', [ClientController::class, 'admin'])->middleware('auth.basic');

Route::get('/login', [ClientController::class, 'loginView']);
Route::post('/login', [ClientController::class, 'login'])->name('login');

Route::controller(GalleryController::class)->group(function(){
    Route::get('image-upload', 'index')->middleware('auth.basic')->name('image-upload');
    Route::post('image-upload', 'store')->middleware('auth.basic')->name('image.store');
    Route::get('Gallery', 'Gallery')->name('Gallery');
});



