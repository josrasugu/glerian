<?php
session_start();
//initialize cart if not set or is unset
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
//unset qunatity
unset($_SESSION['qty_array']);
include "db.php";
include "functions.php";
$products = getProducts();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/32ddaf080f.js" crossorigin="anonymous"></script>
    <link href="assets/css/main.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="sticky-notification" id="sticky_notification"></div>
    <section>
        <div class="container-fluid" style="padding: 0;">
            <nav class="navbar navbar-expand-custom navbar-mainbg">
                <a class="navbar-brand navbar-logo" href="#">
                    <img src="assets/images/logo.png" width="118px">
                </a>

                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-black"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
<section style="margin: 30px; background: #fff;">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 7px 0 rgba(0, 0, 0, 0.19); min-height: 250px; width: 100%; padding: 20px; margin: 20px;">
                    <div style="text-align: center; margin: 20px;">
                        <img src="assets/images/products/<?php echo $product["photo"]; ?>" class="img-fluid" width="150px">
                    </div>
                    <div>
                        <p style="font-size: 13px;"><b><?php echo $product["name"]; ?></b></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <span style="font-size: 12px;"><?php echo $product["distinct"]; ?></span>
                                </div>
                                <div style="float: right;">
                                    <span style="font-size: 12px;"><?php echo $product["price"]; ?></span>
                                </div>
                            </div>
                        </div>
                        <p>Ksh. <span style="font-size: 18px"><b><?php echo $product["quantity"]; ?></b></span></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <a href="view_cart.php?buy=<?php echo $product['id']; ?>"><button class="btn" style="background: #A6CB26; color: #fff;">BUY NOW</button></a>
                                </div>
                                <div style="float: right;">
                                    <button class="btn" style="border: 1px solid #A6CB26; color: #A6CB26;" onclick="addToCart(<?php echo $product['id']; ?>)">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>