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

        // $user_id = assignments::where(
        //     'driver_id',
        //     Auth::user()->id
        // )->get();

        $user_id = Auth::user()->id;

        $assigned_jobs = assignments::where('driver_id', $user_id)->get();
        $jobs = [];



        foreach ($assigned_jobs as $assigned_job) {
            $job = DeliveryJob::find($assigned_job->job_id);
            $jobs[] = $job;
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
        $assigned_jobs = assignments::where('driver_id', $user_id)->get();
        foreach ($assigned_jobs as $assigned_job) {
            if ($assigned_job->job_id == $id) {
                DeliveryJob::find($assigned_job->job_id)->delete();
                break;
            }
        }
        return redirect('driver')->with('success', 'job cleared');






        // DB::delete('delete from delivery_jobs where id=?', [$id] );

        // $user_id = Auth::user()->id;

        // $assigned_jobs = assignments::where('driver_id', $user_id)->get();

        // // DeliveryJob::find($id)->delete();


        // foreach ($assigned_jobs as $assigned_job) {
        //     $job = DeliveryJob::find($assigned_job->job_id)->delete();
        // }

        // return redirect('driver')->with('success', 'job cleared');
    }

    public function completed()
    {
        $completed = DeliveryJob::onlyTrashed()->get();
        return view('driver.completed.index', compact('completed'));
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