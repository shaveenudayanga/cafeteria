<?php
session_start();

function handleOrder() {

    $servername = "localhost";
    $username = "root";
    $password = "Shaveen2001";
    $dbName = "cafeteria";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        // Map coffee ID to coffee name
        $coffeeOptions = [
            "1" => "Hot Black Coffee",
            "2" => "Hot Chocolate Coffee",
            "3" => "Hot Coffee with Milk",
            "4" => "Cold Black Coffee",
            "5" => "Cold Chocolate Coffee",
            "6" => "Cold Coffee with Milk"
        ];
        $coffeeId = (string)$_POST['coffee'];
        $coffeeType = isset($coffeeOptions[$coffeeId]) ? $coffeeOptions[$coffeeId] : "Unknown";
        $quantity = $_POST['quantity'];
        $amount = $_POST['total'];
        $instructions = $_POST['notes'];

        echo "User ID: $userId   ";
        echo "Type: $coffeeType    ";
        echo "name: $name   ";
        echo "email: $email   ";
        echo "amont: $amount   ";

        $sql = "INSERT INTO orders (ordered_user_id, order_to_name, email, coffee_type, quantity, amount, instructions) VALUES ('$userId', '$name', '$email', '$coffeeType', '$quantity', '$amount', '$instructions')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location:../Frontend/order.php");
        } else {
            echo "<script>
                alert('Couldn't place the Order.');
                window.history.back();
            </script>";
            return;
        }
        $conn->close();
    } else {
        echo "<script>
            alert('User not logged in.');
            window.history.back();
        </script>";
        return;
    }
    
    return null;
}

handleOrder();

?>