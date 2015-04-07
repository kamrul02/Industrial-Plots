<!DOCTYPE html>
<?php require_once("include/connexion.php");
include_once("include/fonctions.php"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>   
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Back to Site</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="hotel.php"><i class="fa fa-sign-in"></i> Industrial Plots</a></li>
                    <li><a href="core.php"><i class="fa fa-sign-in"></i> Industrial Buildings</a></li>
                    
                    <!--
                    <li><a href="office.php"><i class="fa fa-sign-in"></i> Office Buildings</a></li>
                    <li><a href="shop.php"><i class="fa fa-sign-in"></i> Shopping Mall</a></li>
					-->

                    <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact</a>
                    
      <li><a href="NEWSLETTER.php"><i class="fa fa-envelope"></i> NEWSLETTER</a>
                </ul>
              
        </nav>