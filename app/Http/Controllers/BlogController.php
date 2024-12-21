<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

class Fruit {
    public function __construct($data) {
        $this->meta_title = $data->meta_title;
        $this->meta_description = $data->meta_description;
        $this->meta_keywords = $data->meta_keywords;
    }   
}   

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
        $users = User::all();
        return view('blog.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = new Blog($request->validated());

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('images', 'public');
        }

        $blog->save();

        return Redirect::route('blog.index')->with('status', 'blog-created');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

        $seo = new Fruit($blog);
        $seo->meta_title;
        $seo->meta_description;
        $seo->meta_keywords;

        // add website layout here
        return view('website.blog-single', compact('blog', 'seo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $users = User::all();
        return view('blog.edit', compact('blog', 'users'));
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
        
        $blog->save();
        
        return Redirect::route('blog.edit', compact('blog'))->with('status', 'blog-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return Redirect::route('blog.index')->with('status', 'Blog Deleted');
    }
}
