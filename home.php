<?php

    session_start();
    require_once "pdo.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include("include/links.php") ?>

</head>
<body>
    
    <!-- starting navbar -->
    <?php
        $navTitle = "Home";
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <!-- <a href="logout.php"><button id="logoutID" type="button" class="btn btn-light ">Logout</button></a>  -->
            <button id="logoutID" type="button" class="btn btn-light ">Logout</button>
        </ul>
    </nav>
    <!-- end -->


    <div class="container">

        <div class = "jumbotron">
            <br><br>
            <h6>Name: <?php echo( $_SESSION['Name']); ?></h6>
            <h6>Number: <?php echo($_SESSION['ID_number']); ?> </h6>
            <h6>Email: <?php echo($_SESSION['Email']); ?> </h6>
            <h6>Address: <?php echo($_SESSION['Address']); ?> </h6>
            <h6>Date of Birth: <?php echo($_SESSION['Date_of_Birth']); ?> </h6>
            <h6>Connection Type: <?php echo($_SESSION['Connection_Type']); ?> </h6>
            <h6>City and Zip Code: <?php echo($_SESSION['City_and_Zip_Code']); ?> </h6>
            <h6>Mobile Number: <?php echo($_SESSION['Mobile_Number']); ?> </h6>


        </div>
    
    </div>
    
    <!-- JS script -->
    <script src="jScript\script2.js"></script>

</body>
</html>