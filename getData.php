<?php 

include 'database.php';

$query= "SELECT * FROM product"
;
$queryResult = $connect->query($query);
$result = array();
while($fetchData =$queryResult->fetch_assoc()){
	$result[] = $fetchData;
}
echo json_encode($result);
?>