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
        $navTitle = $_SESSION['lineman_name'];
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <!-- <a href="logout.php"><button id="logoutID" type="button" class="btn btn-light ">Logout</button></a>  -->
            <button id="logoutID" type="button" class="btn btn-light ">Logout</button>
        </ul>
    </nav>
    <!-- end -->
    <br>


    <div class="container">
        <div class="jumbotron">
            <h2>Table</h2>
            <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                       -->
            
            



            <div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
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

        </div>
    
    </div>
    

   
    
</body>
</html>