<?php session_start();
if (isset($_SESSION['username'])){
	// xóa session login
	unset($_SESSION['username']);
}
?>
