<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="<?php if(isset($indexpage) && $indexpage == true) echo 'indexbody' ?>">
    <header class="<?php if(isset($indexpage) && $indexpage == true) echo 'indexpage' ?>">
        <div class="overlap-image">
            <div class="container-lg h-100">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="http://localhost/faire">
                        <img src="images/header-icon.png" width="200" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                    </button>
                    <div class="row w-100 justify-content-end">
                        <div class="col-auto">
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Brand & Agencies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="for-drivers.php">For Drivers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>