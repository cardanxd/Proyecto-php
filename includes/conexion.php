<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'proyectophp';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'UTF8'");

session_start();