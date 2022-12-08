<?php

namespace App\Http\Controllers;



use datatables;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;


class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        
        return view('products.layout');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    { 
        $products = products::all();
        return view('products.index')->with('products', $products);
    }


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
        $validator = Validator::make($request->all(),[
            'date'=>'required',
            'type'=>'required',
            'name'=>'required',
            'quantity'=>'required',
            'unit'=>'required',
            'price'=>'required',
            
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else{

        $produ = new products;

        $produ->date =$request->input('date');
        $produ->type =$request->input('type');
        $produ->name =$request->input('name');
        $produ->unit =$request->input('unit');
        $produ->quantity =$request->input('quantity');
        $produ->price =$request->input('price');
        $produ->save();

        return response()->json([
            'status'=>200,
            'message'=>'Product added successfully',
        ]);

    }

}

// public function fethproduct(Request $request){
//     if ($request->ajax()) {
//          $datas = products::all();
//          return datatables()->of(products::all())->toJson();
//      }        
     
//  }

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
