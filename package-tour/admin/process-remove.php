<?php
    include 'connect.php';
    $TAID = $_POST['TAID'];
 
    $conn = OpenCon();
    $sql = "delete from TravelAgency where TAID = '$TAID'";
    if ($conn->query($sql) === TRUE) 
    { 
    echo "Record remove successfully";
    } else {
    echo "Error removing record: " . $conn->error;
    }
?>