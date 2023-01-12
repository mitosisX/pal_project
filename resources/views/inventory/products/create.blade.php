
@extends('inventory.app.layout')

@section('content')

<div class="row justify-content-center align-items-center">
  <div class="col-md-6 col-md-offset-6">
      <div class="col-lg-12 col-md-offset-6">
                  <div class="card border-0 o-hidden shadow-lg my-5">

                    <div class="card-header">
                      <h4>Add Products</h4>
                  </div>
                    
                      <div class="card-body">
                        @if(count($errors)>0)
                        <div class ="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul> 
                          </div>
                          @endif

                          @if(\Session::has('success'))
                           <div class="alert alert-success">
                             <p>{{\Session::get('success')}}</p>
                           </div>
                          @endif

                          <form action= "{{action('App\Http\Controllers\productsController@store')}}" method="POST">

                            {{csrf_field()}}

                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">Name</label>
                                <input type="text" name= "pname"class="form-control name"  placeholder="Enter Name">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Type</label>
                                <select type="text" name="ptype" class="form-control crop"  placeholder="Type">
                                  <option selected>--select--</option>
                                  @foreach($data as $type)
                                  <option value="{{$type->id}}">{{$type->name}} </option>
                                  {{-- <option value="Groundnuts"> Gound Nuts</option> --}}

                                  
                                  @endforeach
                                </select>
                              </div>
                             

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Unit</label>
                                <input type="text" name="punit" class="form-control unit"  placeholder="Enter Unit">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Package</label>
                                <input type="text" name="ppackage" class="form-control package_size"  placeholder="EnterPackage">
                              </div>

                              
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Supplier</label>
                                <input type="text" name="psupplier" class="form-control supplier"  placeholder="Enter Suppler">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Use</label>
                                <input type="text" name="puse" class="form-control supplier"  placeholder="Enter Suppler">
                              </div>

                             
                              

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Unit Price</label>
                                <input type="text" name="pprice" class="form-control unit_price"  placeholder="Enter Unit Price">
                              </div>

                            </div>
                            <button type="submit"  class="btn btn-outline-info add_product">Add</button>
                          </form>

                      </div>
                    </div>

                    
              </div>


          </div>

          

      </div>


  

@endsection('content')

@section('javascript')

<script>
// fetch
// $.ajaxSetup({
//              headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                    }
//                });

//     $(document).ready(function() {

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






    //     $(document).on('click', '.add_product', function(e){
    //         e.preventDefault();
           

    //         var data ={
    //             'name': $('.name').val(),
    //             'type': $('.type').val(),
    //             'unit': $('.unit').val(),
    //             'package_size': $('.package_size').val(),
    //             'supplier': $('.supplier').val(),
    //             'unit_price': $('.unit_price').val(),
    //             'crop_id': $('.crop').val(),
    //         } 
            
    //         console.log(data); 

          



    //         $.ajax({
    //             type: "POST",
    //             url: "/inventory/products",
    //             data: data,
    //             dataType: "json",
    //             success: function(response) {
    //                 console.log(response);
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