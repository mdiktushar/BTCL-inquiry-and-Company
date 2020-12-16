<?php

    session_start();
    if($_SESSION['line_manLogin'] != 1)
    {
        echo "
            <script >
                window.location.replace(\"index.php\");
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
    <title><?php echo($_SESSION['lineman_name']); ?> Line-Man</title>

    <?php include("include/links.php") ?>
</head>
<body>

     <!-- starting navbar -->
     <?php
        $navTitle = $_SESSION['lineman_name'];
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <!-- <a href="logout.php"><button id="logoutID" type="button" class="btn btn-light ">Logout</button></a>  -->
            <button id="logoutID" type="button" class="btn btn-light ">Logout</button>
        </ul>
    </nav> <br><br><br>
    <!-- end -->
    <br><br>


    <div class="container">
        <div class="jumbotron textStyle">

            <!-- Deleting the coplain from inquary table -->
            <?php include("include/Delete from inquary.php"); ?>
            <!-- end -->

            <strong><a class="goRight textboue1" href="changePassword.php">Change Password</a></strong>

            <!-- Showing the Table -->
            <br>
            <h2>Complainse</h2>
            <div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Uner Number</th>
                            <th>User Name</th>
                            <th>Contace Number</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <?php

                            $sql = "SELECT User_Name, Phone_Number, Address, aria_no, Connection_Number FROM inquiry WHERE aria_no = ".$_SESSION['Aris_ID'].";";
                            $stmt = $pdo->query($sql);

                            $ser = 1;                                
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                
                                echo "<tr>";
                                echo "<td>"; echo ($ser++); echo "</td>";
                                echo "<td>"; echo ($row['Connection_Number']); echo "</td>";
                                echo "<td>"; echo ($row['User_Name']); echo "</td>";
                                echo "<td>"; echo ($row['Phone_Number']); echo "</td>";
                                echo "<td>"; echo ($row['Address']); echo "</td>";
                                echo(" </tr>");

                            }
                                
                        ?>
                                
                       
                    </tbody>
                </table>
            </div>

            <!-- end -->

        </div>
    
    </div>
    
    <!-- JS script -->
    <script src="jScript\script1.js"></script>

    
</body>
</html>