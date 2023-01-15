@extends('admin.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card border-0 o-hidden shadow-lg my-5">
                <h3 class="card-header fw-bold text-white bg-info">Completed delivery Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>

                   </div>
                   @endif
                    <table id="example" class="table data-table fw-bold text-muted" style="width:100%">
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
                            @foreach ($jobs as $job)
                            <tr>
                        
                                
                                <td>{{$job->item->name}}</td>
                                <td>{{$job->type}}</td>
                                <td>{{$job->unit}}</td>
                                <td>{{$job->estate->name}}</td>
                                <td>{{$job->quantity}}</td>
                             
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