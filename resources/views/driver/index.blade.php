@extends('driver.layout')


@section('content')
<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header">MY Jobs</h3>
                <div class="card-body">
                   <div class="tables-responsive">

                    <table id="example" class="table table-striped data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Destination estate</th>
                                <th>Products Type</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Deliver Fertilizers</td>
                                <td>12-07-2022</td>
                                <td>Estate 43</td>
                                <td>Fertlizers</td>
                                <td>NPK</td>
                                <td>37,000</td>
                                <td>KG</td>
                                <td><button type="button" class="btn btn-primary">clear</button></td>
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