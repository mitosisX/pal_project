<!-- <?php

namespace App\Http\Controllers;

use id;
use App\Models\assignments;
use App\Models\DeliveryJob;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class assignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function assign()
    // {
    //     // $tasks = DeliveryJob::orderBy('created_at', 'asc')->get();
    //     $drivers = User::where('role', 'driver')->get();
    //     $userIndex = 0;

    //     // Get all tasks
    //     $jobs = DeliveryJob::all();

    //     // Sort the tasks array so that emergency tasks appear first
    //     $sortedJobs = $jobs->sort(function ($a, $b) {
    //         if ($a->cartigory_id == '2') return -1;

    //         if ($b->cartigory_id == '2') return 1;
    //         return 0;
    //     });

    //     $count = 0;

    //     foreach ($sortedJobs as $job) {
    //         $assignments = new assignments;
    //         $assignments->job_id = $job->id;
    //         $assignments->driver_id = $drivers[$count % count($drivers)]->id;
    //         $assignments->save();
    //         $count++;
    //     }


    //     $response = $this->post('/assign-job');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
} -->