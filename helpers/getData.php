<?php 


include 'database.php';

$id = $_POST['id'];
$result = array();

$query = "SELECT * FROM persons WHERE id ='$id'";
$queryResult = $connect->query($query);

$fetchData =$queryResult->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
 ?>