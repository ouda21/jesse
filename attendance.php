<?php include "php/functions.php"?>
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
                            <a href="attendance.php">Attendance</a>
                        </li>
                        <li>
                            <a href="coursework.php"  aria-expanded="false" class="dropdown-toggle">Course Work Marks</a>
                            
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
                    <h3>Attendance Summary</h3>
                    <h4>Computer Scinece</h4>
                </div>
                <hr>
                <div class="table-holder">
                    <h3 class="text-center">Attendance</he>
                        <?php echo getAttendance() ?>
                    </div>
            </div>
        </body>
    </html>
              