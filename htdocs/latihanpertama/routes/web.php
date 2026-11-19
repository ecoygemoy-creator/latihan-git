
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

// Routing Modul 2
Route::get('/', [ProfileController::class, 'home']);

Route::get('/gallery', [ProfileController::class, 'gallery']);

Route::get('/about', [ProfileController::class, 'about']);

// Routing lama Modul 1
Route::get('/hello', function () {
    return 'hello, world!';
});
