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
        <form>
            <div class="form-group textStyle">
                    <label for="exampleInputEmail1">User ID</label>
                    <input type="" class="form-control"  required maxlength="5" minlength="4" >
                    <small id="emailHelp" class="form-text text-muted">Your Telephone number is your user ID</small>
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required minlength="6">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    
    
    
</body>
</html>