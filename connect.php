<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'webjam';

$conn = mysqli_connect($host, $user, $pass, $db) or die('error');

mysqli_select_db($con, $db) or die('error');

?>