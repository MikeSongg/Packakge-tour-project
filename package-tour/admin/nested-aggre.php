<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Nested Aggregation </title>
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
    <h1> nested-aggre</h1>
    <h5> </h5>
    <h3> show average price for package tour group by location</h3>
    </div>
    
    <center>
        <form action="process-nested-aggre.php" method="POST">
            
           

            <input type="submit" name= "nested-aggre" value="nested-aggre"/>
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
$result = $conn->query("select avg(PTPrice) from Manage_PackageTour1 group by PTLocation");
include('partials/footer.php'); ?>
