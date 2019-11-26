<?php
    include "database_cofig.php";
    session_start();
    if(isset($_POST["student"]))
    {
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $sql="SELECT * FROM `student` WHERE email='$email' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $_SESSION["id"]=$row["student_number"];
                $_SESSION["email"]=$row["email"];
                header("location:../student.php");
            }
        }
    }