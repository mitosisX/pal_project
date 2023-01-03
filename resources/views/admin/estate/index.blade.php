@extends('admin.app.layout')

@section('title')
    <title>Press Agriculture Limited</title>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card border-0 o-hidden shadow-lg my-5">
                        <div class="card-header">
                            <h4>Manage Estate</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Manager</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estates as $estate)
                                        <tr>
                                            <th scope="row">{{ $loop->index += 1 }}</th>
                                            <td>{{ $estate->name }}</td>
                                            <td>{{ $estate->manager['name'] }}</td>
                                            <td>{{ $estate->location }}</td>
                                            <td>
                                                <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.estate.manage', ['estate' => $estate->id]) }}"
                                                        class="btn btn-icon btn-success"><i class="far fa-eye"></i></a>
                                                    <a href="{{ route('admin.estate.edit', ['estate' => $estate->id]) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="far fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
