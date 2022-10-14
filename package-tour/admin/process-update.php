<?php
    include 'connect.php';
    $TAID = $_POST['TAID'];
    $Address = $_POST['Address'];
    $conn = OpenCon();
    $sql = "update TravelAgency set Address = '$Address' where TAID = '$TAID'";
    if ($conn->query($sql) === TRUE) 
    { 
    echo "Record updatedsuccessfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
?>
