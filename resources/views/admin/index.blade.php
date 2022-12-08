@extends('admin.layout')

@section('content')
<div class="row g-3 my-2">

<div class="col-md-12">
    <div class="col-lg-12">
        <div class="card">
            <h3 class="card-header text-muted fw-bold">Requests</h3>
            <div class="card-body">
                <h4 class="card-title font-weight-bold text-justify-center" > </h4>
                <table id="example" class="table table-striped data-table" style="width:100%">
                  <thead>
                      <tr>
                          <th>Item Name</th>
                          <th>Request Date</th>
                          <th>Item Type</th>
                          <th>Item Unit</th>
                          <th>Quantity</th>
                          <th>Crop to be used</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>NPK</td>
                          <td>08-11-2022</td>
                          <td>Fertilizer</td>
                          <td>KG</td>
                          <td>320,800</td>
                          <td>Maize</td>
                          <td><button type="button" class="btn btn-warning  ">pending</button></td>
                      </tr>
                     
                      
                  </tbody>
              </table>

              <p class="card-text"></p>
              <!-- <div> <a href="#" class="btn btn-primary">Add Field</a>  <a href="#" class="btn btn-primary">Edit Field</a> </div> -->
            </div>
          </div>

          
    </div>


</div>



</div>


<div class="row g-3 my-2">
 <div class="col-md-4">
    <div class="col-lg-12">
        <div class="card">
            <h3 class="card-header me-2 text-secondary" ><i class ="fas fa-chart-bar"></i> Crops</h3>
            <div class="card-body">
               <div class="tables-responsive">

               <!-- table here -->
               <canvas id="dChart" width="40" height="40"></canvas>


               </div>
            </div>
          </div>

          
    </div>


</div>


<div class="col-md-8">
  <div class="col-lg-12">
      <div class="card">
          <h3 class="card-header  me-2 text-secondary"><i class ="fas fa-chart-bar"></i> Chart</h3>
          <div class="card-body">
             <div class="tables-responsive">

              <!-- graph here -->
              <canvas id="myChart" width="400" height="200"></canvas>
              
              <!-- <canvas id="bar" class="chart chart-bar"
              chart-data="data" chart-labels="labels"> chart-series="series"
             </canvas> -->


             </div>
          </div>
        </div>

        
  </div>


</div>



</div>


@endsection('content')