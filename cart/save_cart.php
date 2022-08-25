<?php
	session_start();
	if(isset($_POST['save'])){
		foreach($_POST['indexes'] as $key){
			if ($_POST['qty_'.$key] == "0" || $_POST['qty_'.$key] == "") {
				die(json_encode(["status"  => "fail"]));
			}else{
				$_SESSION['qty_array'][$key] = $_POST['qty_'.$key];
			}
		}

		$_SESSION['message'] = 'Cart updated successfully';
		echo (json_encode(["status" => "success"]));
		// header('location: view_cart.php');
	}
?>
