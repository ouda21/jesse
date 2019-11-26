<?php

require "database_cofig.php";
if(isset($_POST["attendance"]))
{
    $student=$_POST["student"];
    $unit=$_POST["unit"];
    $taught=$_POST["taught"];
    $attended=$_POST["attended"];

    $sql="UPDATE `attendance` SET `hours_taught`=hours_taught+'$taught',`attended_hours`=attended_hours+'$attended' WHERE unit_id='$unit' AND student_id='$student'";
    if(mysqli_query($conn,$sql))
    {
        $sql1="SELECT * FROM `attendance` WHERE student_id='$student' AND unit_id='$unit'";
        $result=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_assoc($result))
        {
            $ta=$row["hours_taught"];
            $at=$row["attended_hours"];
            $per=null;
            if($ta==0){
                $per=100;
            }else{
                $per=(($ta-$at)/$ta)*100;
            }
            
            $sql2="UPDATE `attendance` SET `percentage_absent`=percentage_absent+'$per' WHERE student_id='$student' AND unit_id='$unit'";
            if(mysqli_query($conn,$sql2))
            {
                header("location:../update_attendance.php");
            }else{
                die("Error:".mysqli_error($conn));
            }
        }
    }
    else
    {
        die("Error:".mysqli_error($conn));
    }
}