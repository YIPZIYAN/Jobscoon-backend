<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Http\Requests\StoreJobPostRequest;
use App\Http\Requests\UpdateJobPostRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JobPost::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobPostRequest $request)
    {
        return JobPost::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(JobPost $jobPost = null, $id)
    {
       
        return JobPost::with('company')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobPostRequest $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }

    public function applyJob($id)
    {
        $jobPost = JobPost::findOrFail($id);
        $jobPost->users()->attach(Auth::user()->id,[
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json();
    }

}
