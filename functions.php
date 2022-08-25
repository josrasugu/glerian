<?php

function getCartItems(){

}

function addToCart($productId){
	if(!in_array($productId, $_SESSION['cart'])){
		array_push($_SESSION['cart'], $productId);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}	
}


function capturePayment($orderId) {
	global $CLIENT_ID;
	global $APP_SECRET;
	global $BASE;
  $base = $BASE;
  $accessToken = generateAccessToken();
  $url = $base.'/v2/checkout/orders/'.$orderId.'/capture';

  $ch = curl_init($base.'/v2/checkout/orders/'.$orderId.'/capture');
  curl_setopt($ch, CURLOPT_POSTFIELDS, []);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Authorization: Bearer '.$accessToken
  ));
  $apiResponse = curl_exec($ch);
  curl_close($ch);
  
  $d = json_decode($apiResponse, true);
  $data = ["status" => "success", "data" => $d];
  
  echo json_encode($data);
}


function createOder($price) {
	global $CLIENT_ID;
	global $APP_SECRET;
	global $BASE;	
  $base = $BASE;
  $accessToken = generateAccessToken();
  $url = $base. '/v2/checkout/orders';

  $postRequest = array(
      'intent' => 'CAPTURE',
      'purchase_units' => [["amount" => ["currency_code" => "USD", "value" => $price]]]
  );

  $ch = curl_init($base.'/v2/checkout/orders');
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postRequest));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Authorization: Bearer '.$accessToken
  ));
  $apiResponse = curl_exec($ch);
  curl_close($ch);
  $data = json_decode($apiResponse, true);
  // return $data;
  echo json_encode($data);
}

function generateAccessToken() {
	global $CLIENT_ID;
	global $APP_SECRET;
	global $BASE;	
  $base = $BASE;
  $auth = $CLIENT_ID.":".$APP_SECRET;

  $ch = curl_init($base.'/v1/oauth2/token');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERPWD, $auth);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
  $apiResponse = curl_exec($ch);
  curl_close($ch);

  $data = json_decode($apiResponse, true);
  return $data['access_token'];
}    

function getProducts() {
	global $con;
	$qry = "SELECT * FROM products";
	$getProducts = $con->prepare($qry);
	$getProducts->execute();
	$products = $getProducts->fetchAll(PDO::FETCH_ASSOC);
	return($products);	
}

?>