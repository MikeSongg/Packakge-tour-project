<?php include('partials/menu.php'); ?>

<html>
<head>
<title> Edit Travel Agency </title>
<style>
    body {
        background-color: #def1f3;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey; 
    }
</style>
</head>

<body>
    <div class="wrapper">
    <h1> Update </h1>
    <h5> </h5>
    <h3> Update address for travel agency</h3>
    </div>
    
    <center>
        <form action="process-update.php" method="POST">
            <td> TA ID: </td>
            <input type = "text" name = "TAID" placeholder="Enter Angency ID"/><br/>
            <td> Address: </td>
            <input type = "text" name = "Address" placeholder="Enter new address"/><br/>

            <input type="submit" name= "update" value="UPDATE"/>
        </form>
        
        <form action="display-TA.php" method="POST">

            <input type="submit" name= "display" value="Display Table"/>
        </form>

    </center>
</body>
</html>


<?php
    include 'connect.php';
    $conn = OpenCon();
    $result = $conn->query("select TAID, Address from TravelAgency");
    //echo "<select name='TAID'>";
    while ($row = $result->fetch_assoc()) {
        unset($TAID, $Address);
        $TAID = $row['TAID'];
        $Address = $row['Address'];
        //echo '<option value="'.$TAID.'">'.$Address.'</option>';
    }
    //echo "</select>";
?>


<?php include('partials/footer.php'); ?>