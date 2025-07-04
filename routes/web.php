<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    $imagePath = public_path('images');

    $images = File::files($imagePath);

    $imageUrls = [];
    foreach ($images as $image) {
        $imageUrls[] = 'images/' . $image->getFilename();
    }

    return view('welcome', compact('imageUrls'));
})->name('home');


Route::get('/edit-image/{image}', function ($image) {
    // Optionally verify that the image exists in your images folder
    $imagePath = public_path('images/' . $image);
    if (!file_exists($imagePath)) {
        abort(404, 'Image not found');
    }

    return view('image-edit', compact('image'));
})->name('edit.image');

// web.php
Route::post('/save-composite-image', [ImageController::class, 'saveCompositeImage'])->name('save.composite.image');
Route::get('/fetch-images', [ImageController::class, 'fetchImages'])->name('fetch.images');
Route::post('/translate', [ImageController::class, 'translate'])->name('translate');