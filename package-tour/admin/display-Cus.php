<?php
    include 'connect.php';
    $conn = OpenCon();
    $sql = "select * from Customer" ;
    
    $result = $conn->query($sql);

    
    echo "<table>";
    echo "<tr><th> Customer  </th><th>";
    echo "<tr><th> ID </th><th> Name </th><th> Email  </th></tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->CusID. "</td><td>" . $row->Name . "</td><td>" . $row->Email ."</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
    echo "</table>";
   
?>