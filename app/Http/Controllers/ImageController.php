<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ImageController extends Controller
{
    // You can also try Imagick for even better quality if installed.
    public function saveCompositeImage(Request $request)
    {
        $imageData = $request->input('image');
        $filename = $request->input('filename');

        if (!$filename) {
            return response()->json(['error' => 'Filename is missing'], 400);
        }

        $existingPath = public_path('images/' . $filename);

        if (!file_exists($existingPath)) {
            return response()->json(['error' => 'Existing file not found'], 404);
        }

        $imageManager = new ImageManager(new Driver());
        $existingImage = $imageManager->read($existingPath);

        $width = $existingImage->width();
        $height = $existingImage->height();

        // Clean base64
        $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $imageData);
        $imageData = base64_decode($imageData);

        if ($imageData === false) {
            return response()->json(['error' => 'Invalid base64 image data'], 400);
        }

        $newImage = $imageManager->read($imageData);

        $newImage->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Apply optional enhancement
        $newImage->sharpen(5);

        // Save the image at full quality
        // The parameters are: (path, quality, format)
        $newImage->save($existingPath, 100, 'png');

        return response()->json([
            'path' => asset('images/' . $filename),
            'width' => $width,
            'height' => $height
        ]);
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

    public function translate(Request $request)
    {
        $text = $request->input('text');
        $target = $request->input('target');

        if (!$text || !$target) {
            return response()->json([
                'transliteratedText' => $text,
                'error' => 'Text or target language missing'
            ]);
        }

        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://inputtools.google.com/request', [
                'form_params' => [
                    'text' => $text,
                    'itc' => $target . '-t-i0-und',
                    'num' => 1
                ]
            ]);

            $body = json_decode($response->getBody(), true);

            if (isset($body[1][0][1][0])) {
                return response()->json([
                    'transliteratedText' => $body[1][0][1][0],
                ]);
            } else {
                return response()->json([
                    'transliteratedText' => $text,
                    'error' => 'No transliteration result'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'transliteratedText' => $text,
                'error' => 'Exception',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}
