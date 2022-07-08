<?php
$mysqli = mysqli_connect("localhost","dbuser","dbpass","dbname");
	if (mysqli_connect_errno()){
		echo "Failed to connect to Database: " . mysqli_connect_error();
		exit();
	}
$mysqli->query("set names utf8");