<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    // READ - Show all cats
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    // CREATE - Show form
    public function create()
    {
        return view('cats.create');
    }

    // STORE - Save new cat
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required|integer',
            'color' => 'required',
        ]);

        Cat::create($request->all());
        return redirect()->route('cats.index')->with('success', 'Cat added successfully!');
    }

    // EDIT - Show form for one cat
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    // UPDATE - Save changes
    public function update(Request $request, Cat $cat)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required|integer',
            'color' => 'required',
        ]);

        $cat->update($request->all());
        return redirect()->route('cats.index')->with('success', 'Cat updated successfully!');
    }

    // DELETE - Remove cat
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats.index')->with('success', 'Cat deleted successfully!');
    }
}
