<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Buttons</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Admin Tasks</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin tasks:</h6>
                        <a class="collapse-item" href="createUser.php">Manage users</a>
                        <a class="collapse-item" href="buttons.php">Create estate</a>
                        <a class="collapse-item" href="cards.php">Manage estates</a>
                        <a class="collapse-item" href="buttons.php">Add Product</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.php">Colors</a>
                        <a class="collapse-item" href="utilities-border.php">Borders</a>
                        <a class="collapse-item" href="utilities-animation.php">Animations</a>
                        <a class="collapse-item" href="utilities-other.php">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Login</a>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                        <a class="collapse-item" href="blank.php">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Estate</h1>

                    <!-- <div class="row justify-content-center"> -->

                        <div class="col-lg-12">

                            <div class="row justify-content-center">

                                <!-- <div class="row g-3 my-2"> -->
                                    <div class="col-md-6">
                
                                        <div class="col-lg-12">
                                            <div class="card fw-bold text-muted">
                                                <h3 class="card-header">Fields</h3>
                                                <div class="card-body">
                                                    <h4 class="card-title font-weight-bold text-justify-center" > </h4>
                                                    <table class="table table-striped fw-bold text-muted">
                                                        <thead>
                                                          <tr>
                                                            <!-- <th scope="col">#</th> -->
                                                            <th scope="col">Number</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Total Acrerage</th>
                                                            <th scope="col">Acres in use</th>
                                                            <th scope="col">Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <!-- <th scope="row">1</th> -->
                                                            <td>1</td>
                                                            <td>North-west</td>
                                                            <td>70</td>
                                                            <td>50</td>
                                                            <td>
                                                                <a href="editField.php" type="button" class="btn btn-success">EDIT</a>
                                                                <a type="button" class="btn btn-danger">DELETE</a>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <!-- <th scope="row">2</th> -->
                                                            <td>2</td>
                                                            <td>South-East</td>
                                                            <td>50</td>
                                                            <td>30</td>
                                                            <td>
                                                                <a href="editField.php"  type="button" class="btn btn-success">EDIT</a>
                                                                <a type="button" class="btn btn-danger">DELETE</a>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <!-- <th scope="row">3</th> -->
                                                            <td>3</td>
                                                            <td>Central</td>
                                                            <td>50</td>
                                                            <td>20</td>
                                                            <td>
                                                                <a href="editField.php"  type="button" class="btn btn-success">EDIT</a>
                                                                <a type="button" class="btn btn-danger">DELETE</a>
                                                            </td>
                                                          </tr>
                                    
                                                          <tr >
                                                            <!-- <th scope="row">3</th> -->
                                                            <td colspan="1" ></td>
                                                            <td class="font-weight-bold">TOTAL ACREARAGE</td>
                                                            <td>170</td>
                                                            <td>100</td>
                                                            <td></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                    
                                                  <p class="card-text"></p>
                                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                                  <a href="addField.php" type="button" class="btn btn-primary">Add Field</a>
                                                </div>
                                              </div>
                                    
                                              
                                        </div>
                
                                    </div>
                
                                    <div class="col-md-6">
                
                                        <div class="col-lg-12">
                                            <div class="card fw-bold text-muted">
                                                <h3 class="card-header">Crops</h3>
                                                <div class="card-body">
                                                  <h5 class="card-title "></h5>
                                                
                                                  <table class="table table-striped text-muted fw-bold">
                                                    <thead>
                                                      <tr>
                                                        <!-- <th scope="col">#</th> -->
                                                        <th scope="col">Number</th>
                                                        <th scope="col">Field</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Total acrerage</th>
                                                        <th scope="col">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <!-- <th scope="row">1</th> -->
                                                        <td>1</td>
                                                        <td>North-west</td>
                                                        <td>Maize</td>
                                                        <td>50</td>
                                                        <td>
                                                            <a href="editCrop.php" type="button" class="btn btn-success">EDIT</a>
                                                            <a type="button" class="btn btn-danger">DELETE</a>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <!-- <th scope="row">2</th> -->
                                                        <td>2</td>
                                                        <td>South-East</td>
                                                        <td>Ground Nuts</td>
                                                        <td>30</td>
                                                        <td>
                                                            <a href="editCrop.php"type="button" class="btn btn-success">EDIT</a>
                                                            <a type="button" class="btn btn-danger">DELETE</a>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <!-- <th scope="row">3</th> -->
                                                        <td>3</td>
                                                        <td>Central</td>
                                                        <td>Pigeon peas</td>
                                                        <td>20</td>
                                                        <td>
                                                            <a href="editCrop.php" type="button" class="btn btn-success">EDIT</a>
                                                            <a type="button" class="btn btn-danger">DELETE</a>
                                                        </td>
                                                      </tr>
                                    
                                                      <tr >
                                                        <!-- <th scope="row">3</th> -->
                                                        <td colspan="1" ></td>
                                                        <td class="font-weight-bold">TOTAL ACREARAGE</td>
                                                        <td></td>
                                                        <td>100</td>
                                                        <td></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>  
                                    
                                                  <p class="card-text"></p>
                                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                                  <a href="addCrop.php"  class="btn btn-primary">Add Crop</a>
                                                </div>
                                              </div>
                                        </div>
                
                
                                    </div>
                
                                </div>
                


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>