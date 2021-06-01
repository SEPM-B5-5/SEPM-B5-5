<?php

$rootDir = $_SERVER["HTTP_HOST"];
// $currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
// $hostServerUrl = "http://$rootDir";

$databaseFilepath = "$$rootDir/public/data/db/rostersys.sql";

function loggedIn() {
	return isset($_SESSION["staffId"]);
}

function logout() {
	unset($SESSION["staffId"]);
}

?>