<?php

namespace App\Http\Controllers\Admin;

use App\Models\Crop;
use App\Models\User;
use App\Models\Field;
use App\Models\Estate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Field::create($request->all());
        return back();
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
    public function edit(Field $field)
    {
        $estates = Estate::all();
        $managers = User::where('role', 'manager')->get();

        return view(
            'admin.field.edit',
            compact('field', 'estates', 'managers')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Field $field, Request $request)
    {
        $field->update($request->all());

        return redirect()
            ->route('admin.index');
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

    public function manageCrop(Field $field, Crop $crop)
    {
        //Only want to show fields are from the same estate
        //as the field passed as the argument
        $estateId = Estate::where('id', $field->estates_id)
            ->first()
            ->id;

        //Here are all the fields
        $fields = Field::where('estates_id', $estateId)
            ->get();

        return view(
            'admin.crop.edit',
            compact('fields', 'crop')
        );
    }
}
