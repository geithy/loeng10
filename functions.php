<?php

	require("/home/geithy/config.php");

	/* ALUSTAN SESSIOONI */
	session_start();
		
	/* �HENDUS */
	$database = "if16_geithy";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	

?>