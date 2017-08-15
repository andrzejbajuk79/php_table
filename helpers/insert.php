<?php 
require_once 'database.php';
$data['message'] = '';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$position = $_POST['position'];

if($first_name == '') {
	$data['message'] = 'uzupelnij imie';
}else if($last_name == ''){
	$data['message'] = 'usupelnij nazwisko';
}else if($position == ''){
	$data['message'] = 'uzupelniuj stanowisko';
}else{
	$sql = "INSERT INTO `persons` (`id`, `first_name`, `last_name`, `position`) VALUES (NULL, '$first_name', '$last_name', '$position') ";

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