<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('landing.home');

Route::get('about', function () {
    return view('landing.about');
})->name('landing.about');

Route::get('contact', function () {
    return view('landing.contact');
})->name('landing.contact');

Route::get('angkatan', function () {
    $angkatans = config('angkatan', []);
    return view('landing.angkatan', compact('angkatans'));
})->name('landing.angkatan');

Route::get('angkatan/{id}', function ($id) {
    $angkatans = config('angkatan', []);
    $angkatan = $angkatans[$id] ?? null;
    if (!$angkatan) {
        abort(404);
    }
    return view('landing.angkatan-detail', compact('id', 'angkatan'));
})->name('landing.angkatan.show');

Route::get('sitemap.xml', function () {
    $angkatans = config('angkatan', []);
    $content = view('sitemap', compact('angkatans'))->render();
    return response($content, 200)->header('Content-Type', 'text/xml');
})->name('sitemap');
