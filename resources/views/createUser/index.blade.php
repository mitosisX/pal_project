@extends('createUser.layout')

@section('content')

  
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3 bg-light">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Create User</h3>

            <form class="px-md-2 ">

              <div class="form-outline mb-4">
                <label for="validationCustom01" class="form-label">First Name</label>
    
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
              
              </div>

              <div class="form-outline mb-4">
                <label for="validationCustom01" class="form-label">Last Name</label>
    
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
              
              </div>

              <div class="form-outline mb-4">
                <label for="validationCustom01" class="form-label">Phone number</label>
    
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
              
              </div>

              <div class="form-outline mb-4">
                <label for="validationCustom01" class="form-label">Role</label>
    
                <select  name="type" class="type form-select">
                  <option ></option>
                  <option value="Estate Manager">E-Manager</option>
                  <option value="WareHouse Manager">WareHouse Manager</option>
                  <option value="Driver">Driver</option>
                </select>
              
              </div>

              <div class="form-outline mb-4">
                <label for="validationCustom01" class="form-label">Password</label>
    
                <input type="text" class="form-control" name="name" id="validationCustom01" value="" required>
              
              </div>

              
              <button type="submit" class="btn btn-success btn-lg mb-1">Create</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

    


@endsection('content')