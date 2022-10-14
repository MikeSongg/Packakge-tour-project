<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Division </title>
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
    <h1> Division</h1>
    <h5> </h5>
    <h3> Find customers who have called all customer services </h3>
    <br><br>
    
        <form action="process-division.php" method="POST">
            <label> Select attribute: </label><br>
            <input type="radio" name="attribute" value="CusID"/> CusID <br>
            <input type="radio" name="attribute" value="Name"/> CusName <br>

            <input type="submit" name= "division" value="Division"/>
        
        </form>
        <form action="display-Cus.php" method="POST">

            <input type="submit" name= "display" value="Display  customer Table"/>
        </form>

    </div>
    
</body>
</html>

<?php
    include 'connect.php';
    $conn = OpenCon();
    $result = $conn->query("select CusID AS Customer from Customer c where NOT EXISTS (Select * from Customer_Service cs
    where NOT EXISTS (Select ccs.CusID from CallCS ccs where ccs.CusID = c.CusID AND cs.CSID = ccs.CSID))" );
    echo "<select name='attribute'>";
    while ($row = $result->fetch_assoc()) {
        unset($attribute);
        $attribute = $row['attribute'];
        //echo '<option value="'.$TAID.'">'.$Address.'</option>';
    }
    echo "</select>";
?>


<?php include('partials/footer.php'); ?>
