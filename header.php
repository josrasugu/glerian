<?php
session_start();
include "db.php";
include "functions.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
    <title>Glerian Store</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/32ddaf080f.js" crossorigin="anonymous"></script>
    <link href="assets/css/main.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
</head>

<body>
    <section>
        <div class="container-fluid" style="padding: 0;">
            <nav class="navbar navbar-expand-custom navbar-mainbg py-0">
                <a class="navbar-brand navbar-logo" href="#">
                    <img src="assets/images/logo.png" width="118px">
                </a>

                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-black"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <div class="hori-selector">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i>HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php"><i class="far fa-address-book"></i>ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="far fa-clone"></i>OUR STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="our-services.php"><i class="far fa-calendar-alt"></i>OUR
                                SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login-form/login form.html"><i
                                    class="fa-solid fa-user-large"></i></i>MY ACCOUNT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"><i class="bi bi-headset"></i></i>GET SUPPORT</a>
                        </li>

                    </ul>
                    <div>
                        <span><a href=""><i class="btn fa fa-solid fa-magnifying-glass fa-4x" style="color:#A6CB26;"
                                    href="#"></i></a></span>
                        <span><a href="view_cart.php"><span><i class="btn fa fa-solid fa-cart-shopping fa-4x badge "
                                        style="color:#A6CB26;"> <span id="total_items" class="badge rounded-pill text-bg-danger"> <?php echo count($_SESSION['cart']); ?></span></span></i></a></span>
                        <span><a href=""><i class="btn fa fa-solid fa-heart fa-4x" style="color:#A6CB26;"
                                    href="#"></i></a></span>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <div class="sticky-notification" id="sticky_notification"></div>
