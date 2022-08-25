<?php
    header( "Content-type: application/json" );
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    
    // include('../config/db.php');

    $checkoutPhone = $_GET["checkout_phone"];
    $checkoutAmount = $_GET["amount"];
    stkPushRequest($checkoutPhone, $checkoutAmount);
    /** Lipa na M-PESA password **/
    function getPassword()
    {
        //$timestamp = Carbon::rawParse('now')->format('YmdHms'); //Helps us get current date and time
        $timestamp = date("YmdHms"); //Helps us get current date and time
        //echo($timestamp);
        $passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";  //Pass key from the Daraja app. See https://developer.safaricom.co.ke/test_credentials
        $BusinessShortCode = 174379; //This is the test business shortcode we are going to use. See https://developer.safaricom.co.ke/test_credentials
        $password = base64_encode($BusinessShortCode.$passkey.$timestamp);
        //die($password);
        return $password;
    }
    /** Lipa na M-PESA STK Push method **/
    function stkPushRequest($phoneNo, $amount)
    {
        // global $conn;
        $phone = $phoneNo;  //We use request to get the phone number that the user inputs for the form.
        $phone = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "254", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        //die($phone);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.generateAccessToken()));
        $curl_post_data = [
            //Use valid values for the parameters below
            'BusinessShortCode' => 174379,
            'Password' => getPassword(),
            //'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'Timestamp' => date('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phone, 
            'PartyB' => 174379,
            'PhoneNumber' => $phone,
            'CallBackURL' => 'https://www.spotkenyasafaris.com/payment/confirm-request.php',
            'AccountReference' => "Glerian Limited",
            'TransactionDesc' => "Item purchase"
        ];
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        
        

    $objToArray = objectToArray(json_decode($curl_response));
    //print_r($objToArray);
    $reqId = $objToArray["CheckoutRequestID"];
/*    
    $sql = "INSERT INTO checkout (checkout_request_id) VALUES (:CheckoutRequestID)";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':CheckoutRequestID', $reqId, PDO::PARAM_STR);
    $stmt->execute();*/
    
/*    $resArray = [
        "ResultCode" => $objToArray["Body"]["stkCallback"]["ResultCode"], 
        "ResultDesc" => $objToArray["Body"]["stkCallback"]["ResultDesc"],
        "Amount" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"], 
        "MpesaReceiptNumber" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"], 
        "TransactionDate" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Value"], 
        "PhoneNumber" => $objToArray["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"]
    ];       
        
        print_r($curl_response);*/
        echo json_encode($objToArray);
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
    
    function generateAccessToken()
    {
        $consumer_key= "AbQwXHCQlpU6EPMvLbOVRMa88peg0vsU";
        $consumer_secret= "lcAi6BoQsUtiWpwH";
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $curl = curl_init();
        
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$credentials));
        curl_setopt($curl, CURLOPT_HEADER,false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token=json_decode($curl_response);
        return $access_token->access_token;
    }
    
?>