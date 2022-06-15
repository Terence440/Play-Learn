<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "p&l";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    {
        die("filed to connect!");
    }
