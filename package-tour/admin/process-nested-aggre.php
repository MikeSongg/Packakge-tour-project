<?php
    include 'connect.php';
  
    $conn = OpenCon();
    $sql = "select PTLocation, avg(PTPrice) as average_price from Manage_PackageTour1 group by PTLocation"  ;
    $result = $conn->query($sql);

    
    
        echo "<br>Result<br>";
        echo "<table>";
        echo "<tr><th> PTLocation </th><th> average_price</th>/tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo  "<tr><td>" . $row->PTLocation . "</td><td>" . $row->average_price . "</td><td>" ; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";

?>

    