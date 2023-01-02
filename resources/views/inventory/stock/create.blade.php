
@extends('inventory.app.layout')

@section('content')

       <div class="row justify-content-center align-items-center">
          <div class="col-md-6 col-md-offset-6">
              <div class="col-lg-12 col-md-offset-6">
                  <div class="card">
                    
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

                          <form action= "{{action('App\Http\Controllers\stockController@store')}}" method="POST">

                            {{csrf_field()}}

                            <div class="">
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Type</label>
                                <select type="text" name="stype" class="form-control type"  placeholder="Type" id="type_id">                             
                                  <option value="0" disabled="true" selected="true">Type</option>
                                  @foreach($prod as $type)
                                  <option value="{{$type->id}}">{{$type->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Name</label>
                                <select type="text" name="sname" class="form-control name"  placeholder="Name" >
                                  <option value="0" disabled="true" selected="true">Name</option>
                                  @foreach($prod1 as $name)
                                  <option value="{{$name ->id}}">{{$name ->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Unit</label>
                                <select type="text" name="sunit" class="form-control unit"  placeholder="Unit" id="">
                                  <option value="0" disabled="true" selected="true">Unit Measure</option>
                                  @foreach($unit as $unit)
                                  <option value="{{$unit ->id}}">{{$unit ->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Packag Size</label>
                                <select type="text" name="spackage" class="form-control psize"  placeholder="Package" id="">
                                  <option value="0" disabled="true" selected="true">package</option>
                                  @foreach($prod1 as $package)
                                  <option value="{{$package ->package_size}}">{{$package->package_size}} </option>
                                  @endforeach
                                </select>
                              </div>

                              
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Supplier</label>
                                <select type="text" name="ssupplier" class="form-control supplier"  placeholder="Supplier" id="">
                                  <option value="0" disabled="true" selected="true">--select-- </option>
                                  @foreach($sup as $supplier)
                                  <option value="{{$supplier ->id}}">{{$supplier ->name}} </option>
                                  @endforeach
                                  
                                </select>
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Quantity</label>
                                <input type="text" name="squantity" class="form-control qauntity"  placeholder="">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Unit Price</label>
                                <input type="text" name="sprice" class="form-control unit_price"  placeholder="">
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