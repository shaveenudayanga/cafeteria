


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up | KOFFEE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Frontend/style_signup_login.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- Navbar -->
<?php
  $currentPage = basename($_SERVER['PHP_SELF']); // e.g. "about.php"
?>
<?php 
include '../Frontend/Header.php';
?>

<!-- Form Centering Container -->
<div class="form-wrapper">
    <div class="form-container">
        <h2 class="form-title">Sign Up</h2>
        <form action="../Backend/signup_process.php" method="POST" class="form">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn-submit">Sign Up</button>
            <p class="switch-link">Already have an account? <a href="../Frontend/login.php">Login</a></p>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

</body>
</html>
