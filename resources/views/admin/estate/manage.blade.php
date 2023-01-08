@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('navbutton')
    <a href="{{ route('admin.estate.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Back</a>
@endsection

@section('content')
    <div class="container-fluid px-4 pr-5">
        <div class="row g-3 my-2">
            <div class="col-md-6">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header d-inline">Fields</h3>
                        <div class="card-body">
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
                                    @foreach ($fields as $field)
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                    href="{{ route('admin.field.edit', ['field' => $field->id]) }}">{{ $field->name }}</a>
                                            </td>
                                            <td>{{ $field->area }}</td>
                                            <td>50</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div><a href="{{ route('admin.field.create', ['estate' => $estate->id]) }}" type="button"
                                    class="btn btn-primary">Add Field</a>
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                            href="#">Edit Field</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" href="#">Add Crop</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header">Crops</h3>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Number</th>
                                        <th scope="col">Field Name</th>
                                        <th scope="col">Crops</th>
                                        <th scope="col">Total acrerage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fields as $field)
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $field->name }}</td>
                                            <td>
                                                @foreach ($field->crops as $crop)
                                                    {{-- {{ $crop->field['name'] }} --}}
                                                    <a
                                                        href="{{ route('admin.crop.edit', ['field' => $field->id, 'crop' => $crop->id]) }}">{{ $crop->name }}</a>
                                                    <br>
                                                @endforeach
                                            </td>
                                            <td>50</td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="1"></td>
                                        <td class="font-weight-bold">TOTAL ACREARAGE</td>
                                        <td></td>
                                        <td>100</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="card-text"></p>

                            <div> <a href="{{ route('admin.crop.create', ['estate' => $estate->id]) }}" type="button"
                                    class="btn btn-primary">Add Crop</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 my-2">
            <div class="col-md-12">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-header">Estate Inventory</h3>
                        <div class="card-body">
                            <div class="tables-responsive">

                                <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="example_length"><label>Show <select
                                                name="example_length" aria-controls="example" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="" placeholder="" aria-controls="example"></label></div>
                                    <table id="example" class="table table-borderd data-table dataTable no-footer"
                                        style="width: 100%;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Item Name: activate to sort column descending"
                                                    style="width: 204px;">Item Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Item Type: activate to sort column ascending"
                                                    style="width: 186px;">Item Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Item Unit: activate to sort column ascending"
                                                    style="width: 178px;">Item Unit</th>
                                                <th class="sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Pakage Size: activate to sort column ascending"
                                                    style="width: 214px;">Pakage Size</th>
                                                <th class="sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Quantity: activate to sort column ascending"
                                                    style="width: 168px;">Quantity</th>
                                                <th class="sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Total: activate to sort column ascending"
                                                    style="width: 110px;">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>




                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Fertilizer</td>
                                                <td>23:21:0+41</td>
                                                <td>KG</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>1000</td>
                                                <!-- <td>$320,800</td> -->
                                                <!-- <td>$320,800</td> -->
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Pesticides</td>
                                                <td>RoundUp</td>
                                                <td>Ltrs</td>
                                                <td>5</td>
                                                <td>50</td>
                                                <td>250</td>
                                                <!-- <td>$170,750</td> -->
                                                <!-- <td>$170,750</td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                        Showing 1 to 2 of 2 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="example"
                                            data-dt-idx="0" tabindex="-1" id="example_previous">Previous</a><span><a
                                                class="paginate_button current" aria-controls="example" data-dt-idx="1"
                                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                                            aria-controls="example" data-dt-idx="2" tabindex="-1"
                                            id="example_next">Next</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Crop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3" action="{{ route('admin.crop.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="Field" class="form-label">Field</label>

                            <select type="name" class="form-control" name="fields_id">
                                @foreach ($fields as $field)
                                    <option value="{{ $field->id }}">{{ $field->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Acres</label>
                            <input type="text" class="form-control" name="acres" required>
                        </div>

                        <div class="col-md-6">
                            <label for="Field" class="form-label">Crop</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="Field" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" required>
                        </div>


                        <div class="col-md-6">

                        </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger" >delete</button> -->
                    <input type="submit" class="btn btn-primary" value="Save changes">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection
