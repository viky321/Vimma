<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('products', [PagesController::class, 'products'])->name('products');
Route::get('blog', [PagesController::class, 'blog'])->name('blog');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');



// POST route pre spracovanie formulára
Route::post('contact', [PagesController::class, 'store'])->name('contact.store');



