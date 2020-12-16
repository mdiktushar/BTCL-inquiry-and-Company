
<?php
    $secret_Question = "";
    session_start();
    if( $_SESSION['User_login'] == 1)
    {
        echo "
            <script >
                window.location.replace(\"home.php\");
            </script>
        ";
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forget Password</title>

<?php include("include/links.php"); ?>

</head>
<body>

    <!-- starting navbar -->
    <?php
        $navTitle = "Forget Password";
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <a href=""></a>
        </ul>
    </nav> <br><br><br>
    <!-- end -->

    <!-- login from -->
    <div>
        <br><br>
    </div>

    <div class="container">
        <div class="jumbotron">
            
            <h3 class="textStyle textRed">Forget Your Password!!!</h3>
            <p>
                Please call the helpline number for support and retrive your password. <br>
                Number : 11111 <br>
                This helpline number is at your servise for 24h. <br>
                <strong>Thank you.</strong> <br>

            </p>
        </div>
    </div>

    <?php include("include/pageEnding.php") ?>

</body>
</html>