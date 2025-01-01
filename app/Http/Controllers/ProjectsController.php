<?php

namespace App\Http\Controllers;

use App\Models\Projects;  // Make sure this model exists
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all(); // Or paginate: Project::paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'client' => 'required', // Add validation rules for other fields as needed
            'image' => 'image|max:6000' // Example image validation
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public'); // Adjust storage path
            $validatedData['image'] = $imagePath; // Store the image path
        }


        Projects::create($validatedData);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Projects $project) // Route-model binding
    {
        // return redirect()->route('home');
        return view('projects.show', compact('project'));
    }

    public function edit(Projects $project) // Route-model binding
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Projects $project) // Route-model binding
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'client' => 'required',
             'image' => 'sometimes|image|max:6000' // For optional image updates
            // Add validation rules for other fields
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public');
            $validatedData['image'] = $imagePath;
        }


        $project->update($validatedData);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Projects $project) // Route-model binding
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
