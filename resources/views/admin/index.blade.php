@extends('admin.app.layout')

@section('navbutton')
    <a href="{{route('admin.report.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Generate Report</a>
@endsection

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('breadcrumb')
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Requests
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                               {{$reqqs}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                 Pending delivery jobs
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{($out)}}
                                

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Delivery Job Completed
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                     {{ $complete}}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="
                                                                    width: 50%;
                                                                "
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                All Delivery Jobs
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jobs}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Bar Chart -->
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-2 bg-info">
                    <h3 class="m-0 font-weight-bold text-white">Monthly Requests</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>
                    
                </div>
            </div> 

         
        </div>


    <!-- Content Row -->
    <div class="row"></div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection

@section('scripts')



    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        var myModal = document.getElementById('myModal');
        var myInput = document.getElementById('myInput');

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus();
        });

        $('#stdModal').on('shown.bs.modal', function() {
            $('#stdModal').trigger('focus');
        });

        $(document).ready(function() {
            $('.data-table').DataTable();
        });
    </script>






    <script>
        /**doughnut chart**/

        /**const config = {
          type: 'doughnut',
          data: data,
        }; **/

        // var ctx1 = document.getElementById('dChart').getContext('2d');
        // var dChart = new Chart(ctx1, {
        //     type: 'doughnut',
        //     data: {

        //         labels: [
        //             'Mize',
        //             'Breans',
        //             'Groundnuts',
        //             'Soya Beans'
        //         ],
        //         datasets: [{
        //             label: 'My First Dataset',
        //             data: [300, 50, 100, 70],
        //             backgroundColor: [
        //                 'rgb(255, 99, 132)',
        //                 'rgb(54, 162, 235)',
        //                 'rgb(255, 205, 86)',
        //                 'rgb(159, 43, 104)',
        //             ],
        //             hoverOffset: 4
        //         }]
        //     }

        // });



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


    var _ydata =JSON.parse('{!! json_encode($months) !!}');
    var _xdata =JSON.parse('{!! json_encode($monthCount) !!}');

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: _ydata,
                datasets: [{
                    label: '# of Recived Requests',
                    data: _xdata,
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
                scales:{
                    xAxes: [{
                        time:{
                            unit:'month'
                        },
                    }]
                }
            }
        });

    </script>



@endsection
