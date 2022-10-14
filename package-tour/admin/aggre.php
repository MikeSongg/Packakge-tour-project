<?php include('partials/menu.php'); ?>
<html>
<head>
<title> Aggregation </title>
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
    <h1> Aggregation</h1>
    <h5> </h5>
    <h3> Find MAX / MIN / AVG price of all package tours </h3>
    <br><br>
    
        <form action="process-aggre.php" method="POST">
            <label> Select operation: </label><br>
            <input type="radio" name="op" value="MAX"/> Max <br>
            <input type="radio" name="op" value="MIN"/> Min <br>
            <input type="radio" name="op" value="AVG"/> Avg <br>

            <input type="submit" name= "division" value="Division"/>
        
        </form>

        <form action="display-PT.php" method="POST">

            <input type="submit" name= "display" value="Display Package Tour Table"/>
        </form>

    </div>
    
</body>
</html>

<?php
    include 'connect.php';
    $conn = OpenCon();
    $result = $conn->query("select MAX(p.PTPrice) from Manage_PackageTour1 p" );
    echo "<select name='op'>";
    while ($row = $result->fetch_assoc()) {
        unset($op);
        $op = $row['op'];
        
    }
    echo "</select>";

include('partials/footer.php'); 

?>