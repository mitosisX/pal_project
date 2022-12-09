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




   <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">SELECT ESTATE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="list-group fw-bold text-muted">
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE 10</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE 21</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE 35</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE 7</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE 19</a>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">CREATE ESTATE</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
         <!-- Modal 1 form -->

          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Estate Name</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
              
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Location</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>

        </form>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Add Manager to Estate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <!-- modal 2 form -->

          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please User Phone Number
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Estate</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Select</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Password</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Enter user Password
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
          <button class="btn btn-primary" type="submit" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  

  {{-- ADD PRODUCT MODAL --}}

<!-- Modal -->
<div class="modal fade fw-bold text-muted" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel fw-bold">ADD PRODUCT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-6">
            <label for="validationCustom01" class="form-label fw-bold">Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            
          </div>

          <div class="col-md-6">
            <label for="validationCustom02" class="form-label fw-bold">Type</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
          </div>
          
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label fw-bold">Unit Price</label>
            <input type="text" class="form-control" id="validationCustom03" required> 
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" >Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>



{{-- PRODUCT LIST MODAL --}}

<div class="modal fade" id="addedProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-muted" id="staticBackdropLabel">PRODUCTS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="list-group fw-bold text-muted">
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">FERTILIZER</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">CHEMICALS</a>
          <a href="#" class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">SEEDS</a>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




    
      

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-tractor me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-success second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-chart-line me-2"></i>Reports</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                          class="fas fa-truck-loading me-2"></i>Delivery Jobs</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#addedProduct" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-gift me-2"></i>Products</a>
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



              <div class="dropdown position-absolute start-50">
                <button class="btn btn-light dropdown-toggle btn-lg" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                 <a class=" nav-link text-muted fw-bold "> <i class="fas fa-tasks "></i> Admin Tasks</a>

                </button>
                <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item active fw-bold" href="#">Action</a></li>
                  <li><a class="dropdown-item fw-bold" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Create Estate</a></li>
                  <li><a class="dropdown-item fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Manage Estate</a></li>
                  <li><a class="dropdown-item fw-bold" href="#">Manage User</a></li>
                  <li><a class="dropdown-item fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</a></li>
                  {{-- <li><hr class="dropdown-divider"> </li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
                </ul>
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

              

                @yield('content')
 

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




</body>

</html>