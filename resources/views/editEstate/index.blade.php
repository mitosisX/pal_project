@extends('editEstate.layout')

@section('content')
<div class="row g-3 my-2">
    <div class="col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header d-inline">Fields</h3>
                <div class="card-body">
                    <h4 class="card-title border-bottom border-top p-1 font-weight-bold text-justify-center" > </h4>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Total Acrerage</th>
                            <th scope="col">Acres in use</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <!-- <th scope="row">1</th> -->
                            <td>1</td>
                            <td>North-west</td>
                            <td>70</td>
                            <td>50</td>
                          </tr>
                          <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>2</td>
                            <td>South-East</td>
                            <td>50</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <!-- <th scope="row">3</th> -->
                            <td>3</td>
                            <td>Central</td>
                            <td>50</td>
                            <td>20</td>
                          </tr>

                          <tr >
                            <!-- <th scope="row">3</th> -->
                            <td colspan="1" ></td>
                            <td class="font-weight-bold">TOTAL ACREARAGE</td>
                            <td>170</td>
                            <td>100</td>
                          </tr>
                        </tbody>
                      </table>

              
                <div> <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Field</a> 
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Edit Field</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#">Add Crop</a></li>
                    <li><a class="dropdown-item" href="#"></a></li>
                  </ul>
                 </div>
                </div>
              </div>

              
        </div>


    </div>

    <div class="col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header">Crops</h3>
                <div class="card-body">
                    <h4 class="card-title border-bottom border-top p-1 font-weight-bold text-justify-center" > </h4>
                    
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">Number</th>
                            <th scope="col">Field Name</th>
                            <th scope="col">Crop</th>
                            <th scope="col">Total acrerage</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <!-- <th scope="row">1</th> -->
                            <td>1</td>
                            <td>North-west</td>
                            <td>Maize</td>
                            <td>50</td>
                          </tr>
                          <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>2</td>
                            <td>South-East</td>
                            <td>Ground Nuts</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <!-- <th scope="row">3</th> -->
                            <td>3</td>
                            <td>Central</td>
                            <td>Pigeon peas</td>
                            <td>20</td>
                          </tr>

                          <tr >
                            <!-- <th scope="row">3</th> -->
                            <td colspan="1" ></td>
                            <td class="font-weight-bold">TOTAL ACREARAGE</td>
                            <td></td>
                            <td>100</td>
                          </tr>
                        </tbody>
                      </table>  

                  <p class="card-text"></p>

                  <div> <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Add Crop</a> </div>
                </div>
              </div>

              
        </div>


    </div>

</div>




<div class="row g-3 my-2">
    <div class="col-md-12">
        <div class="col-lg-12">
            <div class="card">
                <h3 class="card-header">Estate Inventory</h3>
                <div class="card-body">
                   <div class="tables-responsive">

                    <table id="example" class="table table-borderd data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Item Type</th>
                                <th>Item Unit</th>
                                <th>Pakage Size</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <!-- <th>Crop to be used</th> -->
                                <!-- <th>Request Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fertilizer</td>
                                <td>23:21:0+41</td>
                                <td>KG</td>
                                <td>50</td>
                                <td>20</td>
                                <td>1000</td>
                                <!-- <td>$320,800</td> -->
                                <!-- <td>$320,800</td> -->
                            </tr>
                            <tr>
                                <td>Pesticides</td>
                                <td>RoundUp</td>
                                <td>Ltrs</td>
                                <td>5</td>
                                <td>50</td>
                                <td>250</td>
                                <!-- <td>$170,750</td> -->
                                <!-- <td>$170,750</td> -->
                            </tr>
                            
                        </tfoot>
                    </table>


                   </div>
                </div>
              </div>

              
        </div>


    </div>

    

</div>
@endsection('content')