<?php
include "../../pages/conn.php";
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sqluser = "SELECT * FROM users WHERE user_id = '$user_id'";
// result for table user 

$result2 = $conn->query($sqluser);


  while($row2 = $result2->fetch_array()){
 $first_name = $row2[1] ;
 $last_name =$row2[2];
 $email= $row2[4];
 $phone_number= $row2[5];
 $password= $row2[3];






?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Sample Page | Berry Dashboard Template</title>
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
    <link rel="icon" href="../../assets/images/favicon.svg" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../../assets/fonts/phosphor/duotone/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../../assets/css/style-preset.css" />

<!-- for the icon boost  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<!-- end foe  -->

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
           
          
              <h5 class="my-4 d-flex justify-content-center">Update User </h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="firtname" value="<?php echo $first_name?>" />
                    <label for="floatingInput">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput1" placeholder="Last Name" value ="<?php echo $last_name?>" name="lastname"  />
                    <label for="floatingInput1">Last Name</label>
                  </div>
                </div>
              </div>
             
              <div class="form-floating mb-3">
                <input type="phone" class="form-control" id="floatingInput2" placeholder="Phone Number" value="<?php echo $phone_number?>" name="phonenumber"/>
                <label for="floatingInput2">Phone Number</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput2" placeholder="Email Address / Username" value="<?php echo $email?>" name="email" />
                <label for="floatingInput2">Email Address </label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput3" placeholder="Password" value ="<?php echo $password?>" name="password" />
                <label for="floatingInput3">Password</label>
              </div>
             
              
              
              <div class="d-grid mt-4">
                <button type="submit" name="submit" class="btn btn-secondary p-2">Update </button>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
     <!-- Required Js -->
<script src="../../assets/js/plugins/popper.min.js"></script>
<script src="../../assets/js/plugins/simplebar.min.js"></script>
<script src="../../assets/js/plugins/bootstrap.min.js"></script>
<script src="../../assets/js/icon/custom-font.js"></script>
<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/theme.js"></script>
<script src="../../assets/js/plugins/feather.min.js"></script>

       
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


// for display data in form 
}





}

// end for dispalay data

if (isset($_POST['submit'])){
  $firt_name = $_POST['firtname'];
  $last_name = $_POST['lastname'];
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];
  // pass word hide 
 $pass_hash = sha1($user_password);
  $phone_number = $_POST['phonenumber'];

  // $sql = "INSERT INTO users ( first_name, last_name, password, email_address, phone_number) VALUES ( '$firt_name', '$last_name', '$user_password', '$user_email', '$phone_number')";
  $sql = "UPDATE users SET first_name = ? , last_name = ? , password = ? , email =? , phone_number =? WHERE user_id = ?;";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssi",$firt_name,$last_name,$pass_hash,$user_email,$phone_number,$user_id);

  if($stmt->execute()){
  // echo"user registered  succes fully!";
     echo "<script>window.location ='../users.php'</script>";     // to link form one to other 
  }else{
    echo"Error:".$stmt->error;
  }
  

  $conn->close();

}



?>






