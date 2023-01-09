
@extends('manager.app.layout')

@section('content')

       <div class="row justify-content-center align-items-center">
          <div class="col-md-6 col-md-offset-6">
              <div class="col-lg-12 col-md-offset-6">
                  <div class="card border-0 o-hidden shadow-lg my-5">
                    <div class="card-header">
                      <h4>Submit Request</h4>
                  </div>
                    
                      <div class="card-body">
                        {{-- @if(count($errors)>0)
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
                          @endif  --}}

                          <form action= "{{action('App\Http\Controllers\stockController@store')}}" method="POST" >

                            {{csrf_field()}}

                            <div class="">
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Product Type</label>
                                <select type="text" name="stype" class="form-control type"  placeholder="Type" id="type_id">                             
                                  <option value="0" disabled="true" selected="true">Type</option>
                                  
                                  <option value=""></option>
                                  
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Product Name</label>
                                <select type="text" name="sname" class="form-control name"  placeholder="Name" >
                                  <option value="0" disabled="true" selected="true">Name</option>
                                
                                  <option value=""></option>
                                  
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Product Unit</label>
                                <select type="text" name="sunit" class="form-control unit"  placeholder="Unit" id="">
                                  <option value="0" disabled="true" selected="true">Unit Measure</option>
                                  
                                  <option value=""></option>
                                
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Product Packag Size</label>
                                <select type="text" name="spackage" class="form-control psize"  placeholder="Package" id="">
                                  <option value="0" disabled="true" selected="true">package</option>
                                  
                                  <option value=""> </option>
                                
                                </select>
                              </div>

                              
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Product Quantity</label>
                                <input type="text" name="squantity" class="form-control qauntity"  placeholder="">
                              </div>


                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Request Category</label>
                                <select type="text" name="ssupplier" class="form-control supplier"  placeholder="Supplier" id="">
                                  <option value="0" disabled="true" selected="true">--select-- </option>
                                  
                                  <option value=""></option>
                                
                                  
                                </select>
                              </div>
                               

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Requests Description</label>
                              <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                              </div>


                            </div>
                            <button type="submit"  class="btn btn-success add_product">update</button>
                            
                          </form>

                      </div>
                    </div>

                    
              </div>


          </div>

          

      </div>


  

@endsection('content')

@section('javascript')

<script>

// $.ajaxSetup({
//              headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                    }
//                });

$(document).ready(function(){
  $(document).on('change','.type',function(){
   var prod_id=$(this).val();
  //  console.log(prod_id)
   var div=$(this).parent();

  var op=" ";

    $.ajax({
         type:'get',
         url: "{{route('inventory.stock.findProductType')}}",
         data:{'id':prod_id},

         success:function(data){
            //  console.log('success');  
             
            //  console.log(data);

            //  console.log(data.length);
               op+='<option value="0" selected disabled>chose product</option>';
             for(var i=0;i<data.length;i++){ 
              op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
            
            }
            div.find('.name').html(" ");
				     div.find('.name').append(op);


         },    
         error:function(){

         },

    });
    
  });
  
  
  
  
  });


</script>
@endsection('javascript')