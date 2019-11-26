<?php
    session_start();
    if(!isset($_SESSION["id"]))
    {
        header("location:../login.php");
    }
    
    $unit=$_GET["unit_id"];
    //error_reporting(false);
    function getStudents()
    {
        $unit=$_GET["unit_id"];
        require "php/database_cofig.php";
        $sql="SELECT * FROM `student_registered` WHERE unit_id='$unit'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $stude=$row["student_id"];
                $sql1="SELECT * FROM `student` WHERE student_number='$stude'";
                $result1=mysqli_query($conn,$sql1);
                while($row1=mysqli_fetch_assoc($result1))
                {
                    $fname=$row1["surname"];
                    $oname=$row1["other_names"];
                    $full_name=$fname." ".$oname;
                    $lec_id=$_SESSION["id"];
                    echo "<div><p>".$stude." ".$full_name."</p></div>";
                    $select="SELECT * FROM `attendance` WHERE student_id='$stude'";
                    $result2=mysqli_query($conn,$select);
                    if(mysqli_num_rows($result2)>0)
                    {

                    }else
                    {
                        $insert="INSERT INTO `attendance`(`unit_id`, `student_id`, `lecturer`) VALUES ('$unit','$stude','$lec_id')";
                        if(mysqli_query($conn,$insert))
                        {
                            
                        }
                        else
                        {
                            die("Error:".mysqli_error($conn));
                        }
                    }
                    echo '<form>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cat 1 ">
                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cat 2">
                    </div>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Exam">
                    </div>
                  </form>';
                    
                }
            }
        }
    }
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Attendance Page</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/main.css">
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="wrapper">
                <nav id="sidebar">
                   

                    <ul class="list-unstyled components">
                       
                        <li class="active">
                            <a href="student.php" aria-expanded="false" class="dropdown-toggle">Home</a>
                            
                        </li>
                       
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </nav>
            
            <div class="container border">
                <div class="text-center">
                    <h3>Attendance Summary Update</h3>
                    <h4>Computer Scinece</h4>
                </div>
                <hr>
                <div class="table-holder">
                    <h3 class="text-center">Attendance</he>
                       <?php echo getStudents()?>
                    </div>
            </div>
        </body>
    </html>
              