<?php
    include 'connect.php';
    $TAID = $_POST['TAID'];
    // $PTLocation = $_POST['p.PTLocation'];
    // $PTPrice = $_POST['p.PTPrice'];
    $conn = OpenCon();
    $sql = "select t.Name AS Agency_Name, t.TAID AS Agency_ID, p.PTLocation AS Location, p.PTPrice AS Price 
    from Manage_PackageTour1 p, TravelAgency t where p.TAID = '$TAID'" ;
    $result = $conn->query($sql);

    
    
        echo "<br>Result<br>";
        echo "<table>";
        echo "<tr><th> Agency_Name </th><th>Agency_ID </th><th>Location </th><th>Price </th></tr>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->Agency_Name . "</td><td>" . $row->Agency_ID 
                . "</td><td>" . $row->Location . "</td><td>" . $row->Price . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";

?>

    