<?php
    include 'connect.php';
    //$TAID = $_POST['TAID'];
    // $PTLocation = $_POST['p.PTLocation'];
    // $PTPrice = $_POST['p.PTPrice'];
    $conn = OpenCon();
    $sql = "select Name AS Agency_Name, TAID AS Agency_ID from  TravelAgency"  ;
    $result = $conn->query($sql);

    
    
        echo "<br>Result<br>";
        echo "<table>";
        echo "<tr><th> Agency_Name </th><th>Agency_ID </th>/tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->Agency_Name . "</td><td>" . $row->Agency_ID . "</td><td>" ; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";

?>

    