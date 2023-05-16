<?php

namespace App\Http\Controllers;

use App\Models\JobInterview;
use App\Http\Requests\StoreJobInterviewRequest;
use App\Http\Requests\UpdateJobInterviewRequest;
use App\Models\JobApplication;
use App\Models\JobPost;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobInterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_employer) {

            return JobInterview::with('user')
                ->with('jobPost')
                ->whereDate('date','>=',Carbon::today())
                ->orderBy('date')
                ->orderBy('start_time')
                ->whereHas('jobPost.company', function ($query) {
                    $query->where('company_id', Auth::user()->company_id);
                })->get();
        }

        return JobInterview::with('jobPost.company')
            ->where('user_id', Auth::user()->id)
            ->orderBy('date')
            ->orderBy('start_time')
            ->get();
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
    public function store(StoreJobInterviewRequest $request, $id)
    {
        JobInterview::create($request->all());
        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(JobInterview $jobInterview = null, $id)
    {
        return JobInterview::findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobInterview $jobInterview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobInterviewRequest $request, $id)
    {

        $jobInterview = JobInterview::findOrFail($id);

        $jobInterview->update($request->all());

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobInterview $jobInterview, $id)
    {
        JobInterview::findOrFail($id)->delete();
        return response()->json();
    }

    public function acceptInterview($id)
    {
        $jobInterview = JobInterview::findOrFail($id);
        $jobInterview->update([
            'status' => 'accept',
        ]);

        return response()->json();
    }

    public function declineInterview($id)
    {
        $jobInterview = JobInterview::findOrFail($id);
        $jobInterview->update([
            'status' => 'declined',
        ]);

        return response()->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function scheduleInterview(StoreJobInterviewRequest $request, $id)
    {
        $jobApplication = JobApplication::findOrFail($id);

        $jobPost = JobPost::findOrFail($jobApplication->job_post_id);
        $user = User::findOrFail($jobApplication->user_id);

        $user->jobPostsInterview()->attach($jobPost, $request->all());

        return response()->json();
    }

    public function getHistory()
    {
        if (Auth::user()->is_employer) {

            return JobInterview::with('user')
                ->with('jobPost')
                ->whereDate('date','<',Carbon::today())
                ->orderByDesc('date')
                ->orderBy('start_time')
                ->whereHas('jobPost.company', function ($query) {
                    $query->where('company_id', Auth::user()->company_id);
                })->get();
        }
    }
}
