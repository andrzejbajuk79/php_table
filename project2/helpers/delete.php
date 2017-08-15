<?php 
require_once 'database.php';
$id = $_POST['id'] ;
$sql = "DELETE FROM persons  WHERE id ='$id'";

if(mysqli_query($connect,$sql)) {
	echo " data delete";

}


?>