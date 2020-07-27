<?php
session_start();
include("checklogin.php");
check_login();

	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

    <style>
        body
        {
            
            font-family:sans-serif;
            background-size: cover;
            background-image: url(5.jpg);
        }

        .jumbotron,
        .well
        {
            border-color: #fff;
            color: #fff;
            background: rgba(0, 0, 0, .8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            border-radius: 10px;
            
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="well hero-spacer">
            <h1 align="center"><u>A Warm Welcome!</u></h1>
            <p ><h3 align="center">Choose the facilty which you want to access</h3></p><br>
            <p align="center">
            <a href="FDP-form.php" class="btn btn-primary">Faculty Development Program</a>
            <br><br>
            <a href="trial.php" class="btn btn-primary">Publication</a>
            </p> 
            <br>
        </header>
        <br>
        <hr>
        <br>
         <div class="well hero-spacer">
         <p class="last" align="center">&copy;Copyright 2020 saishkhade@gmail.com</p>
         </div>

      


        </div>

        


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
