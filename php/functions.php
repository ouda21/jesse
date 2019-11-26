<?php
session_start();
if(!isset($_SESSION["id"]))
{
    header("location:../login.php");
}
function fillFields($value){
    require "database_cofig.php";
    $userId=$_SESSION["id"];
    $sql="SELECT * FROM student WHERE student_number='$userId'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_assoc($result)){
            return $row["$value"];
        }
    }
}

function getAttendance()
{
    require "database_cofig.php";
    $userId=$_SESSION["id"];
    echo '<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Subject Code</th>
        <th scope="col">Name</th>
        
        <th scope="col">Lecturer</th>
        <th scope="col">Total Hours</th>
        <th scope="col">Absent Hours</th>
        <th scope="col">Percent Absent</th>
        </tr>
    </thead>';
    $sql="SELECT * FROM `attendance` WHERE student_id='$userId'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row["unit_id"];
            $total=$row["total_hours"];
            $absent=$row["attended_hours"];
            $percent=$row["percentage_absent"];

            $sql1="SELECT * FROM `unit` WHERE unit_id='$id'";
            $result2=mysqli_query($conn,$sql1);
            while($row2=mysqli_fetch_assoc($result2))
            {
                $name=$row2["name"];
                $lec=$row2["lect"];
                echo '<tbody>
                <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$lec.'</td>
                <td>'.$total.'</td>
                <td>'.$absent.'</td>
                <td>'.$percent.'</td>
                </tr>';
            }
        }
        echo "No data";
        echo'</tbody>
        </table>';
    
    }
}



    
