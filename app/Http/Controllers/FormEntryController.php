<?php

namespace App\Http\Controllers;

use App\Models\FormEntry;
use Illuminate\Http\Request;

class FormEntryController extends Controller
{
    public function index()
    {
        $formEntries = FormEntry::all(); // Or paginate: form::paginate(10);
        return view('form.index', compact('formEntries')); // Create a view
    }

    public function create()
    {
        return view('form.create'); // Create a view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required|numeric',
            'reason' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'form_type' => 'required',
            // Add other validation rules
        ]);
        
        FormEntry::create($request->all());

        return json_encode(['message' => 'Form entry created successfully.']);
    }

    public function show(Request $request, FormEntry $form)
    {   
        return view('form.show', compact('form')); // Create a view
    }

    public function edit(FormEntry $form)
    {
        return view('form.edit', compact('form')); // Create a view
    }

    public function update(Request $request, FormEntry $form)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add other validation rules
        ]);

        $form->update($request->all());

        return redirect()->route('form.index')->with('success', 'form updated successfully.');
    }

    public function destroy(FormEntry $form)
    {
        $form->delete();
        return redirect()->route('form.index')->with('success', 'Entry deleted successfully.');
    }
}