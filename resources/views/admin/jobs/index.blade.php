@extends('admin.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card border-0 o-hidden shadow-lg my-5">
                <h3 class="card-header fw-bold text-white bg-info">Pending Delivery Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>
                   </div>
                   @endif
                    <table id="example" class="table table-hover data-table fw-bold text-muted" style="width:100%">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Products Type</th>
                                <th>Unit</th>
                                <th>Destination Estate</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all as $jobs)
                            <tr data-status="active">
                                <td>{{$jobs->item->name}}</td>
                                <td>{{$jobs->type}}</td>
                                <td>{{$jobs->unit}}</td>
                                <td>{{$jobs->estate->name}}</td>
                                <td>{{$jobs->quantity}}</td>
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