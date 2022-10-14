<?php
    include 'connect.php';
    $op = $_POST['op'];
    $conn = OpenCon();
    if ($op == "MAX") {
        $sql = "select MAX(p.PTPrice) as price from Manage_PackageTour1 p" ;
    } else if ($op == "MIN") {
        $sql = "select MIN(p.PTPrice) as price from Manage_PackageTour1 p" ;
    } else {
        $sql = "select AVG(p.PTPrice) as price from Manage_PackageTour1 p" ;
    }
    
    $result = $conn->query($sql);

    if ($op == "MAX") {
        echo "<table>";
        echo "<tr><th> Max Price of All Package Tour </th><th>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->price . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";
    } else if ($op == "MIN") {
        echo "<table>";
        echo "<tr><th> Min Price of All Package Tour </th><th>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->price . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";
    } else {
        echo "<table>";
        echo "<tr><th> Average Price of All Package Tour </th><th>";

        if ($result->num_rows) {
            while ($row = $result->fetch_object()) {
                echo "<tr><td>" . $row->price . "</td><td>"; 
            }
        } else {
            echo 'No results';
        }
        
        echo "</table>";
    }

    
    
   
?>