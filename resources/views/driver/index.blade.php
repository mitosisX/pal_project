@extends('driver.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header fw-bold text-muted">MY Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive">

                    <table id="example" class="table table-striped data-table fw-bold text-muted" style="width:100%">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Item Name</th>
                                <th>Products Type</th>
                                <th>Unit</th>
                                <th>Destination Estate</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $jobdata)
                            <tr>
                        
                                <td>{{$jobdata->description}}</td>
                                <td>{{$jobdata->item->name}}</td>
                                <td>{{$jobdata->type}}</td>
                                <td>{{$jobdata->unit}}</td>
                                <td>{{$jobdata->estate->name}}</td>
                                <td>{{$jobdata->quantity}}</td>
                                <td><button type="button" class="btn btn-primary">clear</button></td>
                            </tr>
                            @endforeach 
                          
                              
                        </tbody>
                    </table>


                   </div>
                </div>
              </div>

              
        </div>


    </div>
</div>

@endsection('content')