
<?php 
require_once 'helpers/database.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>dynamiczna tabela</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

<h3 class="text-center">Dynamiczna Tabela PHP/AJAX/JQuery</h3><br><br><br>

<table style="width: 80%;text-align: left">
<thead>
	<tr>
		<th>ID</th>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>STANOWISKO</th>
		<th></th>
	</tr>
</thead>
<tbody id="load_data">
	
</tbody>
	
</table><br><br>
<h3>Insert  Data/Update data</h3>
<table>
 <tr>
 	<td>ID</td>
 	<td> : </td> 
 	<td> <input type="text" name="person_id" disabled="disable"></td>
 </tr>
	<tr>
		<td>Imie</td>
		<td>:</td>
		<td><input type="text" name="first_name"></td>
	</tr>
	<tr>
		<td>Nazwisko</td>
		<td>:</td>
		<td><input type="text" name="last_name"></td>
	</tr>
	<tr>
		<td>Stanowisko</td>
		<td>:</td>
		<td><input type="text" name="position"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><button onclick="insertData()" class="btn btn-xs btn-success" style='margin-top:7px;'>INSERT</button>
		<button onclick="updateData()" class="btn btn-xs btn-success" style='margin-top:7px;'>UPDATE</button>
		<button onclick="deleteData()" class="btn btn-xs btn-success" style='margin-top:7px;'>DELETE</button></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td id="error" class="text-danger"></td>
	</tr>
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



<script type="text/javascript" src="js/script.js"></script>

</body>
</html>