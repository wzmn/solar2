<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

 

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::paginate();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = json_encode(Category::all()->map(function($item){
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug
            ];
        }));
        $users = User::all();
        return view('blog.create', compact('users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $categoriesArray = explode(',', $request->input('categories', [])[0]);
        
        $blog = new Blog($request->validated());

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('images', 'public');
        }
        
        $blog->save();

        // Sync categories after creating the blog so that $blog->id is available
        if (!$categoriesArray[0]) {
            $blog->categories()->sync([]); // Empty categories
        }else{
            $blog->categories()->sync($categoriesArray); // Sync categories
        }

        return Redirect::route('blog.index')->with('success', 'Blog Created');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        // add website layout here
        // return view('website.blog-single', compact('blog', 'seo'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $users = User::all();
        $categories = json_encode(Category::all()->map(function($item){
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug
            ];
        }));
        return view('blog.edit', compact('blog', 'users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validated();

        $blog->fill($validated);

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('images', 'public');
        }

        $categoriesArray = explode(',', $request->input('categories', [])[0]);
        if (!$categoriesArray[0]) {
            $blog->categories()->sync([]); // Empty categories
        }else{
            $blog->categories()->sync($categoriesArray); // Sync categories
        }

        $blog->save();
        
        return Redirect::route('blog.edit', compact('blog'))->with('success', 'blog-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return Redirect::route('blog.index')->with('success', 'Blog Deleted');
    }
}
