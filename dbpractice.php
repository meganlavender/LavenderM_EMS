<?php
    $connect = new mysqli("db", "root", "example", "ems_db");
        if($connect->connect_errno)
            {
                die('Could not connect: ' . $connect->connect_errno);
            }  
?>