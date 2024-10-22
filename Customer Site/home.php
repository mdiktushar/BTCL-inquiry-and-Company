<?php

    session_start();
    
    if( $_SESSION['User_login'] != 1)
    {
        echo "
            <script >
                window.location.replace(\"login.php\");
            </script>
        ";
    }
    require_once "pdo.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ( $_SESSION['Name']); ?></title>

    <?php include("include/links.php") ?>



</head>
<body>
    
    <!-- starting navbar -->
    <?php
        $navTitle = $_SESSION['Name'];
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <a href="logout.php"><button type="button" class="btn btn-light ">Logout</button></a>
        </ul>
    </nav> <br><br><br>
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
                <br><br>
                <?php
                    if($connectionError === '1')
                        echo "<h6 class = \"textGreen\">Your Complaint has been sended</h6>";
                    else
                    include("include/complain.php");
                ?>            
            
            </div>
            <!-- end -->
            
            <!-- changing password -->
            <div class="goRight">
                <strong><a class="textboue1" href="changePassword.php">Change Password</a></strong>
            </div>
            
        </div>

    </div>

    <?php include("include/pageEnding.php") ?>

    <!-- JS script -->
    <script src="jScript\script2.js"></script>
    


</body>
</html>