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
                    <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5 ">
                        <h3 class="card-header d-inline bg-info text-white">Fields</h3>
                        <div class="card-body ">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total Acreage</th>
                                        
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
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div><a href="{{ route('admin.field.create', ['estate' => $estate->id]) }}" type="button"
                                    class="btn btn-primary">Add Field</a>
                               
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
                    <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5 ">
                        <h3 class="card-header bg-info text-white">Crops</h3>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Number</th>
                                        <th scope="col">Field Name</th>
                                        <th scope="col">Crops</th>
                                        <th scope="col">Total acreage</th>
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

                                    {{-- <tr>
                                        <td colspan="1"></td>
                                        <td class="font-weight-bold">TOTAL ACREARAGE</td>
                                        <td></td>
                                        <td>100</td>
                                    </tr> --}}
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
