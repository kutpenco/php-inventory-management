<?php 	

$localhost = "localhost";
$username = "storetst";
$password = "StoreTest231";
$dbname = "store";
$store_url = "http://localhost/php-inventory-management-system/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>