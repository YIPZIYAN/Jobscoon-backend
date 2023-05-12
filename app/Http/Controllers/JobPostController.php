<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Http\Requests\StoreJobPostRequest;
use App\Http\Requests\UpdateJobPostRequest;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return $user->is_employer ?
            JobPost::where('company_id', $user->company_id)->get()
            : JobPost::all();
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

        $company = Company::findOrFail(Auth::user()->company_id);

        $company->jobPosts()->create($request->all());

        return response()->json();
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
    public function update(StoreJobPostRequest $request, $id)
    {
        $jobPost = JobPost::findOrFail($id);

        $jobPost->update($request->all());

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jobPost = JobPost::findOrFail($id);
        $jobPost->delete();

        return response()->json();
    }

    public function applyJob($id)
    {
        $jobPost = JobPost::findOrFail($id);
        $jobPost->users()->attach(Auth::user()->id, [
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json();
    }
}
