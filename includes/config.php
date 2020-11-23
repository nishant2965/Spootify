<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("aqx5w9yc5brambgl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "p0atdomnxw50mly4", "s8xiltczoxfef3in", "ep45tczw1gvqi8v9");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
