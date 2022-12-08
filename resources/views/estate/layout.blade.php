<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <link rel="stylesheet" href= {{url('css/jquery-ui.css')}}>
     <link rel="stylesheet" href= {{url('css/all.min.css')}}>
     <link rel="stylesheet" href= {{url('css/bootstrap.min.css')}}>
     <link rel="stylesheet" href= {{url('css/bootstrap.css')}}>
     <link rel="stylesheet" href= {{url('css/fontawesome/css/all.min.css')}}>
     <link rel="stylesheet" href= {{url('css/dataTables.bootstrap5.css')}}>
     <link rel="stylesheet" href= {{url('css/tailwind.css')}} >
     <link rel="stylesheet" href= {{url('css/styles.css')}}>

   


      <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })



     </script>
    
  
    
    
    <title>Press Agriculture Limited</title>

</head>

<body>
 

<!-- First Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Submit Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                 

    <form action="" method="post">
      <div class="grid gap-6 mb-6 md:grid-cols-2">
              <div>
                  
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Item</label>
      <select id="select1" name="itemName" onchange="populate(this.id,'select2','select3', 'select4', 'select5')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected value="">Select Item</option>
        <option value="Fertilizer" >Fertilizer</option>
        <option value="Pestcides" >Pesticides</option>
        <option value="Seed" >Seeds</option>
        <!-- <option value="DE"></option> -->
      </select>
      
              </div>
      
              <div>
      <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Type</label>
      <select id="select2" name="itemType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        
      </select>
              </div>
    
              <div>
                  <label for="unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit Measure</label>
                  <select id="select3" name="unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </select>
              </div>
              <div>
                  <label for="unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Package size</label>
                  <select id="select4" name="packageSize" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </select>
              </div>
              <div>
                  <label for="crop" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Crop</label>
                  <select id="select5" name="select3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </select>
              </div>
              <div>
                  <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                  <input type="number" id="itemQuantity" name="itemQuantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
              </div>
          </div>   
          <div class="flex items-start mb-6">
              <div class="flex items-center h-5">
              <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
          </div>
          <!-- <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
       -->
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </form>
        
      </div>
    </div>
  </div>
</div>
    





      

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light py-6" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>PAL</div>
            <div class="list-group list-group-flush my-3 ">
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-success second-text active border-bottom"><i
                        class="fas fa-tachometer-alt me-2"></i>Profile</a>
                <a href="#"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom "><i
                        class="fas fa-project-diagram me-2" ></i>Submit Request</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-chart-line me-2"></i>Estate Inventory</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-paperclip me-2"></i>Crops</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-shopping-cart me-2"></i>Fields</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-gift me-2"></i>Crops</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold border-bottom"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-bottom"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4 border-bottom" >
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Estate 10 Dasboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-lg">Submit Request</button>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4 pr-5">
                
                
                 @yield('content')

               
            </div>






            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>


    <script src={{'js/jquery.min.js'}}></script>
    <script src={{'js/jquery.js'}}></script>
    <script src={{'js/jquery-ui.js'}}></script>
    <script src={{'js/bootstrap.bundle.js'}}></script>
    <script src={{'js/jquery.dataTables.min.js'}}></script>
    <script src={{'js/dataTables.bootstrap5.js'}}></script>
    <script src={{'js/bootstrap.js'}}></script>
    <script src={{'js/bootstrap.min.js'}}></script>
    <script src={{'js/bootstrap-modal.js'}}></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    <script>

        $('#stdModal').on('shown.bs.modal', function () {
            $('#stdModal').trigger('focus')
          })


    </script>
    
<script>$(document).ready(function () {
        $('.data-table').DataTable();
    });

</script>


<script>
  function populate(s1,s2,s3,s4,s5){
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);
      var s3 = document.getElementById(s3);
      var s4 = document.getElementById(s4);
      var s5 = document.getElementById(s5);
  
      s2.innerHTML = "";
      if(s1.value =="Fertilizer"){
          var optionArray = ["npk:23:21:0+4s | NPK:23:21:0+4s", "urea | Urea", "Phosphate|Phosphate","d-Compound|D-Compound"];
   
      }else if(s1.value =="Pestcides"){
          var optionArray = ["phostoxin | Phostoxin", "roundup | Roundup", "glyphosate|Glyphosate","karete|karate"];
   
      } else if(s1.value =="Seed"){
          var optionArray = ["g-nuts | Groundnuts-Seed", "soyabean | Soya Beans-Seed", "seedmaize|Seed maize","cmaize|Commecial Maize-Seed"];
     
      }
  
      for(var option in optionArray){
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value=pair[0];
          newOption.innerHTML=pair[1];
          s2.options.add(newOption);
  
      }
      
      s3.innerHTML = "";
  
      if(s1.value =="Fertilizer"){
          var optionArray = ["kg | Kg"];
   
      }else if(s1.value =="Pestcides"){
          var optionArray = ["litres | Litres"];
   
      } else if(s1.value =="Seed"){
          var optionArray = ["kg| Kg"];
     
      }
  
      for(var option in optionArray){
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value=pair[0];
          newOption.innerHTML=pair[1];
          s3.options.add(newOption);
  
      }
  
      s4.innerHTML = "";
  
      if(s1.value =="Fertilizer"){
          var optionArray = ["25 |25", "50|50"];
   
      }else if(s1.value =="Pestcides"){
          var optionArray = ["1 | 1", "5|5","10|10", "20|20"];
   
      } else if(s1.value =="Seed"){
          var optionArray = ["5|5", "10|10", "25|25"];
     
      }
  
      for(var option in optionArray){
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value=pair[0];
          newOption.innerHTML=pair[1];
          s4.options.add(newOption);
  
      }
  
      s5.innerHTML = "";
  
      if(s1.value =="Fertilizer"){
          var optionArray = ["Seed maize |Seed Maize", "Commercial maize|Commertial Maize"];
   
      }else if(s1.value =="Pestcides"){
          var optionArray = ["Seed Maize |Seed Maize", "Commercial Maize|Commertial Maize", "Groundnuts|Groundnuts", "Soya beans|Soya Beans"];
   
      } else if(s1.value =="Seed"){
          var optionArray = ["Seed Maize |Seed Maize", "Commercial Maize|Commertial Maize", "GroundNuts|Groundnuts", "Soya beans|Soya Beans"];
     
      }
  
      for(var option in optionArray){
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value=pair[0];
          newOption.innerHTML=pair[1];
          s5.options.add(newOption);
  
      }
  
  
  
  
  
  
  }
  
  </script>



</body>

</html>