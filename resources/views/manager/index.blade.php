@extends('manager.app.layout')

@section('content')
    <div class="row g-3 my-2">
        <div class="col-md-6">

            <div class="col-lg-12">
                <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5">
                    <h3 class="card-header text-white bg-info">Fields</h3>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-justify-center"> </h4>
                        <table class="table fw-bold text-muted">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">#</th> -->
                                    <th scope="col">Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Acres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estates as $estate)
                                    @foreach ($estate->fields as $field)
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>{{ $loop->parent->iteration }}</td>
                                            <td>{{ $field->name }}</td>
                                            <td>{{ $field->area }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>

                        <p class="card-text"></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-lg-12">
                <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5">
                    <h3 class="card-header text-white bg-info">Crops</h3>
                    <div class="card-body">
                        <h5 class="card-title "></h5>

                        <table class="table text-muted fw-bold">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">#</th> -->
                                    <th scope="col">Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Field</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estates as $estate)
                                    @foreach ($estate->crops as $crop)
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>{{ $loop->parent->iteration }}</td>
                                            <td>{{ $crop['name'] }}</td>
                                            <td>{{ $crop->field['name'] }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        <p class="card-text"></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row g-3 my-2">
        <div class="col-md-12">
            <div class="col-lg-12">
                <div class="card fw-bold text-muted border-0 o-hidden shadow-lg my-5">
                    <h3 class="card-header bg-info text-white">MY Requets</h3>
                    <div class="card-body">
                        <div class="tables-responsive shadow-4 ">

                            <table id="example" class="table data-table fw-bold text-muted" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Request Date</th>
                                        <th>Item Type</th>
                                        <th>Item Unit</th>
                                        <th>Quantity</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $request)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $request->product['name'] }}</td>
                                            <td>{{ $request->created_at }}</td>
                                            <td>{{ $request->productType['name'] }}</td>
                                            <td>{{ $request->unit['name'] }}</td>
                                            <td>{{ $request->quantity }}</td>
                                            <td>
                                                @if ($request->status === 'pending')
                                                    <button type="button" class="btn btn-outline-warning ">Pending</button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-outline-success ">Accepted</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
