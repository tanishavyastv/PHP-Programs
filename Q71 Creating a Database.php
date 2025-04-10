<<<<<<< HEAD
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE mytv";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo "<br>This program is written by Tanisha Vyas. <br>ERPID: 0221BCA066";
    
    $conn->close();
    
=======
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE mytv";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo "<br>This program is written by Tanisha Vyas. <br>ERPID: 0221BCA066";
    
    $conn->close();
    
>>>>>>> 470d72ba9c4100a1b0f1fc512b607eafc8236196
?>