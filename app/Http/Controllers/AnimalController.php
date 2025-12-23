<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class AnimalController extends Controller
{
    private function getAnimals()
    {
        $path = storage_path('app/animals.json');

        if (!File::exists($path)) {
            return [];
        }

        return json_decode(File::get($path), true);
    }

    public function show($id)
    {
        $animals = $this->getAnimals();

        foreach ($animals as $animal) {
            if ($animal['id'] == $id) {
                return view('animals.show', [
                    'animal' => $animal
                ]);
            }
        }

        abort(404);
    }

    public function create()
    {
        return redirect()->route('home');
    }

    public function edit($id)
    {
        return redirect()->route('home');
    }

    public function delete($id)
    {
        return redirect()->route('home');
    }
}
