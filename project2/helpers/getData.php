<?php 
require_once 'database.php';
$id = $_POST['id']
$result = array();

$sql1 = "UPDATE persons SET ".$column_name."='".$text."' WHERE id='".$id."'";

$sql = "SELECT * FROM persons WHERE id= '$id'";
$queryResult = $connect->query($sql);

$fetchData = $queryResult->fetch_assoc();
$result = $fetchData;


echo json_encode($result);