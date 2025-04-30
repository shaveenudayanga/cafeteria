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

    <title>Menu</title>

</head>
<body id="body" class="vh-100 overflow">

    
<?php
  $currentPage = basename($_SERVER['PHP_SELF']); // e.g. "about.php"
?>
<?php include '../Frontend/Header.php'; ?>

     <!--Menu Section-->
     <div class="container">
        <div class="menu">
            <h3 style=" color: rgb(233, 148, 20);"> MENU </h3>
           
        </div>


    </div>

    <br />
    <br />
    <div class="menuu">
    <div class="menu-section">
        <h2>Hot Coffee</h2>
        <div class="coffee-item">
            <img src="../Frontend/images/hotblackcoffee.jpeg" alt="Black Coffee">
            <div class="coffee-info">
                <h3>Black Coffee</h3>
                <p>Freshly brewed coffee with no milk or sugar.</p>
            </div>
            <span class="price">$4</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/hotchococofee.jpg" alt="Choco Coffee">
            <div class="coffee-info">
                <h3>Chocolate Coffee</h3>
                <p>Coffee mixed with rich chocolate syrup.</p>
            </div>
            <span class="price">$6</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/hotcoffeewithmilk.jpg" alt="Milk Coffee">
            <div class="coffee-info">
                <h3>Coffee With Milk</h3>
                <p>Hot coffee blended with fresh milk.</p>
            </div>
            <span class="price">$5</span>
        </div>
    </div>

    <div class="menu-section">
        <h2>Cold Coffee</h2>
        <div class="coffee-item">
            <img src="../Frontend/images/coldblackcoffee.jpg" alt="Black Coffee">
            <div class="coffee-info">
                <h3>Black Coffee</h3>
                <p>Chilled brewed coffee without milk or sugar.</p>
            </div>
            <span class="price">$5</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/coldchococoffee.jpg" alt="Choco Coffee">
            <div class="coffee-info">
                <h3>Chocolate Coffee</h3>
                <p>Cold coffee mixed with chocolate syrup and ice.</p>
            </div>
            <span class="price">$7</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/coldcoffeewithmilk.jpg" alt="Milk Coffee">
            <div class="coffee-info">
                <h3>Coffee With Milk</h3>
                <p>Iced coffee blended with cold milk.</p>
            </div>
            <span class="price">$6</span>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
