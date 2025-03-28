<?php
include("../../pages/conn.php");



if(isset($_POST['input'])){
    $input = $_POST['input'];
    // $query = "SELECT * FROM `employees` WHERE frist_name LIKE'{$input}%'";
    $query ="SELECT * FROM `users` WHERE email_address LIKE '{$input}%'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){?>
      <span class="text-danger">Email Exist Found In </span>
    <?php
    }else{
           echo "<h6 class='text-danger text-center mt-3'>NOT FOUND</H6>";
    }
  
}

