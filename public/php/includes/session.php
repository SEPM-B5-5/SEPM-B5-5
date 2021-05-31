<?php
include("lib.php");

session_start();

if (!isset($_SESSION['staffId'])) {
	header("Location:$hostServerUrl/public/index.php");
}

if($_SESSION['priority'] !== 'manager') {
	header("Location:$hostServerUrl/public/php/home.php?staffId={$_SESSION['staffId']}");
}
?>