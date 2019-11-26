<?php
    include "database_cofig.php";
    session_start();
    if(isset($_POST["lec"]))
    {
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $sql="SELECT * FROM `lecturer` WHERE email='$email' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $_SESSION["id"]=$row["id_number"];
                $_SESSION["email"]=$row["email"];
                header("location:../lecturer.php");
            }
        }
    }