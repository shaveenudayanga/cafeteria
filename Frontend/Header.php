<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">

            <!--Logo-->

            <a class="navbar-brand fs-3" href="#"><img src="../Frontend/images/Coffee_Clipart.png" width="100px" height="100px"> <p style="font-size:30px ;">KOFFEE</p></a>
            <!--Toggle btn-->

            <button class="navbar-toggler shadow none border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Side bar-->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                 aria-labelledby="offcanvasNavbarLabel">
                <!--Sidebar header-->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Visit Us</h5>
                    <button type="button" class="btn-close btn-close-white shadow none" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>

                <!--Sidebar body-->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end  flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link <?= ($currentPage=='index.php') ? 'active' : '' ?>"
                            href="../index.php">
                            <b><h5>Home</h5></b>
                        </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= ($currentPage=='order.php') ? 'active' : '' ?>"
                            href="../Frontend/order.php">
                            <b><h5>Order</h5></b></a>
                        </li>
                        <li class="nav-item mx-2">
                        <a class="nav-link <?= ($currentPage=='service.php') ? 'active' : '' ?>"
                                href="../Frontend/service.php">
                                <b><h5>Service</h5></b>
                            </a>                        
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= ($currentPage=='about.php') ? 'active' : '' ?>"
                                href="../Frontend/about.php">
                                <b><h5>About</h5></b>
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link <?= ($currentPage=='contact.php') ? 'active' : '' ?>"
                            href="../Frontend/contact.php">
                            <b><h5>Contact</h5></b></a>
                        </li>


                    </ul>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <span class="text-white">Hi <?= htmlspecialchars($_SESSION['username']) ?></span>
                            <a href="../Backend/logout.php" class="text-white">Logout</a>
                        </div>
                     
                    <?php else: ?>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                        <a href="../Frontend/login.php" class="btn btn-warning text-dark fw-bold px-4 rounded-pill shadow-sm">Login</a> 
                        </div>
                    <?php endif; ?>


                </div>

            </div>
        </div>
    </nav>
</body>
</html>