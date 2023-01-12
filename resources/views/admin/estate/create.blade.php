@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('breadcrumb')
    Admin
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card border-0 o-hidden shadow-lg my-5">
                        <div class="card-header bg-info text-white">
                            <h4>Create Estate</h4>
                        </div>
                        <div class="card-body">

                            <form class="px-md-2" action="{{ route('admin.estate.store') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Estate Name</label>

                                    <input type="text" class="form-control" name="name" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Estate Location</label>

                                    <input type="text" class="form-control" name="location" value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Estate
                                        Manager</label>
                                    <select name="managers_id" class="type form-control">
                                        @foreach ($managers as $manager)
                                            <option value="{{ $manager->id }}">{{ $manager->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success btn-lg mb-1">
                                    Create
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
