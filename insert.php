<?php 
include 'database.php';
$result['message'] = "";

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

	$queryResult=$connect->query("INSERT INTO `product` (`productId`, `productName`, `productDescription`, `productPrice`) VALUES (NULL, '$productName', '$productDescription', '$productPrice')");

	if ($queryResult) {
		$result['message'] = 'dodano produkt do bazy danych';
	}else{
		$result['message'] = 'niedulao sie dodac do bazy danych';
	}
}

echo json_encode($result);
 ?>