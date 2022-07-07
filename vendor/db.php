<?php
$mysqli = mysqli_connect("103.22.182.6","jpn_heroku","cGVl4lwd","jpn_heroku");
	if (mysqli_connect_errno()){
		echo "Failed to connect to Database: " . mysqli_connect_error();
		exit();
	}
$mysqli->query("set names utf8");