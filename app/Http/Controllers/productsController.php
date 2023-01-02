<?php

namespace App\Http\Controllers;



use datatables;
use App\Models\Crop;
use App\Models\products;
// use Illuminate\Routing\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        // $crops=Crop::all();
        $data = ProductType::all();  
        return view('inventory.products.create', ['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function table()
    // { 
    //     $products = products::all();
    //     return view('products.index')->with('products', $products);
    // }


    // public function store(Request $request){
    //     $products = new products;

           


    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->Validate($request,[
            'pname'=>'required',
            'ptype'=>'required',
            'punit'=>'required',
            'ppackage'=>'required',
            'psupplier'=>'required',
            'pprice'=>'required',
              
        ]);

        $produ = new products;

        $produ->name =$request->input('pname');
        $produ->type =$request->input('ptype');
        $produ->unit =$request->input('punit');
        $produ->package_size =$request->input('ppackage');
        $produ->supplier =$request->input('psupplier');
        $produ->unit_price =$request->input('pprice');
        $produ->save();

        return redirect('/inventory/products')->with('success', 'Data saved successfully'); 

    }



public function fethproduct(Request $request){

     }        
     
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
