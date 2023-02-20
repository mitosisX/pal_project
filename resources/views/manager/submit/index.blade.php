@extends('manager.app.layout')

@section('content')
    @if (session('request-submited'))
        @section('scripts')
            <script>
                new swal("Done!",
                    "Your request has been submitted!",
                    "failure");
            </script>
        @endsection
    @endif
    @if (session('request-rejected'))
        @section('scripts')
            <script>
                new swal("Failed!",
                    "Your request was rejected.",
                    "success");
            </script>
        @endsection
    @endif

    <div class="row justify-content-center align-items-center">
        <div class="col-md-9 col-md-offset-9">
            <div class="col-lg-12 col-md-offset-6">
                <div class="card border-0 o-hidden shadow-lg my-5">
                    <div class="card-header text-white bg-info">
                        <h4>Submit Request</h4>
                    </div>

                    <div class="card-body">
                        {{-- @if (count($errors) > 0)
                        <div class ="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul> 
                          </div>
                          @endif

                          @if (\Session::has('success'))
                           <div class="alert alert-success">
                             <p>{{\Session::get('success')}}</p>
                           </div>
                          @endif  --}}

                        <form action="{{ route('manager.request.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Product Type</label>
                                    <select type="text" name="type_id" class="form-control type" id="type_id" required>
                                        @foreach ($p_types as $p_type)
                                            <option value="{{ $p_type->id }}">{{ $p_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Product Name</label>
                                    <select type="text" name="products_id" class="form-control name" required>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Product Unit</label>
                                    <select type="text" name="unit_id" class="form-control unit" id="" required>
                                        @foreach ($p_units as $p_unit)
                                            <option value="{{ $p_unit->id }}">{{ $p_unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Product Package Size</label>
                                    <select name="request_category_id" class="form-control psize" required>
                                        @foreach ($r_categories as $r_category)
                                            <option value="{{ $r_category->id }}">{{ $r_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Product Quantity</label>
                                    <input type="number" name="quantity" class="form-control qauntity" placeholder="" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Estate</label>
                                    <select type="text" name="estates_id" class="form-control supplier" required>
                                        @foreach ($user as $estate)
                                            <option value="{{ $estate->id }}">{{ $estate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Requests Description</label>
                                    <textarea class="form-control" name="description" rows="4" required></textarea>
                                </div>


                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success add_product">Submit</button>
                                </div>
                            </div>

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

        $(document).ready(function() {
            $(document).on('change', '.type', function() {
                var prod_id = $(this).val();
                //  console.log(prod_id)
                var div = $(this).parent();

                var op = " ";

                $.ajax({
                    type: 'get',
                    url: "{{ route('inventory.stock.findProductType') }}",
                    data: {
                        'id': prod_id
                    },

                    success: function(data) {
                        //  console.log('success');  

                        //  console.log(data);

                        //  console.log(data.length);
                        op += '<option value="0" selected disabled>chose product</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].name +
                                '</option>';

                        }
                        div.find('.name').html(" ");
                        div.find('.name').append(op);


                    },
                    error: function() {

                    },

                });

            });




        });
    </script>
@endsection('javascript')
