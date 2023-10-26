<?php

use App\Http\Livewire\FirstComponent;
use App\Http\Livewire\VistaExterna;
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

Route::redirect('/', '/admin');

Route::get('/findticket', VistaExterna::class)->name('find.tickets');

Route::get('/pedido', FirstComponent::class);



