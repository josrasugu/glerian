

<?php
include "header.php";
if(isset($_GET['buy'])){
	addToCart($_GET['buy']);
}
// include "products.php";
?>

<div class="container">
    <h1 class="page-header ">Cart Details</h1>
    <div id="cart_section" style="margin: 50px 0 50px 0;"></div>
</div>

<?php
include "footer.php";
?>