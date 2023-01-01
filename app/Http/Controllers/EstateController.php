<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\User;
use App\Models\Field;
use App\Models\Estate;
use Illuminate\Http\Request;
use App\Http\Requests\EstateRequest;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();

        return view(
            'admin.estate.index',
            compact('estates')
        );
    }

    public function manage(Estate $estate)
    {
        $fields = Field::where('estates_id', $estate->id)
            ->get();

        $crops = $fields->map(function ($value, $key) {
            if ($value->crops()->count() > 1) return $value;
        });

        // $id = $fields->id;

        // $crops = Crop::where('fields_id', $id);

        return view(
            'admin.estate.manage',
            compact('fields', 'crops')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers = User::where('role', 'manager')
            ->get();

        return view('admin.estate.create', compact('managers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstateRequest $request)
    {
        $data = $request->validated();
        $data['managers_id'] = 1;

        Estate::create($data);

        return redirect()->route('admin.index');
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
    public function edit(Estate $estate)
    {
        $managers = User::where('role', 'manager')
            ->get();

        return view(
            'admin.estate.edit',
            compact('estate', 'managers')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Estate $estate, Request $request)
    {
        $estate->update($request->all());

        return redirect()
            ->back();
        // ->route('admin.estate.manage');
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

    public function myreq()
    {
        return view('estate.index');
    }
}
