@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card border-0 o-hidden shadow-lg my-5">
                            <div class="card-header">
                                <h4>Edit Crop</h4>
                            </div>
                            <div class="card-body">
                                <form class="px-md-2">
                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">
                                            Name
                                        </label>

                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                            value="{{ $crop->name }}" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">Field</label>
                                        <select name="field_id" class="type form-control">
                                            @foreach ($fields as $field)
                                                <option value="{{ $field->id }}" @selected([$field->id == $crop->field_id])>
                                                    {{ $field->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">Acres</label>

                                        <input type="text" class="form-control" name="acres" id="validationCustom01"
                                            value="{{ $crop->acres }}" required />
                                    </div>
                                    <input type="submit" class="btn btn-success btn-lg mb-1" value="Update">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
