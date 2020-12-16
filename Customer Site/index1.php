<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTCL Help line</title>

    <?php include("include/links.php") ?>
    
</head>
<body>

    <!-- Starting Navbar -->
    <?php
        $navTitle = "Welcome to Customer Service";
         include("include/nav.php");
    
    ?>
        <ul class = "nav navbar-nav navbar-right">
             <button id="loginLode" type="button" class="btn btn-light">Login</button>
        </ul>

    </nav> <br><br><br>
    <!-- End -->


    <br><br>
    <!-- starging templats -->
    <div>
        <img name="slide" alt="" class="img-fluid">
    </div>

    <div class="container">
        <div class="jumbotron">
            
           
        </div>
    </div>



    <!-- Provided Services -->
    <br><br>
    <div class="container">
        <h2>Our Provided Services:</h2>

        <div class="row "> 
            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Telephone.png" alt="">
                <div class="center">Telephone</div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Internet.png" alt="">
                <div class="center">Internet</div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Domain & Hosting.png" alt="">
                <div class="center">Domain &<br>Hosting</div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Transmission.png" alt="">
                <div class="center">Transmission</div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Bill and Payment.png" alt="">
                <div class="center">Bill and<br>Payment</div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Complain Online.png" alt="">
                <div class="center">Complain<br>Online</div>
            </div>

        </div>
    </div>
    <!-- end -->

    <!-- JS script -->
    <script src="jScript\script1.js"></script>

</body>
</html>