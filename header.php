<?php
if (!isset($headerclass)) {
    $headerclass = 'other-bgimage';
}
$bodyclass = '';
$container = '';
$innerContainer = '';
$position = '';
if (isset($indexpage) && $indexpage == true) {
    $bodyclass = 'indexbody';
    if (empty($headerclass) || !isset($headerclass)) {
        $headerclass = 'indexpage';
    }
}
if (isset($indexpage2) && $indexpage2 == true) {
    $bodyclass = 'indexbody2';
    if (empty($headerclass) || !isset($headerclass)) {
        $headerclass = 'indexpage2';
    }
}
if (!isset($indexpage) || $indexpage != true) {
    $container = 'container-lg';
} else {
    $container = 'row no-gutters justify-content-center';
}
if (isset($indexpage) && $indexpage == true) {
    $innerContainer = 'container-lg';
    $position = 'position-absolute';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="<?php echo $bodyclass ?>">
<header class="<?php echo isset($headerclass) ? $headerclass : '' ?>">
    <div class="overlap-image">
        <div class="<?php echo $container; ?> h-100">
            <nav class="<?php echo $innerContainer . ' ' . $position; ?> navbar navbar-expand-md">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" width="150" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
                <div class="row w-100 justify-content-end nav-row">
                    <div class="col-12 col-md-auto">
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="advertisers.php">For Brand & Agencies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="for-drivers.php">For Drivers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>