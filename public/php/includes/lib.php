<?php

$rootDir = $_SERVER["HTTP_HOST"];
$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
$hostServerUrl = "http://$rootDir";

$databaseFilepath = "$hostServerUrl/public/data/db/rostersys.sql";

function loggedIn() {
	return isset($_SESSION["user"]);
}

function logout() {
	unset($SESSION["user"]);
}

?>