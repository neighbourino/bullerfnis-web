<?php

use App\Livewire\Articles\IndexArticles;
use App\Livewire\Articles\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('artikler', IndexArticles::class)->name('articles.index');
Route::get('artikler/{article}', ShowArticle::class)->name('articles.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
