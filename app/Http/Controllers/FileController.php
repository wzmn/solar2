<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $mediaItems = File::all();
        return view('media.index', compact('mediaItems'));
    }

    public function create()
    {
        return view('media.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=> 'required',
            'files.*' => 'file|max:2048', // Validate multiple files
        ]);
        
        $file = $request->file('image');
        $path = Storage::disk('public')->url($request->file('image')->store('images', 'public'));
        
        $new = File::create([
            'title' => $request->title,
            'name' => $file->getClientOriginalName(),
            'path' => $path, // Store the path from Media Library
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ]);
   
        return redirect()->route('file.index')->with('success', 'Image uploaded successfully.');
    }
    
    public function show(File $file)
    {
        return view('media.show', compact('file'));
    }
    public function destroy(Request $request)
    {
        $file = File::where('id', $request->media_id);
        $file->delete();

        return redirect()->route('file.index')->with('success', 'Image deleted successfully.');
    }
}
