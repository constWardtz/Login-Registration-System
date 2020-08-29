<?php
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "form_db";

$database = mysqli_connect($host, $db_user , $db_pass);
mysqli_select_db($database, $db_name) or die (error_reporting(E_ALL));