<?php

function getConnection(){
  // Database credentials
  $servername = "localhost";
  $username = "root";
  $password = "Shaveen2001";
  $dbname = "cafeteria";
  $sconn = "";

  // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
}

?>