<?php 
include 'database.php';
$result['message'] = "";


$productId = $_POST['productId'];
$productName =$_POST['productName'];
$productPrice =$_POST['productPrice'];
$productDescription =$_POST['productDescription'];

if ($productName == '') {
	$result['message'] = 'Product name must be filled';
}else if($productPrice ==''){
$result['message'] = 'Product price must be filled';
}else if ($productDescription =='') {
	$result['message'] = 'Product description must be filled';
}else {



// TU JEST WIELKI PROBLEM !!!!! :) CZEMU JAK NA SZTYWNO PRODUCT ID TO UPDEJTYUJE BAZE DANYCH, A JEZELI DAJE ZMIENNA TO NIC NIE ROBI MIMO ZE KOMUNUKAT ZE DODANO DO BAZY DANYCH

	// $query1 ="UPDATE `product` SET `productName` = '".$productName."', `productDescription` = '".$productDescription."', `productPrice` = '".$productPrice."' WHERE productId=1";


	$query1 ="UPDATE `product` SET `productName` = '".$productName."', `productDescription` = '".$productDescription."', `productPrice` = '".$productPrice."' WHERE productId='.$productId.'";



	$queryResult = $connect->query($query1);

	if ($queryResult) {
		$result['message'] = 'aktualizowano baze';
	}else{
		$result['message'] = 'niedulao sie aktualizowac  bazy danych';
	}
}

echo json_encode($result);

 ?>
