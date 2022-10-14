<?php include('partials/menu.php'); ?>

<html>
<head>
<title> Remove Travel Agency </title>
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
    
    <h1> Remove Travel Agency</h1>
    <center>
        <form action="process-remove.php" method="POST">
            <input type = "text" name = "TAID" placeholder="Enter Angency ID"/><br/>
            

            <input type="submit" name= "remove" value="REMOVE"/>
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
    $result = $conn->query("select TAID from TravelAgency");
   // echo "<select name='TAID'>";
    while ($row = $result->fetch_assoc()) {
        unset($TAID);
        $TAID = $row['TAID'];
       
    //    echo '<option value="'.$TAID.'">';
    }
   // echo "</select>";
?>


<?php include('partials/footer.php'); ?>
