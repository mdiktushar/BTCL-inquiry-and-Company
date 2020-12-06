
<?php

    session_start();
    require_once "pdo.php";

    if (isset($_POST['pass']) && isset($_POST['ID'])) {

        $stmt = $pdo->prepare('SELECT ID FROM customer WHERE ID = :ID AND pass = :pw');
        
        $stmt->execute(array(':ID' => $_POST['ID'], ':pw' => $_POST['pass']));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row !== false){
            $_SESSION['ID_number'] = $row['ID'];


            header("Location: home.php");
            return;
        }
    
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <?php include("include/links.php"); ?>

</head>
<body>

    <!-- starting navbar -->
    <?php
        $navTitle = "Login";
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <a href=""></a>
        </ul>
    </nav>
    <!-- end -->

    <!-- login from -->
    <div>
        <br><br>
    </div>
    
    <div class="container">
        <div class="jumbotron">
            
            <h3 class="textStyle">Plese login to your account to report your problem to us</h3>
        </div>
    </div>
    

    <div class="container">
        <form method="POST" action="login.php">
            <div class="form-group textStyle">
                    <label for="exampleInputEmail1">User ID</label>
                    <input type="" class="form-control"  required maxlength="5" minlength="4" name="ID" >
                    <small id="emailHelp" class="form-text text-muted">Your Telephone number is your user ID</small>
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required minlength="6" name="pass">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    
    
    
</body>
</html>