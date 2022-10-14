<?php
    include 'connect.php';
    //$TAID = $_POST['TAID'];
    // $PTLocation = $_POST['p.PTLocation'];
    // $PTPrice = $_POST['p.PTPrice'];
    $conn = OpenCon();
    $sql = "SELECT PTID, PTLocation, PTPrice, TAID, ResID FROM Manage_PackageTour1 WHERE PTPrice > 100" ;
    $result = $conn->query($sql);

    
    
        echo "<br>Result<br>";
        echo "<table>";
        echo "<tr><th> PTID </th><th>PTLocation</th><th>PTPrice</th><th>TAID</th><th>ResID</th>/tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->PTID . "</td><td>" . $row->PTLocation . "</td><td>" . $row->PTPrice ."</td><td>" . $row->TAID ."</td><td>" . $row->ResID ."</td></tr>" ; 
            }
        } else {
            echo 'No results';
        }
        echo "</table>";

?>

    