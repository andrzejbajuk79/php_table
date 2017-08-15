<?php 


include 'database.php';

$id = $_POST['id'];


$query = "DELETE FROM persons WHERE id ='$id'";
$queryResult = $connect->query($query);
$data['message'] = 'usunieto z bazy danych';


echo json_encode($data);
 ?>