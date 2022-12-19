<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    
    
    <link rel="stylesheet" href= {{url('css/all.min.css')}}>
    <link rel="stylesheet" href= {{url('css/jquery-ui.css')}}>
    <link rel="stylesheet" href= {{url('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href= {{url('css/bootstrap.css')}}>
    <link rel="stylesheet" href= {{url('css/fontawesome/css/all.min.css')}}>
    <link rel="stylesheet" href= {{url('css/dataTables.bootstrap5.css')}}>
    <link rel="stylesheet" href={{url('css/graph.css')}}>
    <link rel="stylesheet" href= {{url('css/styles.css')}}>




    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
})

</script>

    <title>Press Agriculture Limited</title>

</head>

<body>

   <!-- manage estate modal -->




  




    
      

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-tractor me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text second-text fw-bold "><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent active second-text fw-bold "><i
                        class="fas fa-chart-line me-2"></i>Reports</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                          class="fas fa-truck-loading me-2"></i>Delivery Jobs</a>
                
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4 border-bottom" >
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-muted fw-bold" >Admin</h2>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="container-fluid px-4 pr-5">

              <div class="row g-3 my-2">
                <div class="col-md-12">



                    <form class="row g-3">
                        {{-- <div class="col-auto">
                          <label for="staticEmail2" class="visually-hidden">Email</label>
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Report from">
                        </div> --}}
                        <div class="col-auto">
                          <label for="inputPassword2" class="visually-hidden">Report from</label>
                          <input type="date" class="form-control" id="" placeholder="Report from">
                        </div>

                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">Report to</label>
                            <input type="date" class="form-control" id=""  placeholder="Report to">
                          </div>

                        <div class="col-auto">
                          <button type="submit" class="btn btn-success mb-3">Generate</button>
                        </div>
                      </form>


                    <div class="col-lg-12">
                        <div class="card">
                            <h3 class="card-header fw-bold text-muted">Report</h3>
                            <div class="card-body">
                               <div class="tables-responsive">
            
                                <table id="example" class="table table-striped data-table fw-bold text-muted" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Destination estate</th>
                                            <th>Assigned Driver</th>
                                            <th>Product Type</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Deliver Fertilizers</td>
                                            <td>12-07-2022</td>
                                            <td>Estate 43</td>
                                            <td>Mike Changazi</td>
                                            <td>Fertlizers</td>
                                            <td>NPK</td>
                                            <td>37,000</td>
                                            <td>KG</td>
                                            <td><button type="button" class="btn btn-warning">Pending</button></td>
                                        </tr>
                                          
                                    </tbody>
                                </table>
            
            
                               </div>
                            </div>
                          </div>
            
                          
                    </div>
            
            
                </div>
            </div>
 

            </div>






            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>



    
    <script src={{'js/jquery-3.6.1.min.js'}}></script>
    <script src={{'js/jquery.min.js'}}></script>
    <script src={{'js/jquery.js'}}></script>
    <script src={{'js/jquery-ui.js'}}></script>
    <script src={{'js/bootstrap.bundle.js'}}></script>
    <script src={{'js/bootstrap.bundle.min.js'}}></script>
    <script src={{'js/jquery.dataTables.min.js'}}></script>
    <script src={{'js/dataTables.bootstrap5.js'}}></script>
    <script src={{'js/bootstrap.js'}}></script>
    <script src={{'js/bootstrap.min.js'}}></script>
    <script src={{'js/bootstrap-modal.js'}}></script>
   

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"> --}}
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    <script>

        $('#stdModal').on('shown.bs.modal', function () {
            $('#stdModal').trigger('focus')
          })


    </script>
    
<script>$(document).ready(function () {
        $('.data-table').DataTable();
    });

</script>

<!-- charts js -->
<script src={{'js/chart.js'}}></script>
<script src={{'js/bar.js'}}></script>



<script>

/**doughnut chart**/

/**const config = {
  type: 'doughnut',
  data: data,
}; **/

var ctx1 = document.getElementById('dChart').getContext('2d');
var dChart = new Chart(ctx1, {
    type: 'doughnut',
    data: { 
      
      labels: [
      'Mize',
      'Breans',
      'Groundnuts',
      'Soya Beans'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100, 70],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(159, 43, 104)',
      ],
      hoverOffset: 4
    }]
     }
     
  });



/**const data1 = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};**/


//rederer of doghnut chart


</script>


<script>

  /** barchat **/

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['WEEK 1', 'WEEK 2', 'WEEK 3', 'WEEK 4', 'WEEK 1', 'WEEK 2'],
          datasets: [{
              label: '# of Approved Requests',
              data: [12, 19, 3, 5, 7, 16],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });



</script>


<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
          maxDate: 'today',
          dateFormat: "yy-mm-dd"
        });
  
        
    });



    $(function() {
        $('#datepicker1').datepicker({
          maxDate: 'today',
          dateFormat: "yy-mm-dd"
        });
  
        
    });
  </script>




</body>

</html>