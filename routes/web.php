<?php

use Illuminate\Support\Facades\Route;
Use App\Livewire\ListUsers;
use Psy\ExecutionLoop\Listener;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contacts', function () {
    return view('content.contacts');
})->name('contacts');

Route::get('/content', function () {
    return view('content.index');
})->name('content');

Route::get('/visits', function () {
    return view('content.site_visits');
})->name('visits');

Route::get('/technologies', function () {
    return view('content.advanced_technologies');
})->name('technologies');

Route::get('/agri_modelling', function () {
    return view('content.agri_modelling');
})->name('agri_modelling');

Route::get('/overview', function () {
    return view('content.overview');
})->name('overview');

Route::get('/key_findings', function () {
    return view('content.key_findings');
})->name('key_findings');

Route::get('/timeline', function () {
    return view('content.timeline');
})->name('timeline');

Route::get('/map', function () {
    return view('content.map');
})->name('map');

Route::get('/data_collection', function () {
    return view('content.data_collection');
})->name('data_collection');


Route::get('/facilities', function () {
    return view('content.facilities');
})->name('facilities');

Route::get('/lamb_cheque', function () {
    return view('content.lamb_cheque');
})->name('lamb_cheque');
Route::get('/live_trends', function () {
    return view('content.live_trends');
})->name('live_trends');

Route::get('/guides', function () {
    return view('content.guides');
})->name('guides');

Route::get('/experiments', function () {
    return view('content.experiments');
})->name('experiments');


Route::get('/publications', function () {
    return view('content.publications');
})->name('publications');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/listUsers', ListUsers::class)->name('listUsers');
});


require __DIR__.'/socialstream.php';
