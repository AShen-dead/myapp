<?php

namespace App\Http\Controllers;

use App\Models\Cat;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all(); // get all 50 cats
        return view('cats.index', compact('cats'));
    }
}
