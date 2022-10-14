<?php
    include 'connect.php';
    $conn = OpenCon();
    $sql = "select * from Manage_PackageTour1" ;
    
    $result = $conn->query($sql);

    
    echo "<table>";
    echo "<tr><th> Package Tour </th><th>";
    echo "<tr><th> ID </th><th>Location </th><th>Price </th><th>Reservation_ID </th><th>Agency_ID </th></tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->PTID. "</td><td>" . $row->PTLocation . "</td><td>" . $row->PTPrice 
                . "</td><td>" . $row->ResID . "</td><td>" . $row->TAID . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
    echo "</table>";
   
?>