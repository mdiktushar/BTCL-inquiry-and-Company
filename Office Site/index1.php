
<?php

    session_start();
    if($_SESSION['line_manLogin'] == 1)
    {
        echo "
            <script >
                window.location.replace(\"home.php\");
            </script>
        ";
    }

    require_once "pdo.php";

    if (isset($_POST['pass']) && isset($_POST['ID'])) {

        $stmt = $pdo->prepare('SELECT Aria , Name FROM lineman WHERE Aria = :ID AND password = :pw');
        
        $stmt->execute(array(':ID' => $_POST['ID'], ':pw' => $_POST['pass']));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row !== false){
            $_SESSION['Aris_ID'] = $row['Aria'];
            $_SESSION['lineman_name'] = $row['Name'];
            $_SESSION['line_manLogin'] = 1;

            header("Location: home.php");
            return;
        }
        header("Location: index1.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Line-Man Login</title>

<?php include("include/links.php"); ?>

</head>
<body>

<!-- starting navbar -->
<?php
    $navTitle = "Line-Man Login";
    include("include/nav.php");

?>
    <ul class = "nav navbar-nav navbar-right">
        <a href=""></a>
    </ul>
</nav><br><br><br>
<!-- end -->

<!-- login from -->
<div>
    <br><br>
</div>

<div class="container">
    <div class="jumbotron">
        
        <h3 class="textStyle">Welcome</h3>
        <p>
            This account is going to help you to see which connections are having problem. All complains of your area is listed in this account of yours.
            To sing in please enter your correct aria number and your account password.

        </p>
    </div>
</div>


<div class="container">
    <form method="POST" action="index1.php">
        <div class="form-group textStyle">
                <label for="exampleInputEmail1">Aria no.</label>
                <input type="" class="form-control"  required maxlength="5"  name="ID" >
                <small id="emailHelp" class="form-text text-muted">Your aria number is your user ID</small>
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required minlength="6" name="pass">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <br>
    <div class="ancHov">
        <a class="textRed" href="forgetPassword.php">Forget Password...!</a>

    </div>

</div>




</body>
</html>