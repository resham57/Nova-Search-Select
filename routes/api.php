<?php

use Illuminate\Support\Facades\Route;
use Resham\NovaSearchSelect\Http\Controllers\Core\ResourceIndexController;
use Resham\NovaSearchSelect\Http\Controllers\SearchController;

Route::get('{resource}', ResourceIndexController::class)->name('resource.index');
Route::get('{resource}/get/searches', [SearchController::class, 'index'])->name('resource.searches');