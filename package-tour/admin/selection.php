<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Selection </title>
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
    <h1> Selection</h1>
    <h5> </h5>
    <h3> show package tours whose price > 100</h3>
    </div>
    
    <center>
        <form action="process-selection.php" method="POST">
            
           

            <input type="submit" name= "selection" value="selection"/>
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
$result = $conn->query("SELECT * FROM Manage_PackageTour1 WHERE PTPrice > 100");

include('partials/footer.php'); ?>
