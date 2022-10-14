<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Projection </title>
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
    <h1> Projection</h1>
    <h5> </h5>
    <h3> Show agency name and agency id for all travel agency</h3>
    </div>
    
    <center>
        <form action="process-projection.php" method="POST">
            

            <input type="submit" name= "projection" value="Projection"/>
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
$result = $conn->query("select Name AS Agency_Name, TAID AS Agency_ID from  TravelAgency ");

include('partials/footer.php'); ?>
