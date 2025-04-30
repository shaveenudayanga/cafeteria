<?php
session_start();

function handleContact() {

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
    
        $userID = NULL;
        if (isset($_SESSION['user_id'])) {
            $userID = $_SESSION['user_id'];
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (isset($_SESSION['user_id'])){
            $sql = "INSERT INTO inquiries (contacted_user_id, contact_name, contact_email, message) VALUES ('$userID', '$name', '$email', '$message')";
        }
        $sql = "INSERT INTO inquiries (contact_name, contact_email, message) VALUES ('$name', '$email', '$message')";
        

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location:../Frontend/contact.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    
    return null;
}

handleContact();

?>