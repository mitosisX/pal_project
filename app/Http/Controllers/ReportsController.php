<?php

namespace App\Http\Controllers;

use index;
use Carbon\Carbon;
use App\Models\DeliveryJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.report.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function search(Request $request)
    // {
    //     if($request->ajax()) {
    //         if($request->from_date != '' && $request->to_date !=''){
    //             $data = DB::table('delivery_jobs')
    //                     ->whereBetween('created_at', array($request->
    //                        from_date, $request->to_date ))->get(); 

    //         }else{
    //                $data = DB::table('delivery_jobs')->orderBy('created_at', 'desc')
    //                ->get();    
    //         }
    //         echo json_encode($data);


    //     }


    


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
