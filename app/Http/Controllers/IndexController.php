<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        $json = Storage::get('animals.json');
        $animals = json_decode($json, true);

        return view('welcome', [
            'animals' => $animals
        ]);
    }
}
