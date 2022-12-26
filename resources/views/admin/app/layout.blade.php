<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href={{ asset('css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/jquery-ui.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/dataTables.bootstrap5.css') }}>
    <link rel="stylesheet" href={{ asset('css/graph.css') }}>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>

    @yield('title')
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-tractor me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#"
                    class="list-group-item list-group-item-action bg-transparent text-success second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-chart-line me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-truck-loading me-2"></i>Delivery Jobs</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#addedProduct"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4 border-bottom">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-muted fw-bold">Admin</h2>
                </div>

                <div class="dropdown position-absolute start-50">
                    <button class="btn btn-light dropdown-toggle btn-lg" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <a class=" nav-link text-muted fw-bold "> <i class="fas fa-tasks "></i> Admin Tasks</a>

                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active fw-bold" href="#">Action</a></li>
                        <li><a class="dropdown-item fw-bold" data-bs-toggle="modal" href="#create_estate_modal"
                                role="button">Create Estate</a></li>
                        <li><a class="dropdown-item fw-bold" href="#create_field_modal" data-bs-toggle="modal">Create
                                Field</a></li>
                        <li><a class="dropdown-item fw-bold" href="#" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Manage Estate</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Manage User</a></li>
                        <li><a class="dropdown-item fw-bold" href="#" data-bs-toggle="modal"
                                data-bs-target="#addProduct">Add Product</a></li>
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

    <script src={{ 'js/jquery-3.6.1.min.js' }}></script>
    <script src={{ 'js/jquery.min.js' }}></script>
    <script src={{ 'js/jquery.js' }}></script>
    <script src={{ 'js/jquery-ui.js' }}></script>
    <script src={{ 'js/bootstrap.bundle.js' }}></script>
    <script src={{ 'js/bootstrap.bundle.min.js' }}></script>
    <script src={{ 'js/jquery.dataTables.min.js' }}></script>
    <script src={{ 'js/dataTables.bootstrap5.js' }}></script>
    <script src={{ 'js/bootstrap.js' }}></script>
    <script src={{ 'js/bootstrap.min.js' }}></script>
    <script src={{ 'js/bootstrap-modal.js' }}></script>

    <script src={{ 'js/chart.js' }}></script>
    <script src={{ 'js/bar.js' }}></script>

    @yield('scripts')

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        $('#stdModal').on('shown.bs.modal', function() {
            $('#stdModal').trigger('focus');
        });

        var myModal = document.getElementById('myModal');
        var myInput = document.getElementById('myInput');

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus();
        });
    </script>
</body>

</html>
