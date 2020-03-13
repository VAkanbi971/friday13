<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Pricing</title>
</head>
<body>
<!-- Nav Start -->
<!-- done to speed up the process for the addition of navs -->

    <?php
    include("navbar.php");
    ?>
<!-- Nav End -->
<!-- pricing Starts -->
    <div class="jumbotron">
    <h1>Mask Prices</h1>
    <p>
    <!-- I made this to add a little bit of spice to the website so that if we change the price the code will change the message that pops up allowing for updates. All it does is take the variable of mask price and f it less than 30 and more than 20 it would print something and if it was more then it would print something else. -->
    <?php

    $maskPrice = 39.99;

    if (($maskPrice >= 20) && ($maskPrice <= 30)) {

        echo "<p>Mask prices are between $20.00 and 
        $30.00.</p>";
    } else {

    echo "Gas prices are currently higher than $30 due to the Corona outbreak and the high demand.";

    }
    ?>

    <div class="card bg-secondary text-white">
    <div class="card-body">
    <?php 
    echo "The price per mask is $" , $maskPrice , "."
    ?>
    </div>
    </div>
    
    </p>
    </div>
<!-- Pricing ends -->

<!-- Footer Start -->
<!-- done to speed up the process for the addition of footers -->

<?php
    include("footer.php");
    ?>
<!-- Footer End -->
</body>
</html>