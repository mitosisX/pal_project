@extends('manager.app.layout')


@section('content')
<div class="row g-3 my-2">
                    <div class="col-md-6">

                        <div class="col-lg-12">
                            <div class="card fw-bold text-muted">
                                <h3 class="card-header">Fields</h3>
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold text-justify-center" > </h4>
                                    <table class="table table-striped fwobold text-muted">
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
                    
                                  <p class="card-text"></p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                              </div>
                    
                              
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="col-lg-12">
                            <div class="card fw-bold text-muted">
                                <h3 class="card-header">Crops</h3>
                                <div class="card-body">
                                  <h5 class="card-title "></h5>
                                
                                  <table class="table table-striped text-muted fw-bold">
                                    <thead>
                                      <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Field</th>
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
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                              </div>
                        </div>


                    </div>

                </div>

                <div class="row g-3 my-2">
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <div class="card fw-bold text-muted">
                                <h3 class="card-header">MY Requets</h3>
                                <div class="card-body">
                                   <div class="tables-responsive">
                
                                    <table id="example" class="table table-striped data-table fw-bold text-muted" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Request Date</th>
                                                <th>Item Type</th>
                                                <th>Item Unit</th>
                                                <th>Package size</th>
                                                <th>Quantity</th>
                                                <th>Crop to be used</th>
                                                <th>Request Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <td><button type="button" class="btn btn-warning ">pending</button></td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                                <td>$170,750</td>
                                                <td><button type="button" class="btn btn-success  ">approved</button></td>
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