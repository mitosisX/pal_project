<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Estate;
use App\Models\products;
use App\Models\ProductType;
use App\Models\productUnit;
use Illuminate\Http\Request;
use App\Models\Request_Category;
use Illuminate\Support\Facades\Auth;

class requestController extends Controller
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
        $products = products::all();
        $p_types = ProductType::all();
        $p_units = productUnit::all();
        $r_categories = Request_Category::all();
        $user = User::where('id', Auth::user()->id)
            ->first()
            ->estates()
            ->get();

        return view(
            'manager.submit.index',
            compact(
                'products',
                'p_types',
                'p_units',
                'r_categories',
                'user'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Requests::create($request->all());
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
