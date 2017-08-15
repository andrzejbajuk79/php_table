<?php 
require_once 'database.php';
$sql = " SELECT * FROM persons";

$queryResult = $connect->query($sql);
$result = array();
while($fetchData =$queryResult->fetch_assoc()) {
	//robil tablice w postaci jsona
	$result[] = $fetchData;

	
}

echo json_encode($result);

// echo "
// <td>

// </td>
// ";
// echo $result;
 ?>