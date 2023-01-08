@extends('admin.app.layout')

@section('title')
    <title>Field - Press Agriculture Limited</title>
@endsection

@section('content')
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3 bg-light">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Update Field</h3>

                        <form class="px-md-2" action="{{ route('admin.field.update', $field->id) }}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <label for="validationCustom01" class="form-label">Estate Name</label>
                                <select class="form-select" name='estates_id'>
                                    @foreach ($estates as $estate)
                                        <option value="{{ $estate->id }}" @selected($field->estates_id == $estate->id)>{{ $estate->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="validationCustom01" class="form-label">Location</label>

                                <select class="form-select" name='managers_id'>
                                    @foreach ($managers as $manager)
                                        <option value="{{ $manager->id }}" @selected($field->managers_id == $manager->id)>
                                            {{ $manager->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="validationCustom01" class="form-label">Area</label>

                                <input type="text" class="form-control" name="area" id="validationCustom01"
                                    value="{{ $field->area }}" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
