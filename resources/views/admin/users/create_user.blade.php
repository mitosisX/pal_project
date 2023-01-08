@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('breadcrumb')
    Admin
@endsection

@section('navbutton')
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>
        Create User</a>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card border-0 o-hidden shadow-lg my-5">
                        <div class="card-header">
                            <h4>Create New User</h4>
                        </div>
                        <div class="card-body">

                            <form class="px-md-2">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">First
                                        Name</label>

                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Last
                                        Name</label>

                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Phone
                                        number</label>

                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Role</label>
                                    <select name="type" class="type form-control">
                                        <option>Manager</option>
                                        <option>E-Manager</option>
                                        <option>WareHouse</option>
                                        <option>Driver</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Password</label>

                                    <input type="text" class="form-control" name="name" id="validationCustom01"
                                        value="" required />
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
