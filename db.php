<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_jillyanfahmi';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal tehubung ke database');
?>