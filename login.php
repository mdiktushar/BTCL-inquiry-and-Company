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
        $navTitle = "login";
        include("include/nav.php");

    ?>
        <ul class = "nav navbar-nav navbar-right">
            <a href=""></a>
        </ul>
    </nav>
    <!-- end -->

    <!-- login from -->
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
    
    
</body>
</html>