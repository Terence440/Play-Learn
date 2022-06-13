<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "p&l";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("filed to connect!");
    }
