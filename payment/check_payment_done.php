<?php
header( "Content-type: application/json" );
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

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
    $requestId = $_GET["request_id"];

    $sql = "SELECT * FROM checkout WHERE checkout_request_id = :requestId";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':requestId',$requestId, PDO::PARAM_STR);
    $stmt->execute();
    $contactSubCat = $stmt->fetch(); 
    $objToArray = objectToArray(json_decode($contactSubCat["checkout_response"]));
    $dt = str_split($objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Value"]);
    $resArray = [
        "ResultCode" => $objToArray["Body"]["stkCallback"]["ResultCode"], 
        "ResultDesc" => $objToArray["Body"]["stkCallback"]["ResultDesc"],
        "Amount" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"], 
        "MpesaReceiptNumber" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"], 
        "TransactionDate" => $dt[0].$dt[1].$dt[2].$dt[3].'-'.$dt[4].$dt[5].'-'.$dt[6].$dt[7].' '.$dt[8].$dt[9].':'.$dt[10].$dt[11].':'.$dt[12].$dt[13], 
        "PhoneNumber" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"],
        "ShortCode" => "174379"
    ];
    echo json_encode($resArray);
?>