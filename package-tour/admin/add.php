<?php include('partials/menu.php'); ?>

<html>
<head>
<title> Add Customer </title>
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
    
    <h1> Add Customer</h1>
    <center>
        <form action="process-add.php" method="POST">
            <input type = "text" name = "CusID" placeholder="Enter customer ID"/><br/>
            <input type = "text" name = "Name" placeholder="Enter name"/><br/>
            <input type = "text" name = "Email" placeholder="Enter Email"/><br/>
            

            <input type="submit" name= "ADD" value="ADD"/>
            </form>
        <form action="display-Cus.php" method="POST">

            <input type="submit" name= "display" value="Display  customer Table"/>
        </form>

    </center>
</body>
</html>


<?php
    include 'connect.php';
    $conn = OpenCon();
    
   // $result = $conn->query("Insert Into Customer Values ('$CusID', '$Name', ‘$Email')");
   // echo "<select name='TAID'>";
    // while ($row = $result->fetch_assoc()) {
    //     unset($TAID);
    //     $TAID = $row['TAID'];
       
    //    echo '<option value="'.$TAID.'">';
    ///}
   // echo "</select>";
?>


<?php include('partials/footer.php'); ?>
