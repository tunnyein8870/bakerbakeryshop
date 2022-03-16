<?php
	$localhost = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'onlinebakeryshop';

	$dbconnection = mysqli_connect($localhost,$username,$password,$database);
	if(!$dbconnection){
		die("Connection Failed").mysqli_connect_error();
	}
?>