<?php

//Your Mysql Config
$servername = "localhost";
$username = "pma";
$password = "Aghuke2003";
$dbname = "git_repos_jobportal";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}