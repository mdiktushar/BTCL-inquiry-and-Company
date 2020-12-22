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


    if (isset($_POST['pass1']) && isset($_POST['pass2']) && ($_POST['pass1'] === $_POST['pass2'])) {

        $data = [
                ':value1' => $_POST['pass1'],
                ':id' => $_SESSION['Aris_ID'],
        ];

        $sql = "UPDATE lineman SET password = :value1 WHERE Aria = :id;";
        $pdo->prepare($sql)->execute($data);
        
        header("Location: home.php");
        return;

    }


?>

</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password of <?php echo($_SESSION['lineman_name']) ?></title>
    <?php include("include/links.php") ?>
</head>
<body>


    <!-- starting navbar -->
    <?php
        $navTitle = $_SESSION['lineman_name'];
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <a href="logout.php"><button type="button" class="btn btn-light ">Logout</button></a>
        </ul>
    </nav> <br><br><br>
    <!-- end -->

        
    <div class="container">

        <div class = "jumbotron" >

            <form method="post">
                <h1>Changing Password</h1>
                <h4>Aria : <?php echo ($_SESSION['Aris_ID']); ?></h4> <br>

                <div>
                    Please enter the new password <br>
                    <input class="form-control" type="password" name="pass1" required minlength="6" /><br><br>
                </div>                
                <div>
                    Enter again the new password <br>
                    
                    <input class="form-control" type="password" name="pass2" required minlength="6" /><br><br>
                </div>
                <br>
                <input  type="submit" class="btn btn-primary" value="Reset Password">
                    
            </form>
        </div>
    </div>

    <?php include("include/pageEnding.php") ?>

    
</body>
</html>