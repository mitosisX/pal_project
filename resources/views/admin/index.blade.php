@extends('admin.layout')

@section('content')
<div class="row g-3 my-2">

<div class="col-md-12">
    <div class="col-lg-12">
        <div class="card">
            <h3 class="card-header">Report</h3>
            <div class="card-body">
                <h4 class="card-title border-bottom border-top p-1 font-weight-bold text-justify-center" > </h4>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Acrerage</th>
                        <th scope="col">Acres in use</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>1</td>
                        <td>North-west</td>
                        <td>70</td>
                        <td>50</td>
                      </tr>
                      <tr>
                        <!-- <th scope="row">2</th> -->
                        <td>2</td>
                        <td>South-East</td>
                        <td>50</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <!-- <th scope="row">3</th> -->
                        <td>3</td>
                        <td>Central</td>
                        <td>50</td>
                        <td>20</td>
                      </tr>

                      <tr >
                        <!-- <th scope="row">3</th> -->
                        <td colspan="1" ></td>
                        <td class="font-weight-bold">TOTAL ACREARAGE</td>
                        <td>170</td>
                        <td>100</td>
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
            <h3 class="card-header fas fa-chart-bar me-2 text-secondary" >Chart CROP</h3>
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
          <h3 class="card-header fas fa-chart-bar me-2 text-secondary">Chart</h3>
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