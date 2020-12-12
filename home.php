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

            <?php

                $sql1 = "SELECT Name, Email, ID, Address, Area_Code, Date_of_Birth, Connection_Type, City_and_Zip_Code, Connection_Error, Mobile_Number FROM customer WHERE ID = ";
                $sql2 = ";";
                $sql = $sql1.$_SESSION['ID_number'].$sql2;

                $stmt = $pdo->query($sql1.$_SESSION['ID_number'].$sql2);
                echo '<table border="1">';
                $name;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $number = $row['ID'];
                    $address = $row['Address'];
                    $areaCode = $row['Area_Code'];
                    $dateOfBirth = $row['Date_of_Birth'];
                    $connectionType = $row['Connection_Type'];
                    $cityAndZip = $row['City_and_Zip_Code'];
                    $connectionError = $row['Connection_Error'];
                    $mobileNumber = $row['Mobile_Number'];

                }

            ?>

            <table class="textStyle" style = "font-weight: bold;">
            <tr>
                <td>Name:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($name); ?></td>
            </tr>
            <tr>
                <td>Number:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($number); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($email); ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($address); ?></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($dateOfBirth); ?></td>
            </tr>
            <tr>
                <td>Connection Type:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($connectionType); ?></td>
            </tr>
            <tr>
                <td>City and Zip Code:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($cityAndZip); ?></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td><?php echo($mobileNumber); ?> </td>
            </tr>
            </table>


            <!-- Adding Complain to the inquary table -->
            <div>

                <?php include("complain.php"); ?>

                <form method="post">
                <br><br>
                    <p>Write anything to confimr you are not a robort and then click the button:
                        <input type="text" name="confirm" size="60"/></p>
                    
                    <input type="submit" value="Add">
                    
                </form>
            
            </div>
            <!-- end -->


        </div>

    </div>
    
    <!-- JS script -->
    <script src="jScript\script2.js"></script>

</body>
</html>