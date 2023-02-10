@extends('inventory.app.layout')

@section('content')

       <div class="row justify-content-center align-items-center">
          <div class="col-md-9 col-md-offset-9">
              <div class="col-lg-12 col-md-offset-6">
                  <div class="card border-0 o-hidden shadow-lg my-5">

                    <div class="card-header bg-info text-white">
                   
                      <h4>Issue Stock</h4>

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

                          <form action= "{{action('App\Http\Controllers\issueStockController@update')}}" method="POST">

                            {{csrf_field()}}

                            <div class="form-row">
                              <div class="form-group col-md-3">
                                <label for="inputPassword4">Type</label>
                                <select type="text" name="stype" class="form-control type"  placeholder="Type" id="type_id">                             
                                  <option value="0" disabled="true" selected="true">Type</option>
                                  @foreach($prod as $type)
                                  <option value="{{$type->name}}">{{$type->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="inputPassword4">Name</label>
                                <select type="text" name="sname" class="form-control name"  placeholder="Name" >
                                  <option value="0" disabled="true" selected="true">Name</option>
                                  @foreach($prod1 as $name)
                                  <option value="{{$name ->id}}">{{$name ->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="inputPassword4">Unit</label>
                                <select type="text" name="sunit" class="form-control unit"  placeholder="Unit" id="">
                                  <option value="0" disabled="true" selected="true">Unit Measure</option>
                                  @foreach($unit as $unit)
                                  <option value="{{$unit ->name}}">{{$unit ->name}} </option>
                                  @endforeach
                                </select>
                              </div>

                              {{-- <div class="form-group col-md-12">
                                <label for="inputPassword4">Packag Size</label>
                                <select type="text" name="spackage" class="form-control psize"  placeholder="Package" id="">
                                  <option value="0" disabled="true" selected="true">package</option>
                                  @foreach($prod1 as $package)
                                  <option value="{{$package ->package_size}}">{{$package->package_size}} </option>
                                  @endforeach
                                </select>
                              </div> --}}

                              
                              <div class="form-group col-md-3">
                                <label for="inputPassword4">Estate</label>
                                <select type="text" name="estate" class="form-control supplier"  placeholder="Estate" id="">
                                  <option value="0" disabled="true" selected="true">--select-- </option>
                                  @foreach($estate as $estates)
                                  <option value="{{$estates ->id}}">{{$estates ->name}} </option>
                                  @endforeach
                                  
                                </select>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="inputPassword4">Category</label>
                                <select type="text" name="scategory" class="form-control supplier"  placeholder="Category" id="">
                                  <option value="0" disabled="true" selected="true">--select-- </option>
                                  @foreach($cat as $category)
                                  <option value="{{$category ->id}}">{{$category ->name}} </option>
                                  @endforeach
                                  
                                </select>
                              </div>

                              <div class="form-group col-md-3">
                                <label for="">Quantity</label>
                                <input type="text" name="squantity" class="form-control qauntity"  placeholder="">
                              </div>


                            </div>
                            <button type="submit"  class="btn btn-outline-info add_product">Submit</button>
                          </form>

                      </div>
                    </div>

                    
              </div>


          </div>

          

      </div>


  

@endsection('content')