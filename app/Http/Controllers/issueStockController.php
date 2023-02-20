<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stock;
use App\Models\Estate;
use App\Models\Category;
use App\Models\products;
use App\Models\Suppliers;
use App\Models\assignments;
use App\Models\DeliveryJob;
use App\Models\ProductType;
use App\Models\productUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
// use Illuminate\Foundation\Auth\User;

class issueStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = ProductType::all();
        $prod1 = products::all();
        $sup = Suppliers::all();
        $estate = Estate::all();
        $unit = productUnit::all();
        $cat = Category::all();
        return view('inventory.issue.index', compact('prod', 'prod1', 'sup', 'unit', 'estate', 'cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->Validate($request, [
            'stype' => 'required',
            'sname' => 'required',
            'sunit' => 'required',
            'estate' => 'required',
            'scategory' => 'required',
            'squantity' => 'required',
        ]);

        $stock2 = Stock::where([
            ['name', $request->sname],
            // ['supplier_id', '=', $request->supplier_id]
        ])->first();

        if ($stock2) {

            $stock2->decrement('quantity', $request->squantity);
        }

        // DB::table('users')->update(['votes' => DB::raw('GREATEST(votes - 5, 0)')]);

        $job = new DeliveryJob;

        $job->type = $request->input('stype');
        $job->products_id = $request->input('sname');
        $job->unit = $request->input('sunit');
        $job->estates_id = $request->input('estate');
        $job->category_id = $request->input('scategory');
        $job->quantity = $request->input('squantity');
        $job->save();


        // Get all the users from user table with role of "driver"
        $drivers = User::where('role', 'driver')->get();
        // get delivery jobs with cartigory 'emergency'
        $emergencyTasks = $job::where('category_id', '2')->get();


        //check is emegency delivery job exists and assign it to the first driver
        if ($emergencyTasks->count() > 0) {
            foreach ($emergencyTasks as $emergencyTask) {
                $driver = $drivers->first();
                $driver = $drivers->first();
                assignments::firstOrCreate(
                    ['job_id' => $emergencyTask->id, 'driver_id' => $driver->id]
                );
                $drivers = $drivers->slice(1);
            }
        }

        //get remaining delivery jobs without 'emergency' cartogory and assign them to to drivers
        $remainingTasks = $job::where('category_id', '!=', '2')->get();

        if ($drivers->count() > 0) {
            $numOfTasks = ceil($remainingTasks->count() / $drivers->count());
        } else {

            return redirect('/inventory/issue')->with('success', 'There are no drivers');
        }

        foreach ($drivers as $driver) {
            $assignedTasks = $remainingTasks->slice(0, $numOfTasks);
            foreach ($assignedTasks as $assignedTask) {

                assignments::firstOrCreate(
                    ['job_id' => $assignedTask->id, 'driver_id' => $driver->id]
                );

                //Makes sure that assigned task is not assigned to another driver again. one task is only assigned to one driver
                $index = $remainingTasks->search($assignedTask);
                $remainingTasks = $remainingTasks->slice(0, $index)->concat($remainingTasks->slice($index + 1));
            }
        }



        return redirect('/inventory/issue',)->with('success', 'Success', 'num');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function create(Request $request, $id)
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
