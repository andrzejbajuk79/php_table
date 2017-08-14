<?php 

$connect = new mysqli('localhost','root',"",'products1') ;
if(!$connect) {
	echo 'nie polalczono z baza danych';
	exit();
}
 ?>