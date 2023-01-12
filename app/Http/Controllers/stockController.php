<?php

namespace App\Http\Controllers;

use App\Models\DeliveryJob;
use App\Models\Stock;
use App\Models\Estate;
use App\Models\products;
use App\Models\Suppliers;
use App\Models\ProductType;
use App\Models\productUnit;
use Illuminate\Http\Request;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prod = ProductType::all();
        $prod1 = products::all();
        $sup = Suppliers::all();
        $unit = productUnit::all();
        return view('inventory.stock.create', compact('prod', 'prod1', 'sup', 'unit',));
    }


    public function findProductType(Request $request)
    {
        $data = products::select('name', 'id')->where('type', $request->id)->take(100)->get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->Validate($request, [
            'stype' => 'required',
            'sname' => 'required',
            'sunit' => 'required',
            'spackage' => 'required',
            'ssupplier' => 'required',
            'squantity' => 'required',
            'sprice' => 'required',
        ]);

        $stock1 = Stock::where([
            ['name', $request->sname],
            // ['supplier_id', '=', $request->supplier_id]
        ])->first();

        if ($stock1) {
            $stock1->increment('quantity', $request->squantity);
            return redirect('/inventory/stock')->with('success', 'Stock Updated');
        } else {
            // Stock::create($request->all());
            $stock = new Stock;

            $stock->type = $request->input('stype');
            $stock->name = $request->input('sname');
            $stock->unit = $request->input('sunit');
            $stock->package_size = $request->input('spackage');
            $stock->supplier = $request->input('ssupplier');
            $stock->quantity = $request->input('squantity');
            $stock->unit_price = $request->input('sprice');
            $stock->save();

            return redirect('/inventory/stock')->with('success', 'Data saved successfully');
        }
        // return redirect('/admin/stocks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function issue()
    {

        // return view('inventory/issue/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
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

    public function tes()
    {
        $data = Stock::get(['quantity', 'unit_price']);

        $quantity = $data->reduce(function ($carry, $item) {
            return $item->quantity * $item->unit_price;
        });

        dd($quantity);
    }
}
