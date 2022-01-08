<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mountain;

class MountainController extends Controller
{
    public function index () {
        return view('mountains.index', ['mountains' => Mountain::all()]);
    }

    public function show($id) {
        return view('mountains.show', ['mountain' => Mountain::find($id)]);
    }

    public function create() {
        // Display the form
        return view('mountains.create');
    }

    public function store (Request $request) {
        // User posted something using a form

        // Create a mountain
        // We store it into the database
        $mountain = Mountain::create([
            'name' => $request->name,
            'description' => $request->description,
            'altitude' => $request->altitude,
        ]);

        // Redirect to page before
        return redirect('mountains/' . $mountain->id);
    }

    public function edit ($id) {
        return view('mountains.edit', ['mountain' => Mountain::find($id)]);
    }

    public function update () {

    }

    public function destroy () {
        return view('mountains.index', ['mountains' => Mountain::all()]);
    }
}
