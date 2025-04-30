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

    <title>Contact</title>

</head>
<body id="body" class="vh-100 overflow">

    
<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include '../Frontend/Header.php'; ?>

    <!-- Hero Section -->
    

    <div class="container">
        <div class="about">
            <h3 style="color: rgb(233, 148, 20);"> CONTACT US </h3>
        </div>
    </div>
    <br />
    <br />


    <!-- Contact Form -->
    <div class="container my-5">
        <form action="../Backend/contact_process.php" method="POST">
            <div class="mb-3">
                <label style="color: azure;" for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label style="color: azure;" for="email" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label style="color: azure;" for="message" class="form-label"><b>Message</b></label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your Message" required></textarea>
            </div>
            <div class="mb-3">
                <label style="color: azure;" for="contactnum" class="form-label"><b>Contact Number</b></label>
                <input type="text" class="form-control" id="contactnum" name="contactnum" placeholder="Your Contact Number" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!--footer-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
