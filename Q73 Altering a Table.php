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
    
    // sql to create table
    $sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully!";
    } else {
        echo "Error altering table: " . $conn->error;
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
    
    // sql to create table
    $sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully!";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    echo "<br>This program is written by Tanisha Vyas. <br>ERPID: 0221BCA066";
    $conn->close();
        
>>>>>>> 470d72ba9c4100a1b0f1fc512b607eafc8236196
?>