@extends('driver.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header fw-bold text-muted">completed delivery Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>
                   </div>
                   @endif
                    <table id="example" class="table table-striped data-table fw-bold text-muted" style="width:100%">
                        <thead>
                            <tr>
                              
                                <th>Item Name</th>
                                <th>Products Type</th>
                                <th>Unit</th>
                                <th>Destination Estate</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($completed as $complete)
                            <tr>
                        
                             
                                <td>{{$complete->item->name}}</td>
                                <td>{{$complete->type}}</td>
                                <td>{{$complete->unit}}</td>
                                <td>{{$complete->estate->name}}</td>
                                <td>{{$complete->quantity}}</td>
                                <td>
                                    {{-- <a href="/click_clear/{{$jobdata->id}}" class="btn btn-primary">clear</a> --}}
                                </td>
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