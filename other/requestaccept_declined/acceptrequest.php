<?php
include "../../pages/conn.php";
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    // delete table 
    $sqldelete= "UPDATE request_for_trip SET status = 'approved' WHERE request_id = $user_id ";
    $stmt = $conn->prepare($sqldelete);
    $stmt ->bind_param("i",$user_id);

    if($stmt->execute()){
        echo "<script>alert('Approved Requested  successfully!'); window.location.href='../viewrequestfortrips.php';</script>";
    
    }else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();


}

?>