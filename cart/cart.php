<?php

session_start();
if (isset($_POST["type"])) {
	switch ($_POST["type"]) {
		case 'total-cart-items':
			totalCartItems();
			break;
		
		default:
			// code...
			break;
	}
}
function totalCartItems(){
	$totalItems = count($_SESSION['cart']);
	echo json_encode(["status" => "success", "total" => $totalItems]);
}

?>