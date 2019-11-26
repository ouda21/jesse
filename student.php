<?php include "php/functions.php"?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Student Page</title>
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
            
            

                <!-- <div id="content">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container">
                            <div class="border">
                                <div class="profile">
                                    <img src="img/thumb-1920-311833.jpg" alt="..." class="img-thumbnail">
                                    <p class="text-center">Ouda Wycliffe</p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div> -->
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
                            <h3>Student Page</h3>
                            
                            <div class="about-profile">
                                <ul class="admin-profile">
                                <li><span class="pro-title"> Student Number </span> <span class="pro-detail"><?php echo $_SESSION["id"]?></span></li>
                                <li><span class="pro-title"> Surname </span> <span class="pro-detail"><?php echo fillFields("surname")?></span></li>
                                <li><span class="pro-title"> Other Names </span> <span class="pro-detail"><?php echo fillFields("other_names")?></span></li>
                                <li><span class="pro-title"> Date of Birth </span> <span class="pro-detail"><?php echo fillFields("dob")?></span></li>
                                <li><span class="pro-title"> Phone </span> <span class="pro-detail"><?php echo fillFields("phone")?></span></li>
                                <li><span class="pro-title"> Email Adress </span> <span class="pro-detail"><?php echo fillFields("email")?></span></li>
                                <li><span class="pro-title"> Previous School </span> <span class="pro-detail"><?php echo fillFields("prev_school")?></span></li>
                                <li><span class="pro-title"> Religion </span> <span class="pro-detail"><?php echo fillFields("religion")?></span></li>
                                </ul>
                            </div>
                            
                            </div>
                        </div>   
                        </div>
                    </div>
                    <div class="table-holder">
                    <h3 class="text-center">Academic Programmes</he>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </section>

        </body>
    </html>
