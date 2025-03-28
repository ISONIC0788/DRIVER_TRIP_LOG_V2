<?php
 include "conn.php";
 session_start();

?>



<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Login | Trip Log system</title>
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
<form action="<?php $_PHP_SELF ?>" method="POST">
    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <a href="../" class="d-flex justify-content-center">
              <img src="../assets/images/bus.png" alt="" class="logo " height="50px"  width="70px"/> <b>Driver Trip</b> 
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-5"><b>Hi, Welcome Back</b></h2>
                    <p class="f-16 mt-2">Enter your credentials to continue</p>
                  </div>
                </div>
              </div>
              <div class="d-grid">
                <button type="button" class="btn mt-2 bg-light-primary bg-light text-muted">
                  <img src="../assets/images/authentication/google-icon.svg" alt="image" />Sign In With Google
                </button>
              </div>
              <div class="saprator mt-3">
                <span>or</span>
              </div>
              <h5 class="my-4 d-flex justify-content-center">Sign in with Email address</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="useremail" id="floatingInput" placeholder="Email address / Username" />
                <label for="floatingInput">Email address / Phone number</label>
              </div>
              <div class="form-floating mb-3">
                 <select class="form-control" id="floatingInput" name="userrole">
                      <option value="" disabled selected>Select Option</option>
                      <option value="admin">Admin</option>
                      <option value="driver">Driver</option>
                      <option value="financial">Financial</option>
                  </select>
              <label for="floatingInput">Choose Login Method</label>
           </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="userpassword"  id="floatingInput1" placeholder="Password"  />
                <label for="floatingInput1">Password</label>
              </div>
              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                  <label class="form-check-label text-muted" for="customCheckc1">Remember me</label>
                </div>
                <h5 class="text-secondary">Forgot Password?</h5>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-secondary">Sign In</button>
              </div>
              <hr />
              <h5 class="d-flex justify-content-center">Don't have an account? </h5>
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


if($_SERVER['REQUEST_METHOD'] == "POST"){
     $username = $_POST['useremail'];
     $password = $_POST['userpassword'];
     $userrole = $_POST['userrole'];
     $passhash = sha1($password);

     $sql = "SELECT users.user_id, users.password,users.first_name, roles.role_name 
            FROM users 
            INNER JOIN user_roles ON users.user_id = user_roles.user_id 
            INNER JOIN roles ON roles.role_id = user_roles.role_id 
            WHERE users.email = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("s",$username);
     $stmt->execute();

     $result  = $stmt->get_result();

     if($row = $result ->fetch_assoc()){
      // for password verfying 
       if($passhash == $row["password"] ){   // password_verify($password , $row["password"])
        // assgining variable to the session 
        $_SESSION['user_id']= $row['user_id'];
        $_SESSION['role']= $row['role_name'];
        $_SESSION['email']= $username;   // phone number or email 
        $_SESSION['username']= $row['first_name'];

        if($row['role_name']=='admin'){
            //  for redicting admin to admin dashboard 
            // header("Location: ../dashboard/index.html");
            echo "<script>window.location ='../dashboard/index.php'</script>";

        }else if($row['role_name']=='financial'){
            //  for redicting  financial dashboard 
          echo "<script>window.location ='../request/'</script>";

        }else {   // if($row['role_name']=='driver')
          //  for redicting  driver dashboard 
          // echo "<script>window.location ='../dashboard/index.html'</script>";
          echo "<script>window.location ='../request/'</script>";
        }




      
        }else{
          echo "<div class='card'> <span class='btn  btn-danger'> password is incorrect</span> </div> ";
        }

           
     }else{
      echo "<div class='card'> <span class='danger'>Invalid email <a href='register-v3.php'> here</a> </span> </div> ";
     }



    //  echo $passhash;
    $conn->close();

}


?>
