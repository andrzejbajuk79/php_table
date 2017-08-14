
<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<h2 class="text-center">Product List</h2>
<table class="table ">
	<thead>
		<tr>
			<th>product id</th>
			<th>product name</th>
			<th>product description</th>
			<th>product price</th>
			<th></th>
		</tr>

	</thead>
	<tbody id="load_data">
		
	</tbody>

	
</table><br><br><br>
<h3>Insert Data</h3>
<table class="table">
<tr>
			<td>Product Id</td>
			<td></td>
			<td><input type="text" name="productId" disabled="disable"></td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td></td>
			<td><input type="text" name="productName"></td>
		</tr>
		<tr>
			<td>Product Description</td>
			<td></td>
			<td><input type="text" name="productDescription"></td>
		</tr>
			<tr>
			<td>Product Price</td>
			<td></td>
			<td><input type="text" name="productPrice"></td>
		</tr>
			<tr>
			<td></td>
			<td></td>
			<td><button onclick="insertData()">Insert Data</button>
			<button onclick="updateData()">Update Data</button></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td id="error"></td>
		</tr>
	</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



<script type="text/javascript" src="script.js"></script>

</body>
</html>