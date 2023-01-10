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
    @if (session('account-created'))
        @section('scripts')
            <script>
                new swal("Done!",
                    "Account was created",
                    "success");
            </script>
        @endsection
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card border-0 o-hidden shadow-lg my-5">
                        <div class="card-header">
                            <h4>Create New User</h4>
                        </div>
                        <div class="card-body">
                            <form class="px-md-2" action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">First
                                        Name</label>

                                    <input type="text" class="form-control" name="first_name" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Last
                                        Name</label>

                                    <input type="text" class="form-control" name="last_name" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Phone
                                        number</label>

                                    <input type="text" class="form-control" name="phone_number" id="validationCustom01"
                                        value="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Role</label>
                                    <select name="role" class="type form-control">
                                        <option value="manager">Manager</option>
                                        <option value="e-manager">E-Manager</option>
                                        <option value="w-manager">WareHouse Manager</option>
                                        <option value="driver">Driver</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="validationCustom01" class="form-label">Password</label>

                                    <input type="text" class="form-control" name="password" id="validationCustom01"
                                        value="passpass" readonly required />
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
