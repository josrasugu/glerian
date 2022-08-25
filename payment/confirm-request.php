<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$servername = "localhost";
$username = "spotkny_ptest";
$password = "qwerty-2021-D";

try {
  $conn = new PDO("mysql:host=$servername;dbname=spotkny_ptest", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function objectToArray($d) {
    if (is_object($d)) {
        // Gets the properties of the given object
        // with get_object_vars function
        $d = get_object_vars($d);
    }
	
    if (is_array($d)) {
        /*
        * Return array converted to object
        * Using __FUNCTION__ (Magic constant)
        * for recursive call
        */
        return array_map(__FUNCTION__, $d);
    }
    else {
        // Return array
        return $d;
    }
}

$data = json_decode(file_get_contents('php://input'), true);
$objToArray = objectToArray($data);

$CheckoutRequestID = $objToArray["Body"]["stkCallback"]["CheckoutRequestID"];
$TransactionType = json_encode($data);
$sql = "UPDATE checkout SET checkout_response = :TransactionType WHERE checkout_request_id = :CheckoutRequestID";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':TransactionType',$TransactionType, PDO::PARAM_STR);
$stmt->bindParam(':CheckoutRequestID',$CheckoutRequestID, PDO::PARAM_STR);
$stmt->execute();
?>