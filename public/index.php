<?php
// [Code] Attribution: "Oscar" Huu Nghia Le
session_start();
if (isset($_SESSION["staffId"])) {
	header("Location:/public/php/home.php");
} else {
	header("Location:/public/php/login.php");
}

?>