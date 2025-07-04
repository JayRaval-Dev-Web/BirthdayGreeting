<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function saveCompositeImage(Request $request)
    {
        $imageData = $request->input('image');
        $filename = $request->input('filename'); // e.g., "example.png"

        if (!$filename) {
            return response()->json(['error' => 'Filename is missing'], 400);
        }

        // Remove base64 header
        $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $imageData);
        $imageData = base64_decode($imageData);

        // Create manager with GD driver
        $imageManager = new ImageManager(new Driver());

        // Read the image from binary data
        $image = $imageManager->read($imageData);

        $path = public_path('images/' . $filename);

        // Save with max quality
        $image->save($path, quality: 100);

        return response()->json(['path' => asset('images/' . $filename)]);
    }
    public function fetchImages()
    {
        $imagePath = public_path('images');
        $images = File::files($imagePath);

        $imageUrls = [];
        foreach ($images as $image) {
            $imageUrls[] = 'images/' . $image->getFilename();
        }

        return response()->json($imageUrls);
    }
}
