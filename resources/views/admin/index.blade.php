@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('content')
    <div class="row g-3 my-2">
        <div class="col-md-12">
            <div class="col-lg-12">
                <div class="card">
                    <h3 class="card-header text-muted fw-bold">Requests</h3>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-justify-center"> </h4>
                        <table id="example" class="table table-striped data-table fw-bold text-muted" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Request Date</th>
                                    <th>Estate</th>
                                    <th>Item Type</th>
                                    <th>Item Unit</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NPK</td>
                                    <td>08-11-2022</td>
                                    <td>Estate 47</td>
                                    <td>Fertilizer</td>
                                    <td>KG</td>
                                    <td>320,800</td>
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
                    <h3 class="card-header me-2 text-secondary"><i class="fas fa-chart-bar"></i> CROPS IN THE FIELD</h3>
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
                    <h3 class="card-header  me-2 text-secondary"><i class="fas fa-chart-bar"></i> REQUESTS APPROVED MONTHLY
                    </h3>
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


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">SELECT ESTATE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="list-group fw-bold text-muted">
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE
                            10</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE
                            21</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE
                            35</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE
                            7</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">ESTATE
                            19</a>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="create_estate_modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">CREATE ESTATE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Modal 1 form -->

                    <form class="row g-3 needs-validation" action="{{ route('admin.estate.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Estate Name</label>
                            <input type="text" class="form-control" name='name' id="validationCustom01"
                                value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Location</label>
                            <input type="text" class="form-control" name='location' id="validationCustom02"
                                value="" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    {{-- <button class="btn btn-primary" type="submit" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button> --}}

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="create_field_modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Add Manager to Estate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- modal 2 form -->

                    <form class="row g-3 needs-validation" action="{{ route('admin.field.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Area</label>
                            <input type="text" class="form-control" name='area' id="validationCustom02"
                                value="" required>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Estates</label>
                            <select class="form-select" name="estates_id" required>
                                @foreach ($estates as $estate)
                                    <option value="{{ $estate->id }}">{{ $estate->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Managers</label>
                            <select class="form-select" name='managers_id'>
                                @foreach ($managers as $manager)
                                    <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                @endforeach
                                <input type="text" name="managers_id" value="1" hidden>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- ADD PRODUCT MODAL --}}

    <!-- Modal -->
    <div class="modal fade fw-bold text-muted" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- PRODUCT LIST MODAL --}}

    <div class="modal fade" id="addedProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-muted" id="staticBackdropLabel">PRODUCTS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group fw-bold text-muted">
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">FERTILIZER</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">CHEMICALS</a>
                        <a href="#"
                            class="list-group-item list-group-item-action  border-bottom fw-bold text-muted">SEEDS</a>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

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
@endsection
