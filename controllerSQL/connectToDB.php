<?php

require 'CarManager.php';

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cars"; 

$db = new mysqli($servername, $username, $password, $dbname);

$cars = new CarManager($db);