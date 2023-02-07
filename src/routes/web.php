<?php

use Illuminate\Support\Facades\Route;

Route::get('test', [\Qwetzal\Tag\Controllers\TagController::class, 'index']);