<?php include "php/lecturer_functions.php"?>
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
            
                <section id="about" class="section-padding ">
                    <div class="container border">
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid" style="margin-top:45px;height=400px"  src="img/thumb-1920-311833.jpg" alt=" ">
                            </div>
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 border">
                            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
                            <h3>Lecturer's Page</h3>
                            
                            <div class="about-profile">
                                <ul class="admin-profile">
                                <li><span class="pro-title"> Identification Number </span> <span class="pro-detail"><?php echo $_SESSION["id"]?></span></li>
                                <li><span class="pro-title"> Surname </span> <span class="pro-detail"><?php echo fillFields("surname")?></span></li>
                                <li><span class="pro-title"> Other Names </span> <span class="pro-detail"><?php echo fillFields("other_names")?></span></li>
                                <li><span class="pro-title"> Email Adress </span> <span class="pro-detail"><?php echo fillFields("email")?></span></li>
                                
                                </ul>
                            </div>
                            
                            </div>
                        </div> 
                        <div class="">
                            <h3>Attendance</h3>
                            <?php echo getMyUnits() ?>
                        </div>  
                        
                        </div>
                        <div class="">
                            <h3>Coursework Marks</h3>
                            <?php echo getMyUnit() ?>
                        </div>  
                    </div>
                   
        </body>
    </html>
              