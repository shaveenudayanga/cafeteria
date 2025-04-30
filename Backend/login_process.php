<?php
session_start();

function handleLogin() {

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
    echo "hi1";

    $email = $_POST['email'];
    echo "hi2";
    $password = $_POST['password'];
    echo "hi3";

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


    echo "hi4";

    $stmt = $conn->prepare("SELECT user_id, username, user_password FROM user WHERE user_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    echo "hi5";

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $username, $db_password);
        $stmt->fetch();
        echo "hi6";
        echo ("\ninput: $password\n");
        echo ("db: $db_password");
        if ($password == $db_password) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            header("Location:../index.php"); // Redirect after successful login
        } else {
            echo "<script>
                alert('Invalid email or password.');
                window.history.back();
            </script>";
            return;
        }
    } else {
        echo "<script>
                alert('Invalid email or password.');
                window.history.back();
            </script>";
            return;
    }
    $stmt->close();
    $conn->close();
    
    return null;
}

handleLogin();

?>