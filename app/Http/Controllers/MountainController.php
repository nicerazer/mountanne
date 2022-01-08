<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mountain;

class MountainController extends Controller
{
    public function index () {
        return view('mountains.index', ['mountains' => Mountain::all()]);
    }

    public function create() {
        // Display the form
        return view('mountains.create');
    }

    public function store () {
        // User posted something using a form

        // We store it into the database
    }

    public function edit () {
        return view('mountains.edit');
    }

    public function update () {

    }

    public function destroy () {
        return view('mountains.index', ['mountains' => Mountain::all()]);
    }
}
