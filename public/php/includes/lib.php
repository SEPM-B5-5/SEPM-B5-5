<?php

$rootDir = $_SERVER["HTTP_HOST"];
$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
$hostServerUrl = "http://$rootDir";

const DATABASE_FILEPATH = "$hostServerUrl/public/data/db/rostersys.sql";
const M_USER = "user";

function loggedIn() {
	return isset($_SESSION[M_USER]);
}

function logout() {
	unset($SESSION[M_USER]);
}

?>