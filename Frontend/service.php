<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js" defer> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="../Frontend/style.css">

    <title>Service</title>

</head>
<body id="body" class="vh-100 overflow">

    
<?php
  $currentPage = basename($_SERVER['PHP_SELF']); // e.g. "about.php"
?>
<?php include '../Frontend/Header.php'; ?>

     <!--Services Section-->
     <div class="container">
        <div class="services">
            <h3 style=" color: rgb(233, 148, 20);"> OUR SERVICES </h3>
        </div>


    </div>

    <br />
    <br />
    <div class="container">
        <div class="row gy-3">
            <div class="col-4">
                <div class="card">
                    <img class="brewedcoffee" src="../Frontend/images/backgroundcoffee.jpg" alt="brewed coffee" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">✨ Freshly Brewed Coffee</h5>
                        <p class="card-text">We take pride in serving only the finest, ethically sourced coffee beans, brewed to perfection for that rich, satisfying cup — every single time.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="signaturecreations" src="../Frontend/images/signature creations.jpg" alt="signaturecreations" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">☕ Signature Coffee Creations</h5>
                        <p class="card-text">Our baristas craft unique coffee blends and specialty drinks that you won’t find anywhere else — from velvety mochas to bold cold brews, each cup is a homemade masterpiece designed to comfort and energize.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="atmosphere" src="../Frontend/images/atmosphere.jpg" alt="atmosphere" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">🛋️ Cozy & Inviting Atmosphere</h5>
                        <p class="card-text">Our warm interiors and friendly staff create the perfect place to unwind, work, or catch up with friends over your favorite treats.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    

    <!--footer-->
<!-- Footer -->
<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>