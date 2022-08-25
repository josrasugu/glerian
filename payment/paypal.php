<?php
$CLIENT_ID="AdwWd55LjqL2L4n1o-6g--Oj8lR7NB2qN4TbtL6oAMkAEyeAOYqvvrLrFBQiJBHuzYzKZad-UdPJPSGp";
$APP_SECRET="ELSYhc-dHFT_DW9ArU-KUomGlwVjfPcejhehk3uym0uy5cCr0r1kWiGC-CtpynOcEjLVGF6p7d80RE0v";
$BASE="https://api-m.paypal.com";

include "../functions.php";
if (isset($_GET["order"])) {
	$order = createOder($_GET["order"]);
	// print_r($order);
}

if (isset($_GET["confirm"])) {
	$details = capturePayment($_GET["confirm"]);
	// print_r($details);
}


?>