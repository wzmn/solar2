<?php

namespace App\Http\Controllers;

use App\Models\Testimonial; // Use the Testimonial model
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all(); // Or paginate: Testimonial::paginate(10);
        return view('testimonials.index', compact('testimonials')); 
    }

    public function create()
    {
        return view('testimonials.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required', // Adjust validation rules as needed
            // Add other validation rules (e.g., for image uploads, ratings, etc.)
        ]);

        $testimonial = new Testimonial($request->all());
        
        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('images', 'public');
        }
        $testimonial->save();

        

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function show(Testimonial $testimonial) // Route-model binding
    {
        if ($testimonial->type == 'client'){
            return redirect()->route('home');
        }else{
            return redirect()->route('employee-testimonials');
        }
        // return view('testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)  // Route-model binding
    {
        return view('testimonials.edit', compact('testimonial')); 
    }

    public function update(Request $request, Testimonial $testimonial) // Route-model binding
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required',
            // Add other validation rules
        ]);
        $testimonial->update($request->all());
        // Handle image upload if needed
        if ($request->hasFile('image')) {            
            $testimonial->image = $request->file('image')->store('images', 'public');
        }
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)  // Route-model binding
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
