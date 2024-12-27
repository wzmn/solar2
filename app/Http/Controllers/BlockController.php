<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\File;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::all();
        return view('block.index', compact('blocks'));
    }

    public function create()
    {

        $files = File::all();
        return view('block.create', compact('files'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'data' => 'required|json', // Validate data as an array
        ]);

        Block::create($validatedData);

        return redirect()->route('block.index')->with('success', 'Block created successfully.');
    }


    public function show(Block $block)
    {
        return view('block.show', compact('block'));
    }


    public function edit(Block $block)
    {
        $files = File::all();

        return view('block.edit', compact('block', 'files'));
    }

    public function update(Request $request, Block $Block)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'data' => 'required|json', // Validate data as an array
        ]);

        dd($Block);
        $Block->update($validatedData);
        return redirect()->route('block.index')->with('success', 'Block updated successfully.');
    }


    public function destroy(Block $Block)
    {
        $Block->delete();

        return redirect()->route('block.index')->with('success', 'Block deleted successfully.');
    }
}
