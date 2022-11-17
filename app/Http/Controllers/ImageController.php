<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function getImage($path){
        // Ini buat return image Url, jadi data dikirim di sini (nama, id, imageUrl)
        $image = 'http://127.0.0.1:8000/' . 'api/get-image/' . $path;
        return response()->json([
            'imageUrl' => $image,
            'nama' => "Altaf"
        ]);
    }

    public function getImageUrl($path){
        // API buat ngirim image, jadi fungsi ini ngereturn file gambar
        $image = Storage::disk('public')->get('image/' . $path);
        return response($image, 200)->header('Content-Type', Storage::disk('public')->mimeType('image/'.$path));
    }

    public function uploadImage(Request $request)
    {
        // dd($request->image);
        $path = Storage::putFile('image',$request->image);
        $paths = explode('/', $path);
        // dd($paths);
        return response()->json(['path' => $paths[1], 'nama' => "Altaf"]);
    }
}
// php