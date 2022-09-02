<?php

$server_address='localhost';
$server_user_name='root';
$password='';
$dbName='testing';

$con = new mysqli ($server_address,$server_user_name,$password,$dbName);
if ($con->connect_error) {
	die('Connection Error');
}





















?>