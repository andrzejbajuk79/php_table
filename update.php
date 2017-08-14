<?php 

include 'database.php';

$productId = $_POST['productId'];
$result = array();

$query = "SELECT * FROM product WHERE productId =".$productId;
$queryResult = $connect->query($query);

$fetchData =$queryResult->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
 ?>