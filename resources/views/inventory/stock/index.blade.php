
@extends('Inventory.app.layout')

@section('content')


      <div class="row g-3 my-2">
          <div class="col-md-12">
            
              <!-- modal buttons -->
            {{-- @if(count($errors)>0)

              <div class="alert alert-danger">
                <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
                </ul>
                </div>
            @endif
            
            @if(\Session::has('success'))
                 <div class="alert alert-success">
                  <p>{{\Session::get('success')}}</p>
                 </div>
            @endif   --}}

              <div class="col-lg-12">
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


      </div>

      <div class="row g-3 my-2">
          <div class="col-md-12">
              <div class="col-lg-12">
                  <div class="card">
                      <h3 class="card-header">Inputs</h3>
                      <div class="card-body">
                         <div class="tables-responsive">

                          <table id="example" class="table table-borderd table-striped data-table" style="width:100%">
                              <thead class="text-muted">
                                  <tr>
                                      <th>ID</th>
                                      <th>Product</th>
                                      <th>Type</th>
                                      <th>Last Purchased</th>
                                      <th>Amount Purchsased</th>
                                      {{-- <th>Amount Used</th>
                                      <th>Remaining</th> --}}
                                      <th>Unit</th>
                                      {{-- <th>Average Unit Price</th> --}}
                                      <th>Cost</th>
                                  </tr>
                              </thead>
                              {{-- <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->type}}</td>
                                    <td>{{$product->date}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->unit}}</td>
                                    <td>{{$product->price}}</td>   
                                </tr>
                                @endforeach  --}}
                            </tbody>
                              </tfoot>
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