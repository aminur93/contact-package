<?php

use Aminurdev\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('contact', [ContactController::class, 'send']);