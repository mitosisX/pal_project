@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('breadcrumb')
    Admin
@endsection

@section('navbutton')
    <a href="{{ route('admin.estate.manage', ['estate' => $estate->id]) }}"
        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>Back</a>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card border-0 o-hidden shadow-lg my-5">
                        <div class="card-header">
                            <h4>Create Field</h4>
                        </div>
                        <div class="card-body">

                            <form class="px-md-2" action="{{ route('admin.field.store') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">
                                        Name</label>

                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                        value="" required />

                                    <input type="text" class="form-control" name="estates_id" id="validationCustom01"
                                        value="{{ $estate->id }}" hidden />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Acres</label>

                                    <input type="number" class="form-control" name="area" id="validationCustom01"
                                        value="" required />
                                </div>

                                <input type="submit" class="btn btn-success btn-lg mb-1" value="Create">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
