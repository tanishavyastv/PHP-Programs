<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text);
    }
    echo "<br>This program is written by Tanisha Vyas<br>ERPID-0221BCA066";
?>