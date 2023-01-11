@extends('admin.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card border-0 o-hidden shadow-lg my-5">
                <h3 class="card-header fw-bold text-white bg-info">Summary Report</h3>
                <div class="card-body">
                   {{-- <div class="tables-responsive">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>
                   </div>
                   @endif --}}
                  
                    <table id="example" class="table table-hover data-table fw-bold text-muted" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                             
                            <tr>
                                <td>Total Request</td>
                                <td>{{$date}}</td>
                               
                            </tr>

                            <tr>
                                <td>Total Approved reqests</td>
                                <td></td>
                               
                            </tr>
                            
                            <tr >
                                <td>Total Pending reqests</td>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <td>Total Delivery Jobs</td>
                                <td></td>
                               
                            </tr>
                            <tr >
                                <td>Total Completed Delivery Jobs</td>
                                <td></td>
                               
                            </tr>
                            
                             
                          
                              
                        </tbody>
                    </table>


                   </div>
                </div>
              </div>

              
        </div>


    </div>
</div>

@endsection('content')

