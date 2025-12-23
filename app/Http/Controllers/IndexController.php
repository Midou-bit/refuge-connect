<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function index()
    {
        $path = storage_path('app/animals.json');

        if (!File::exists($path)) {
            $animals = [];
        } else {
            $animals = json_decode(File::get($path), true);
            if (!is_array($animals)) {
                $animals = [];
            }
        }

        return view('welcome', [
            'animals' => $animals
        ]);
    }
}
