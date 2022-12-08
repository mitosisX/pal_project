<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href= {{url('css/styles.css')}}>
    <link rel="stylesheet" href= {{url('css/all.min.css')}}>
    <link rel="stylesheet" href= {{url('css/jquery-ui.css')}}>
    <link rel="stylesheet" href= {{url('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href= {{url('css/bootstrap.css')}}>
    <link rel="stylesheet" href= {{url('css/fontawesome/css/all.min.css')}}>
    <link rel="stylesheet" href= {{url('css/dataTables.bootstrap5.css')}}>

        
    
    <title>Press Agriculture Limited</title>

    <script>
      
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')
      
      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
  
  </script>


</head>

<body class="font-sans-serif text-muted">

  <!-- FIRST MODAL ADD STOCK -->

  <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD NEW STOCK</h5>
        
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul id="saveform_errList"></ul>

        <form class="row g-3" action= "" method="POST" id="editForm">
          {{csrf_field()}}

          {{-- {{action('App\Http\Controllers\productsController@store')}} --}}
      
  
            <div class="col-md-6">
              <label  class="form-label">Date</label>
              <input type="text" name="date" class="date form-control" id="datepicker">
            </div>
  
            <div class="col-md-6">
              <label class="form-label">Product Type</label>
              <select  name="type" class="type form-select">
                <option ></option>
                <option value="fertilizer">fertilizer</option>
                <option value="chemicals">chemical</option>
                <option value="seeds">seeds</option>
              </select>
            </div>
            
            <div class="col-12">
              <label for="" class="form-label">Product Name</label>
              <select class="name form-select" name= "name" aria-label="Default select example">
                <option selected></option>
                <option value="npk :21:21:0+4s">npk :21:21:0+4s</option>
                <option value="Ammoniam Sulphate">Ammoniam Sulphate</option>
                <option value="d-Compound">d-Compound</option>
                <option value="roudnup">roudnup</option>
                <option value="seedco-dk80-703">seedco-dk80-703</option>
                <option value="dekarb-msc-370">dekarb-msc-370</option>
                <option value="innocullant">innocullant</option>
                <option value="phostoxin">phostoxin</option>
                <option value="Harnnes">Harnnes</option>
              </select>
            </div>
            <div class="col-md-4">
              <label  class="form-label">Quantity</label>
              <input type="text" name="quantity" class="quantity form-control" >
            </div>
            <div class="col-md-4">
              <label class="form-label">Unit</label>
              <select  name="unit" class="unit form-select">
                <option></option>
                <option value="kg">kg</option>
                <option value="ltr">ltr</option>
                <option value="grams">grams</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputZip" class="form-label">Price</label>
              <input type="text" name="price" class="price form-control" >
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
  
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary add_product">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>


  

<!-- dropdown -->



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-success second-text active border-bottom"><i
                        class="fas fa-tachometer-alt me-2"></i>Inventory</a>
                <!-- <a href="#" data-toggle="modal" data-target="#stdModal" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom "><i
                        class="fas fa-project-diagram me-2" ></i>Manage User</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-chart-line me-2"></i>Reports</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-paperclip me-2"></i>Crops</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-shopping-cart me-2"></i>Fields</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-gift me-2"></i>Crops</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-map-marker-alt me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-bottom"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
      
          <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4 border-bottom" >
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Master Inventory</h2>
                </div>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
                      
                        <div>
        
                      <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addProduct">Add New Stock</button>
                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Issue Out Stock</button> -->
                      </div>
        
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
              
            <div class="container-fluid px-4 pr-5 ">

              @yield('content')
  
            </div>
         </div>
        


  </div>


        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src={{'js/jquery.min.js'}}></script>
    <script src={{'js/jquery.js'}}></script>
    <script src={{'js/jquery-ui.js'}}></script>
    <script src={{'js/bootstrap.bundle.js'}}></script>
    <script src={{'js/jquery.dataTables.min.js'}}></script>
    <script src={{'js/dataTables.bootstrap5.js'}}></script>
    <script src={{'js/bootstrap.js'}}></script>
    <script src={{'js/bootstrap.min.js'}}></script>
    <script src={{'js/bootstrap-modal.js'}}></script>


    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    
<script>
  $(document).ready(function () {
        $('#example').DataTable({
        
    

        });
    });

</script> 


<script type="text/javascript">
  $(function() {
      $('#datepicker').datepicker({
        maxDate: 'today',
        dateFormat: "yy-mm-dd"
      });

      
  });
</script>

@yield('javascript')
</body>

</html>