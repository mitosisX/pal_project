<?php

namespace App\Http\Controllers;

use App\Models\assignments;
use App\Models\DeliveryJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function view()
    // {
    //     return view('driver.app.layout');

    // }

    public function index()
    {
        return view('driver.index');
    }


    public function myJobs()
    {

        $user_id = Auth::user()->id;

        $assigned_jobs = assignments::where('driver_id', $user_id)->get();
        $jobs = [];

        foreach ($assigned_jobs as $assigned_job) {
            $job = DeliveryJob::find($assigned_job->job_id);

            if ($job) {
                $jobs[] = $job;
            };
        }

        return view('driver.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $user_id = Auth::user()->id;

        $assigned_job = assignments::where('driver_id', $user_id)
            ->where('job_id', $id)
            ->first();

        if ($assigned_job) {
            DeliveryJob::find($assigned_job->job_id)->delete();
            return redirect('driver')->with('success', 'Job cleared');
        } else {
            return redirect('driver')->with('error', 'You are not authorized to clear this job');
        }

        return redirect('driver')->with('success', 'job cleared');
    }



    public function completed()
    {

        $user_id = Auth::user()->id;
        $completed_jobs = assignments::where('driver_id', $user_id)->get();
        $jobs = [];

        foreach ($completed_jobs as $completed_job) {
            $job = DeliveryJob::onlyTrashed()
                ->where('id', $completed_job->job_id)
                ->first();

            if ($job) {
                $jobs[] = $job;
            }
        }

        return view('driver.completed.index', compact('jobs'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
