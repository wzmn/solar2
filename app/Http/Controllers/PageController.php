<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Block;



class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::paginate();
        return view('page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('page.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $validated = $request->validated();
        Page::create($validated);
        return Redirect::route('page.index')->with('success', 'Page created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return !!$page->slug ? Redirect::route($page->slug) : Redirect::route('404');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        $users = User::all();
        $allBlocks = Block::all(); // Get all available components
        return view('page.edit', compact('page', 'users', 'allBlocks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page): RedirectResponse
    {
        $validated = $request->validated();
        $blocksToSync = [];
        if ($request->has('blocks')) {
            foreach ($request->input('blocks') as $blockData) {
                $block = Block::find($blockData['id']);
                if ($block) {
                    $blocksToSync[$block->id] = ['order' => $blockData['order'] ?? null];
                }
            }
        }

        $page->blocks()->sync($blocksToSync);
        $page->update($validated);
        return Redirect::route('page.edit', compact('page'))->with('success', 'Page Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page): RedirectResponse
    {
        $page->delete();
        return Redirect::route('page.index')->with('success', 'Page Deleted');
    }
}
