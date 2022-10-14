<?php
    include 'connect.php';
    $conn = OpenCon();
    $sql = "select * from TravelAgency" ;
    
    $result = $conn->query($sql);

    
    echo "<table>";
    echo "<tr><th> Travel Agency </th><th>";
    echo "<tr><th> ID </th><th>Name </th><th>Email </th><th>Address </th><th>Phone_Number </th></tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->TAID. "</td><td>" . $row->Name . "</td><td>" . $row->Email 
                . "</td><td>" . $row->Address . "</td><td>" . $row->PhoneNum . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
    echo "</table>";
   
?>