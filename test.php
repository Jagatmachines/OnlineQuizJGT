<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JGT Online Quiz">
    <meta name="author" content="Jagatjyoti G Tuladhar">

    <title>Login - Dynamic Online Exam Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/semantic.min.css"/>

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 30px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
	font:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

    </style>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/sit-logo.png" height="40px" alt="logoQuiz" >
                </a>s
                
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    
                    <li class="pull-right">
                    	<h3 align="right"><a href="viewresult.php">View Student Results</a></h3>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <?php include("session.php")?>

  
  
 <br><br<br>
  <center><a  href="question.php"><button type="button" class="button">Add Student</button></a></center> <br><br><br>
  <center><button type="button" class="button">Add Questions</button></center>  <br><br><br>
  <center><button type="button" class="button">View Results</button> </center>
  
  
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>
