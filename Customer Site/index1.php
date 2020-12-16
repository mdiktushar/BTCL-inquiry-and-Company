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

    </nav> <br>
    <!-- End -->


    <br><br>
    <!-- starging templats -->
    <div>
        <img name="slide" alt="" class="img-fluid">
    </div>



    <!-- Provided Services -->
    <br><br>
    <div class="container">
        <h2>Our Provided Services:</h2>

        <div class="row "> 
            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Telephone.png" alt="">
                <div class="center"><a style = "color : black" href="http://www.btcl.gov.bd/services/telephone">Telephone</a></div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Internet.png" alt="">
                <div class="center "><a style = "color : black" href="http://www.btcl.gov.bd/services/lli">Internet</a></div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Domain & Hosting.png" alt="">
                <div class="center"><a style = "color : black" href="http://www.btcl.gov.bd/services/domain">Domain &<br>Hosting</a></div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Transmission.png" alt="">
                <div class="center"><a style = "color : black" href="http://www.btcl.gov.bd/services/transmission">Transmission</a></div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Bill and Payment.png" alt="">
                <div class="center"><a style = "color : black" href="http://www.btcl.gov.bd/pages/2/telephone-bill"> Bill and<br>Payment</a></div>
            </div>

            <div class="col-lg-4 col-6 ">
                <img class="img-thumbnail img-fluid imgpad" src="image/Services/Complain Online.png" alt="">
                <div class="center"><a style = "color : black" href="#">Complain<br>Online</a></div>
            </div>

        </div>
    </div>
    <!-- end -->

    <?php include("include/pageEnding.php") ?>
    
    <!-- JS script -->
    <script src="jScript\script1.js"></script>

</body>
</html>

