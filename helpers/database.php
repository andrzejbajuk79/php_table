<?php 

$connect = new mysqli('localhost','root',"",'tabl2') ;
if(!$connect) {
	echo 'nie polalczono z baza danych';
	exit();
}
