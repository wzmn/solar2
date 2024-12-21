<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreJobRequest;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::all(); // Or paginate: Job::paginate(10);
        return view('job_listing.index', compact('jobs')); // Create a view
    }

    public function create()
    {
        return view('job_listing.create'); // Create a view
    }

    public function store(StoreJobRequest $request)
    {
        $validated = $request->validated();


        JobListing::create($validated);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }

    public function show(JobListing $job): RedirectResponse
    {
        return Redirect::route('job-openings', compact('job'));
    }

    public function edit(JobListing $job)
    {
        return view('job_listing.edit', compact('job')); // Create a view
    }

    public function update(Request $request, JobListing $job)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add other validation rules
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }

    public function destroy(JobListing $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}