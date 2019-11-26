<!DOCTYPE html>
    <html>
        <head>
            <title>Coursework Page</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/main.css">
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
            <style>
                table {
                border-collapse: collapse;
                width: 100%;
                text-align: center;
                }

                table, tr, td, th {
                border: 1px solid black;
                }

                th {
                vertical-align: top;
                }

                td:empty:after {
                content: "\00a0"; /* HTML entity of &nbsp; */
                }
            </style>
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
                            <a href="coursework"  aria-expanded="false" class="dropdown-toggle">Course Work Marks</a>
                            
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
                    <h3>Coursework Marks</h3>
                    <h4>Computer Scinece</h4>
                </div>
                <hr>
                <table>
                    <tr>
                        <th rowspan="2">Unit Nme</th>
                        <th colspan="4">Marks</th>
                        <th rowspan="2">Remark</th>
                    </tr>
                    <tr>
                        <td>CAT 1</td>
                        <td>CAT 2</td>
                        <td>EXAM</td>
                        <td>TOTAL</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </table>
            </div>
        </body>
    </html>
              