<?php
    setcookie("username", "", time() - 3600);

    if (!isset($_COOKIE["username"])) {
        echo "Cookie 'username' deleted successfully.";
    } else {
        echo "Cookie still exists: " . $_COOKIE["username"];
    }
    echo "<br>This program is written by Tanisha Vyas<br>ERPID-0221BCA066";
?>
