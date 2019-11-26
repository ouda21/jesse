<?php

    $localhost="localhost";
    $name="root";
    $pass="";
    $db="student_manage";

    $conn=mysqli_connect($localhost,$name,$pass,$db);
    if(!$conn)
    {
        die("Error:".mysqli_connect_error());
    }