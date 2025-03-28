<?php
include "../../pages/conn.php";
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    // delete table 
    $sqldelete= "DELETE FROM `maintenance` WHERE maintenance_id =?";
    $stmt = $conn->prepare($sqldelete);
    $stmt ->bind_param("i",$user_id);

    if($stmt->execute()){
        echo "<script>alert('User deleted successfully!'); window.location.href='../mentainace.php';</script>";
    
    }else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();


}

?>