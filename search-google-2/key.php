<?php
	session_start();
	
	$_SESSION["keySearch"] = json_encode($_POST['key']);

	if($_SESSION["keySearch"] != null) {
		echo "lưu thành công key: " . $_SESSION["keySearch"]; 
	}