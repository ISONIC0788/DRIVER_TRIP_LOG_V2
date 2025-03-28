<?php
include("../pages/conn.php");
session_start();
?>


<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>SignUp | Berry Dashboard Template</title>
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
<!-- [ajax live ] -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
       

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
                    <h2 class="text-secondary mt-5"><b>Register User </b></h2>
                    <p class="f-16 mt-2">Enter correct information Abaut User</p>
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="firtname" />
                    <label for="floatingInput">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput1" placeholder="Last Name" name="lastname" />
                    <label for="floatingInput1">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput2 TypeSearch" placeholder="Email Address / Username" name="email" />
                <label for="floatingInput2">Email Address </label>
              </div>
              <div id="searchresult">

              </div>
                <!-- live time search email avaialable  -->
          
              <!-- [use link fo ajax ] -->
               <!-- [] -->
               <!-- <script>
    $(document).ready(function (){
        $('#floatingInput2').keyup(function (){
          var input  = $(this).val();
          alert(input);
          if(input!=""){
            //  $.ajax({
            //   url:"./realtimevalidation/email.php",
            //   method:"POST",
            //   data={input:input},
            //   success:function (data){
            //     $('#searchresult').html(data);
            //   }

            //  });
            console.log(input);
          }
        
        });
    }); -->
               </script>

              <!-- [end for live searchr for email] -->
              <div class="form-floating mb-3">
                <input type="phone" class="form-control" id="floatingInput2" placeholder="Email Address / Username" name="phonenumber"/>
                <label for="floatingInput2">Phone Number</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput3" placeholder="Password" name="password" />
                <label for="floatingInput3">Password</label>
              </div>
              <div class="form-check mt-3s">
                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                <label class="form-check-label" for="customCheckc1">
                  <span class="h5 mb-0">Agree with <span>Terms & Condition.</span></span>
                </label>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" name="submit" class="btn btn-secondary p-2">Sign Up</button>
              </div>
              <hr />
              <h5 class="d-flex justify-content-center">Already have an account?</h5>
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

  
    
    

  </body>
  <!-- [Body] end -->
</html>

<?php

if (isset($_POST['submit'])){
  $firt_name = $_POST['firtname'];
  $last_name = $_POST['lastname'];
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];
  // pass word hide 
 $pass_hash = sha1($user_password);
  $phone_number = $_POST['phonenumber'];

  // $sql = "INSERT INTO users ( first_name, last_name, password, email_address, phone_number) VALUES ( '$firt_name', '$last_name', '$user_password', '$user_email', '$phone_number')";
  $sql = "INSERT INTO users ( first_name, last_name, password, email, phone_number) VALUES (?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss",$firt_name,$last_name,$pass_hash,$user_email,$phone_number);

  if($stmt->execute()){
  // echo"user registered  succes fully!";
     echo "<script>window.location ='index.php'</script>";     // to link form one to other 
  }else{
    echo"Error:".$stmt->error;
  }
  

  $conn->close();

}



?>
