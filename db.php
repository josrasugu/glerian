<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glerian";
try {
    	$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

    function dbquery($query){
    	global $con;
        $fetch = $con->prepare($query);
        $fetch->execute();
        return $fetch;
       }
?>