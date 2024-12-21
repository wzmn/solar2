<?php

namespace App\Http\Controllers;

use App\Models\Solutions; // Make sure you have this model
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index()
    {
        $solutions = Solutions::all(); // Or paginate: Solution::paginate(10);
        return view('solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('solutions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add validation for other fields like 'image', 'link', etc.
        ]);

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Adjust path as needed
            $request->merge(['image' => $imagePath]); // Add image path to request data
        }


        Solutions::create($request->all());
        return redirect()->route('solutions.index')->with('success', 'Solution created successfully.');
    }

    public function show(Solutions $solution) // Route-model binding
    {
        return redirect()->route('home');
        // return view('solutions.show', compact('solution'));
    }

    public function edit(Solutions $solution) // Route-model binding
    {
        return view('solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solutions $solution) // Route-model binding
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Validation rules for other fields.
        ]);

        // Handle image updates (if applicable).  If a new image is uploaded,
        // update the 'image' attribute.  Otherwise, keep the existing image.
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Or your preferred storage
            $request->merge(['image' => $imagePath]);
        }

        $solution->update($request->all());


        return redirect()->route('solutions.index')->with('success', 'Solution updated successfully.');
    }

    public function destroy(Solutions $solution) // Route-model binding
    {
        $solution->delete();
        return redirect()->route('solutions.index')->with('success', 'Solution deleted successfully.');
    }
}
