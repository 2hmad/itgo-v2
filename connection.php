<?php

$host = "us-cdbr-east-04.cleardb.com";
$user = "b55db4e4498a14";
$pass = "1e181fff";
$db = "heroku_eee95f88829cde5";

$connect = mysqli_connect($host, $user, $pass, $db);
$connect -> set_charset("utf8");

?>