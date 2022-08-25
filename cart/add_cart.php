<?php
	include '../functions.php';
	session_start();

	//check if product is already in the cart
	addToCart($_GET['id']);

	// header('location: cart.php');
?>