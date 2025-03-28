<?php
include("../pages/conn.php");
session_start();




?>


<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>SignUp | Driver Trip</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/bus.png" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->
<form action="<?php $_PHP_SELF ?>" method="post">
    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card mt-5">
            <div class="card-body">
              <a href="#" class="d-flex justify-content-center mt-3">
              <img src="../assets/images/bus.png" alt="" class="logo " height="50px"  width="50px"/> <b>Driver Trip</b> 
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-5"><b>Register Vehicles</b></h2>
                    <p class="f-16 mt-2">Enter the trip detail  to continue</p>
                  </div>
                </div>
              </div>
     
              <div class="row">
              <div class="col-md-6">
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput2" placeholder="Email Address / Username" name="platenumber"/>
                    <label for="floatingInput2">Plate Number</label>
                    
                 </div>
               </div>
               <div class="col-md-6">
                    <div class="form-floating mb-3">
                    <select class="form-control" id="floatingSelect" name="vehicletype">
                         <option value="" selected disabled>Select Vehicle Type</option>
                          <option value="Truck">Truck</option>
                          <option value="Bus">Bus</option>
                          <option value="Minibus">Minibus</option>
                          <option value="Taxi">Taxi</option>
                         </select>
                     <label for="floatingSelect">Vehicle Type </label>
                   </div>
               </div>

               
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput2" placeholder="Email Address / Username" name="vehiclemodel"/>
                <label for="floatingInput2">Vehicle  Model</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput2" placeholder="Email Address / Username" name="vehicleYear"/>
                <label for="floatingInput2">Vehicle Year</label>
              </div>
          
              <!-- [by default status is availabel] -->
            
              
              <div class="d-grid mt-4">
                <button type="submit" name="submit" class="btn btn-secondary p-2">Register </button>
              </div>
              <hr />
              <h5 class="d-flex justify-content-center"> click here go back ?
               <!-- <a onclick="goBackOrHome()" class="">Go Back</a> -->
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/icon/custom-font.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>

       
    <script>
      layout_change('light');
    </script>
       
    <script>
      font_change('Roboto');
    </script>
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
       
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
    <script>

    </script>

  </body>
  <!-- [Body] end -->
</html>

<?php


if (isset($_POST['submit'])){
  $plate_number= $_POST['platenumber'];
  $vehicle_type = $_POST['vehicletype'];
  $vehicle_model = $_POST['vehiclemodel'];
  $vehicl_eyear = $_POST['vehicleYear'];
  $status = "available";

  $sql = "INSERT INTO vehicle(plate_number , vehicle_type , model , year , status) VALUES(?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss",$plate_number,$vehicle_type,$vehicle_model,$vehicl_eyear,$status);

 if($stmt->execute()){
  echo "<script>window.location = './index.php'</script>";
 }else{
  echo "Error:".$stmt->error;
 }
  

}



?>
