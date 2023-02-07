<?php

use Illuminate\Support\Facades\Route;
use Qwetzal\Tag\Controllers\TagController;

Route::group(['prefix' => 'tags', 'as' => 'tag.'], function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
    Route::post('store', [TagController::class, 'store'])->name('store');
    Route::post('update/{tagId}', [TagController::class, 'update'])->name('update');
    Route::delete('delete/{tagId}', [TagController::class, 'delete'])->name('delete');
});