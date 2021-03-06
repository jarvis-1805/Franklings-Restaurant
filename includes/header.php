<?php
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body id="final-example">
        <div class="wrapper">
            <div id="banner">
                <a href="/" title="Return to Home">
                    <img src="assets/images/banner.png" alt="Franklin's Fine Dining">
                </a>
            </div><!-- banner -->

            <div id="nav">
                <?php include('includes/nav.php'); ?>
            </div><!-- nav -->
            
            <div class="content">