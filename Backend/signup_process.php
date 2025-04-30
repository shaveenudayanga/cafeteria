<?php
session_start();

function handleSignup() {
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    // }

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
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        if ($password !== $confirmPassword) {
            echo "<script>
                alert('Passwords do not match.');
                window.history.back();
            </script>";
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (username, user_email, user_password) VALUES ('$name', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location:../Frontend/login.php");
        } else {
            echo "<script>
                alert('Can't create a user.');
                window.history.back();
            </script>";
            return;
        }

        $conn->close();
    
    return null;
}

handleSignup();

?>