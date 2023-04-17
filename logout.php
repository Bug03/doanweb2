<?php
require_once('lib_session.php');
	if(isset($_REQUEST['isAdmin'])) {
		echo 'Dang xuat admin thanh cong';
		unset($_SESSION['current_username']);
		unset($_SESSION['isAdmin']);
	}
?>