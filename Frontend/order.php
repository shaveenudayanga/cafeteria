<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" type="text/css" href="../Frontend/order_style.css">

    <title>Order | KOFFEE</title>

</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']); // e.g. "about.php"
    ?>
    <?php include '../Frontend/Header.php'; ?>


    <div class="container">
        <div class="about">
            <h3 style="color: rgb(233, 148, 20);"> ORDER NOW </h3>
        </div>
    </div>
    <div class="container mt-5">


        <form action="../Backend/order_process.php" method="POST" class="order-form bg-dark p-5 rounded-4 shadow-lg">
            <div class="mb-3">
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="coffee" class="form-label text-white">Select Coffee</label>
                <select name="coffee" id="coffee-select" class="form-select" required onchange="updateTotal()">
                    <option value="">Choose your coffee</option>
                    <option value="1">Hot Black Coffee - $4</option>
                    <option value="2">Hot Chocolate Coffee - $6</option>
                    <option value="3">Hot Coffee with Milk - $5</option>
                    <option value="4">Cold Black Coffee - $5</option>
                    <option value="5">Cold Chocolate Coffee - $7</option>
                    <option value="6">Cold Coffee with Milk - $6</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label text-white">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required
                    onchange="updateTotal()" oninput="updateTotal()">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Total Amount ($)</label>
                <input type="text" class="form-control" id="total" name="total" readonly
                    style="background-color: #fff; font-weight: bold;">
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label text-white">Special Instructions</label>
                <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Any extra notes?"></textarea>
            </div>

            <button type="submit" class="btn btn-warning w-100">Submit Order</button>
        </form>
    </div>

    <script>
        function updateTotal() {
            var coffeeSelect = document.getElementById('coffee-select');
            var coffeeValue = coffeeSelect.value;
            var coffeePrice = 0;
            var coffeeType = "";

            switch (coffeeValue) {
                case "1":
                    // Hot Black Coffee
                    coffeePrice = 4;
                    coffeeType = "Hot Black Coffee";
                    break;
                case "2":
                    // Hot Black Coffee
                    coffeePrice = 6;
                    coffeeType = "Hot Chocolate Coffee";
                    break;
                case "3":
                    // Hot Black Coffee
                    coffeePrice = 5;
                    coffeeType = "Hot Coffee with Milk";
                    break;
                case "4":
                    // Hot Black Coffee
                    coffeePrice = 5;
                    coffeeType = "Cold Black Coffee";
                    break;
                case "5":
                    // Hot Black Coffee
                    coffeePrice = 7;
                    coffeeType = "Cold Chocolate Coffee";
                    break;
                case "6":
                    // Hot Black Coffee
                    coffeePrice = 6;
                    coffeeType = "Cold Coffee with Milk";
                    break;
                default:
                    coffeePrice = 0;
            }
            // var coffeePrice = document.getElementById('coffee').value;
            var quantity = document.getElementById('quantity').value;

            if (coffeePrice && quantity) {
                var total = coffeePrice * quantity;
                document.getElementById('total').value = total.toFixed(2); // 2 decimal places
            } else {
                document.getElementById('total').value = "";
            }
        }
    </script>
    <br />
    <br />
    <br />
    <br />


    <!-- Footer -->
<?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

    <!-- Font Awesome for social icons -->
    <script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
</body>

</html>