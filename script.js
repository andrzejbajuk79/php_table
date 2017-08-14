

	$.ajax({
	type 		:'GET',
	data 		: "",
	url			:"getData.php",
	success 	: function(result) {
			var resultObj = JSON.parse(result);
			
			var dataHandler = $('#load_data');
			$.each(resultObj,function(key,val){
				console.log(val.productName);
				var newRow = $('<tr>');
				newRow.html("<td>"+val.productId+"</td><td>"+val.productName+"</td><td>"+val.productDescription+
					"</td><td>"+val.productPrice+"</td><td><button id='"+val.productId+"' class='selectData'>Select</button></td>");
					dataHandler.append(newRow);	
			});
	}	
});


function insertData(){
	var productName = $("[name='productName']").val();
	var productDescription = $("[name='productDescription']").val();
	var productPrice = $("[name='productPrice']").val();
	console.log(productDescription)
	$.ajax({
		type 	: 'post',
		data 	: "productName="+productName+"&productDescription="+productDescription+"&productPrice="+productPrice,
		// data 	: "productDescription" ,
		url 	: 'insert.php',
		success : function(result){
			var resultObj = JSON.parse(result);
			$('#error').html(resultObj.message);


		}

	});

}

$(document).on("click",".selectData",function(){
	var productId = $(this).attr('id');
	$.ajax({
		type :'post',
		data : "productId="+productId,
		url : 'update.php',
		success : function(result) {
			var resultObj = JSON.parse(result);
			$('[name="productId"]').val(resultObj.productId);
			$('[name="productName"]').val(resultObj.productName);
			$('[name="productDescription"]').val(resultObj.productDescription);
			$('[name="productPrice"]').val(resultObj.productPrice);
		}

	})
})


function updateData() {
	
	var productId = $("[name='productId']").val();
	var productName = $("[name='productName']").val();
	var productDescription = $("[name='productDescription']").val();
	var productPrice = $("[name='productPrice']").val();

	$.ajax({
		type 	: 'post',
		data 	: "productId="+productName+"&productName="+productName+"&productDescription="+productDescription+"&productPrice="+productPrice,
		// data 	: "productDescription" ,
		url 	: 'doUpdate.php',
		success : function(result){
			var resultObj = JSON.parse(result);
			$('#error').html(resultObj.message);
			


		}

	});
}