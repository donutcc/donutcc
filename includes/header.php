<?php

include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="/php-donuts/sass/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

    <div class="class1" onclick="toggleClass(this)"><i class="fa fa-bars"></i></div>

    <div class="navigation_bar">

        <!--      <h1>&#9776;</h1> -->

        <div class="logo"><a href="index.php">Donuts CC</div>
        <?php include('includes/nav.php'); ?>



    </div>