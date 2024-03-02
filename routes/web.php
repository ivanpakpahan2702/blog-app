<?php

use App\Livewire\Alkitab;
use App\Livewire\Beranda;
use App\Livewire\Blog;
use App\Livewire\Galeri;
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

Route::get('/', Beranda::class);
Route::get('/blog', Blog::class);
Route::get('/galeri', Galeri::class);
Route::get('/alkitab', Alkitab::class);
