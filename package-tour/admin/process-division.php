<?php
    include 'connect.php';
    $attribute = $_POST['attribute'];
    $conn = OpenCon();
    if ($attribute == "CusID") {
        $sql = "select CusID As Customer from Customer c where NOT EXISTS (Select * from Customer_Service cs
    where NOT EXISTS (Select ccs.CusID from CallCS ccs where ccs.CusID = c.CusID AND cs.CSID = ccs.CSID))" ;
    } else {
        $sql = "select Name As Customer from Customer c where NOT EXISTS (Select * from Customer_Service cs
    where NOT EXISTS (Select ccs.CusID from CallCS ccs where ccs.CusID = c.CusID AND cs.CSID = ccs.CSID))" ;
    }
    
    $result = $conn->query($sql);

    
    echo "<table>";
    echo "<tr><th> Customer Who Has Called All Customer Services </th><th>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->Customer . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
    echo "</table>";
   
?>
