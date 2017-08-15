<?php 
require_once 'database.php';
// $id = $_POST['id']
// $result = array();

// $sql = "UPDATE persons SET ".$column_name."='".$text."' WHERE id='".$id."'";

// $connect -> query($sql)


$data['message'] = '';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$position = $_POST['position'];
$id= $_POST['id'];

if($first_name == '') {
	$data['message'] = 'uzupelnij imie';
}else if($last_name == ''){
	$data['message'] = 'usupelnij nazwisko';
}else if($position == ''){
	$data['message'] = 'uzupelniuj stanowisko';
}else{
	$sql = "UPDATE persons SET first_name='".$first_name."',last_name='".$last_name."',position='".$position."' WHERE id='".$id."'";

	$queryResult = $connect->query($sql);
	if ($queryResult) {
		$data['message'] = 'dodano do bazy danych';
	}else {
		$data['message'] = 'nie udalo sie dodac do bazy danycho';
	}

}

// echo $data['message'];
echo json_encode($data);
// print_r($_POST);
 ?>