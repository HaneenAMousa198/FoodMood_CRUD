<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// الصفحة الرئيسية - صفحة home
Route::get('/', function () {
    return view('home');
})->name('home');

// صفحة الأسئلة
Route::get('/qpage', function () {
    return view('qpage');
})->name('qpage');

// صفحة النتائج
Route::get('/resultpage', function () {
    return view('resultpage');
})->name('resultpage');
