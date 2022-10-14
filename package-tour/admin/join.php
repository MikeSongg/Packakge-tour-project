<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Join </title>
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
    <h1> Join</h1>
    <h5> </h5>
    <h3> Join TravelAgency and Manage_PackageTour1 table to present locations and price of all the tours provided by a travel agency</h3>
    </div>
    
    <center>
        <form action="process-join.php" method="POST">
            <td> TA ID: </td>
            <input type = "text" name = "TAID" placeholder="Enter Angency ID"/><br/>

            <input type="submit" name= "join" value="JOIN"/>
        </form>
        
        <form action="display-TA.php" method="POST">

            <input type="submit" name= "display" value="Display Travel Agency Table"/>
        </form>

        <form action="display-PT.php" method="POST">

            <input type="submit" name= "display" value="Display Package Tour Table"/>
        </form>

    </center>

</body>
</html>

<?php
    include 'connect.php';
    $conn = OpenCon();
    $result = $conn->query("select p.PTLocation, p.PTPrice from Manage_PackageTour1 p, TravelAgency t where t.TAID=p.TAID");
    echo "<select name='TAID'>";
    while ($row = $result->fetch_assoc()) {
        unset($TAID);
        $TAID = $row['TAID'];
    }
    echo "</select>";
    




    include('partials/footer.php'); 
?>