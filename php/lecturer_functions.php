<?php
session_start();
if(!isset($_SESSION["id"]))
{
    header("location:../login.php");
}

function fillFields($value){
    require "database_cofig.php";
    $userId=$_SESSION["id"];
    $sql="SELECT * FROM lecturer WHERE id_number='$userId'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_assoc($result)){
            return $row["$value"];
        }
    }
}
function getMyUnits()
{
    require "database_cofig.php";
    $userId=$_SESSION["id"];
    $sql="SELECT * FROM `lecturer` WHERE id_number='$userId'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $unit_id=$row["unit_taking"];
            $sql1="SELECT * FROM `unit` WHERE unit_id='$unit_id'";
            $result1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1)>0)
            {
                while($row1=mysqli_fetch_assoc($result1))
            {
                $unit=$row1["name"];
                echo '<div><a href="update_attendance.php?unit_id='.$unit_id.'">'.$unit.'</a></div>';
            }
        }
            else
            {
                echo "0 results";
            }
        }
    }
    else
    {
        echo "0 results";
    }
}

function getMyUnit()
{
    require "database_cofig.php";
    $userId=$_SESSION["id"];
    $sql="SELECT * FROM `lecturer` WHERE id_number='$userId'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $unit_id=$row["unit_taking"];
            $sql1="SELECT * FROM `unit` WHERE unit_id='$unit_id'";
            $result1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1)>0)
            {
                while($row1=mysqli_fetch_assoc($result1))
            {
                $unit=$unit_id." ".$row1["name"];
                echo '<div><a href="update_marks.php?unit_id='.$unit_id.'">'.$unit.'</a></div>';
            }
        }
            else
            {
                echo "0 results";
            }
        }
    }
    else
    {
        echo "0 results";
    }
}