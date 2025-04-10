<<<<<<< HEAD
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytv";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (066, 'Tanisha', 'tv@gmail.com', '1234567890');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>This program is written by Tanisha Vyas. <br>ERPID: 0221BCA066";
    $conn->close();
        
=======
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytv";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (066, 'Tanisha', 'tv@gmail.com', '1234567890');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>This program is written by Tanisha Vyas. <br>ERPID: 0221BCA066";
    $conn->close();
        
>>>>>>> 470d72ba9c4100a1b0f1fc512b607eafc8236196
?>