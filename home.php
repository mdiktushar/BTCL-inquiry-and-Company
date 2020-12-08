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
        $navTitle = $_SESSION['Name'];
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <!-- <a href="logout.php"><button id="logoutID" type="button" class="btn btn-light ">Logout</button></a>  -->
            <button id="logoutID" type="button" class="btn btn-light ">Logout</button>
        </ul>
    </nav>
    <!-- end -->


    <div class="container">

        <div class = "jumbotron" >
            <br><br>

            <table class="textStyle" style = "font-weight: bold;">
            <tr>
                <td>Name:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Name']); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Email']); ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Address']); ?></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Date_of_Birth']); ?></td>
            </tr>
            <tr>
                <td>Connection Type:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Connection_Type']); ?></td>
            </tr>
            <tr>
                <td>City and Zip Code:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['City_and_Zip_Code']); ?></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($_SESSION['Mobile_Number']); ?> </td>
            </tr>
            </table>

            <div>
                <br><br>
            <?php
                if($_SESSION['Connection_Error'] === "0"){

                    echo"<button id = \"report\" type=\"button\" class=\"btn btn-danger\">Complain</button>";
                }else{
                    echo "<h6 style = \"color: red;\">Report Send</h6>";
                   
                }
            ?>
            </div>
        </div>

    </div>
    
    <!-- JS script -->
    <script src="jScript\script2.js"></script>

</body>
</html>