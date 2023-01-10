@extends('admin.app.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card border-0 o-hidden shadow-lg my-5">
                <h3 class="card-header fw-bold text-white bg-info">Report</h3>
                <div class="card-body">
                   {{-- <div class="tables-responsive">
                   @if(\Session::has('success'))
                   <div class="alert alert-success">
                    <h4>{{\Session::get('success')}}</h4>
                   </div>
                   @endif --}}
                   <form action="{{action('App\Http\Controllers\ReportsController@search')}}" method="POST">
                    {{csrf_field()}}
                    <div class="container">
                       <div class="row">
                         <div class="container-fluid">
                          <div class="form-group row">
                                <label for="date" class="col-sm col-form-label ">From</label>
                                <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="from" name="from" required>
                                </div>

                                <label for="date" class="col-sm col-form-label ">To </label>
                                <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="to" name="to" required>
                                </div>

                                <div class="col-sm">
                                    <button type="submit" class="btn" name="search" title="search" ><i class="fa fa-search" style="color:#2E86C1 ;" aria-hidden="true"></i></button>
                                </div>
                      </div>
                    </div>
                    </div>
                   </div>
                   </form>


                    <table id="example" class="table table-striped table-hover data-table fw-bold text-muted" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total Request</th>
                                <th>Total Approved reqests</th>
                                <th>Total Pending reqests</th>
                                <th>Total Delivery Jobs</th>
                                <th>Total Completed Delivery Jobs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr data-status="active">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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