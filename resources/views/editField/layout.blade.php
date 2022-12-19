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
     <link rel="stylesheet" href={{url('graph.css')}}>
     <link rel="stylesheet" href= {{url('css/styles.css')}}>
    
    
    <title>Press Agriculture Limited</title>

    <script>
      
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')
      
      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
  
  </script>


</head>

<body>

 <!-- Modal -->
<!-- dropdown -->



    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-tractor me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-success second-text active border-bottom"><i
                        class="fas fa-tachometer-alt me-2"></i>Manage Estate</a>    
                <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
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
                    <h2 class="fs-2 m-0 text-muted fw-bold">Edit Field</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
              

              <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>


    <script src={{'js/jquery-3.6.1.min.js'}}></script>
    <script src={{'js/jquery.min.js'}}></script>
    <script src={{'js/jquery.js'}}></script>
    <script src={{'js/jquery-ui.js'}}></script>
    {{-- <script src={{'js/bootstrap.bundle.js'}}></script> --}}
    <script src={{'js/bootstrap.bundle.min.js'}}></script>
    <script src={{'js/jquery.dataTables.min.js'}}></script>
    <script src={{'js/dataTables.bootstrap5.js'}}></script>
    {{-- <script src={{'js/bootstrap.js'}}></script> --}}
    <script src={{'js/bootstrap.min.js'}}></script>
    <script src={{'js/bootstrap-modal.js'}}></script>
    

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    
<script>$(document).ready(function () {
        $('.data-table').DataTable();
    });

</script>


</body>

</html>