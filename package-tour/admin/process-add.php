<?php
    include 'connect.php';
    $CusID = $_POST['CusID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
 
    $conn = OpenCon();
    $sql = "Insert Into Customer Values ('$CusID', '$Name', '$Email')";
    if ($conn->query($sql) === TRUE) 
    { 
    echo "Record add successfully";
    } else {
    echo "Error adding record: " . $conn->error;
    }
?>