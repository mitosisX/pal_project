<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Estate;
use App\Models\DeliveryJob;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();
        $managers = User::where('role', 'manager')->get();

        // $jobs =DeliveryJob::count();
        // $complete=DeliveryJob::onlyTrashed()->count();
        // $cpercent = $complete / $jobs * 100;
        // $perce = floor($cpercent);

        //databymonthe
        $data = DeliveryJob::select('id','created_at')->get()
        ->groupBy(function($data){
                return Carbon::parse($data->created_at)->format('M');
        });

        $months=[];
        $monthCount=[];

        foreach($data as $month => $values){
            $months[]=$month;
            $monthCount[]=count($values);
        }

        return view(
            'admin.index',
            compact('estates', 'managers', 'data', 'months', 'monthCount')
        );



    }

    public function adminData()
    {

       
    }

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
}
