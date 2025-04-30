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

    <title>About</title>

</head>
<body id="body" class="vh-100 overflow">

    
<?php
  $currentPage = basename($_SERVER['PHP_SELF']); // e.g. "about.php"
?>
<?php include '../Frontend/Header.php'; ?>

    

    <!--About section-->
    <div class="container">
        <div class="about">
            <h3 style="color: rgb(233, 148, 20);"> ABOUT US </h3>
        </div>
    </div>
    <br />
    <br />
    <div class="container">
        <div class="aboutus">
            <aside class="feature-item">
                

                <h4 style="color: rgb(104, 77, 42);">OUR STORY</h4>
                <p style="color:  lightgray;">Born from a passion for rich flavors and genuine moments, our coffee shop started as a small dream between friends. With every brew, we aim to share the simple joy of great coffee, cozy conversations, and a community that feels like home.

                </p>
            </aside>


            <section class="feature-item">
               

                <h4 style="color:  rgb(104, 77, 42);">OUR VISION</h4>
                <p style="color: lightgrey;">To create a warm, welcoming space where every cup of coffee inspires connection, comfort, and creativity.</p>

            </section>

           
        </div>
    </div>
    <br />
    <br />

    <!--footer-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>