@extends('inventory.app.layout')

@section('navbutton')
    <a href="{{route('inventory.report.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Generate Report</a>
@endsection

@section('content')
    {{-- <div class="row g-3 my-2">
          <div class="col-md-12"> --}}

    <!-- modal buttons -->
    {{-- @if (count($errors) > 0)

              <div class="alert alert-danger">
                <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
                </ul>
                </div>
            @endif
            
            @if (\Session::has('success'))
                 <div class="alert alert-success">
                  <p>{{\Session::get('success')}}</p>
                 </div>
            @endif   --}}

    {{-- <div class="col-lg-12">
               <div id="success_message"> </div>
                <table class="table ">
                  <thead class="table-light text-muted">
                    <tr>
                      <th>Products</th>
                      <th>Fertilizer</th>
                      <th>Chemicals</th>
                      <th>Seeds</th>     
                    </tr>
                  </thead >
                  <tbody>
                    <thead class="table-light text-muted">
                      <tr>
                        <th>Amount</th>
                        <th>Mk20,000,000.00</th>
                        <th>MK15,000,000.00</th>
                        <th>MK10,000,000.00</th>
                      </tr>
                    </thead>
                  
                  </tbody>
                </table>

                    
              </div>


          </div>


      </div> --}}

    <div class="row g-3 my-2">
        <div class="col-md-12">
            <div class="col-lg-12">
                <div class="card border-0 o-hidden shadow-lg my-5 ">
                    <h3 class="card-header bg-info text-white">Inventory</h3>
                    <div class="card-body">
                        <div class="tables-responsive">

                            <table id="example" class="table table-hover data-table" style="width:100% lead">
                                <thead class="text-muted">
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Type</th>
                                        <th>Unit of Measure</th>
                                        <th>Package Size</th>
                                        <th>Quantity</th>
                                        <th>Supplier</th>
                                        <th>Unit Price</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stocks as $stock)
                                        <tr>
                                            <td>{{ $stock->proName->name }}</td>
                                            <td>{{ $stock->proType->name }}</td>
                                            <td>{{ $stock->proUnit->name }}</td>
                                            <td>{{ $stock->package_size }}</td>
                                            <td>{{ $stock->quantity }}</td>
                                            <td>{{ $stock->proSupplier->name }}</td>
                                            <td>{{ $stock->unit_price }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                                </tfoot>
                            </table>


                        </div>
                    </div>
                </div>


            </div>


        </div>



    </div>


    <div class="row g-3 my-2">
        <div class="col-md-12">
            <div class="col-lg-12">
                <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5">
                    <h3 class="card-header bg-info text-white">Goods Release Notes</h3>
                    <div class="card-body">
                        <div class="tables-responsive shadow-4 ">

                            <table id="example" class="table data-table fw-bold text-muted" style="width:100% lead lead" >
                                <thead>
                                    <tr>
                                        
                                        
                                        <th>Request Date</th>
                                        <th>Product</th>
                                        <th>Type</th>
                                        <th>Unit</th>
                                        <th>Requesting Estate</th>
                                        <th>Request Description</th>
                                        <th>Quantity</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($request as $req)
                                        <tr>
                                            
                                            <td>{{$req->created_at}}</td>
                                            <td>{{$req->product->name}}</td>
                                             <td>{{$req->productType->name}}</td>
                                             <td>{{$req->unit->name}}</td>
                                            <td>{{$req->estate->name}}</td>
                                            <td>{{$req->description}}</td>
                                            <td>{{$req->quantity}}</td>

                                            <td>

                                                @if ($req->category->name === 'Emergency')
                                                    <button type="button" class="btn btn-outline-danger ">Emergency Request </button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-outline-info ">Normal Request</button>
                                                @endif

                                            <td>

                                            <td>
                                                 @if ($req->status === 'pending')
                                                    <button type="button" class="btn btn-outline-warning ">Pending</button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-outline-success ">Accepted</button>
                                                @endif
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection('content')

@section('javascript')
    <script>
        // fetch
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

                    // fetchproduct()

                    // function fetchproduct(){
                    //     $.ajax({
                    //        type: "GET",
                    //        url: "/fetch-products",
                    //       dataType: "json",
                    //        success: function(response) {
                    //         // console.log(response.products);
                    //         $.each(response.products, function(key, item){
                    //             $('tbody').append('<tr>\
                    //                               <td>'+item.id+'</td>\
                    //                               <td>'+item.name+'</td>\
                    //                               <td>2'+item.type+'</td>\
                    //                               <td>'+item.date+'</td>\
                    //                               <td>'+item.qauntity+'</td>\
                    //                               <td>'+item.unit+'</td>\
                    //                               <td>'+item.price+'</td>\
                    //                           </tr>');




                    //         });

                    //     }



                    //     });

                    // }






                    // $(document).on('click', '.add_product', function(e){
                    //     e.preventDefault();


                    //     var data ={
                    //         'date': $('.date').val(),
                    //         'type': $('.type').val(),
                    //         'name': $('.name').val(),
                    //         'quantity': $('.quantity').val(),
                    //         'unit': $('.unit').val(),
                    //         'price': $('.price').val(),
                    //     } 

                    // console.log(data); 





                    // $.ajax({
                    //     type: "POST",
                    //     url: "/products",
                    //     data: data,
                    //     dataType: "json",
                    //     success: function(response) {
                    // console.log(response);
                    //                 if(response.status ==400)
                    //                 {
                    //                     $('#saveform_errList').html("");
                    //                     $('#saveform_errList').addClass('alert alert-danger');
                    //                     $.each(response.errors, function(key, err_values){
                    //                         $('#saveform_errList').append('<li>' +err_values+ '</li>');
                    //                     });
                    //                 }else{
                    //                     $('#saveform_errList').html("");
                    //                     $('#success_message').addClass('alert alert-success');
                    //                     $('#success_message').text(response.message);
                    //                     $('#addProduct').modal('hide');
                    //                     $('#addProduct').find('input').value("");
                    //                 }

                    //             }


                    //         });


                    //     });



                    // });
    </script>
@endsection('javascript')
