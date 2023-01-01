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
                                <h4>Edit Estate</h4>
                            </div>
                            <div class="card-body">
                                <form class="px-md-2" action="{{ route('admin.estate.update', ['estate' => $estate->id]) }}">
                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">Name</label>

                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                            value="{{ $estate->name }}" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">Field</label>
                                        <select name="managers_id" class="type form-control">
                                            @foreach ($managers as $manager)
                                                <option value="{{ $manager->id }}" @selected([$manager->id == $estate->managers_id])>
                                                    {{ $manager->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="validationCustom01" class="form-label">Location</label>

                                        <input type="text" class="form-control" name="location"
                                            value="{{ $estate->location }}" required />
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
