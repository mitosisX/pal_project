@extends('driver.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card border-0 o-hidden shadow-lg my-5">
                <h3 class="card-header fw-bold text-white bg-info">MY Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive shadow-4 ">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>
                   </div>
                   @endif
                    <table id="example" class="table align-middle data-table fw-bold text-muted" style="width:100%">
                        <thead class="">
                            <tr>
                                
                                <th>Item Name</th>
                                <th>Products Type</th>
                                <th>Unit</th>
                                <th>Destination Estate</th>
                                <th>Quantityy</th>
                                 <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $jobdata)
                            <tr>

                                <td>{{$jobdata->item->name}}</td>
                                <td>{{$jobdata->type}}</td>
                                <td>{{$jobdata->unit}}</td>
                                <td>{{$jobdata->estate->name}}</td>
                                <td>{{$jobdata->quantity}}</td>
                                <td>{{$jobdata->status}}</td>
                                <td>
                                    <a href="/click_clear/{{$jobdata->id}}" class="btn btn-outline-success">clear</a>
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