
loadData();
function  loadData() {
	$.ajax({
		url  : 'helpers/select.php',
		data : '',
		type  : 'GET',
		success : function (data){
			
			var dataObj = JSON.parse(data);
			var dataHandler = $('#load_data');
			
			$.each(dataObj,function(key,val){
				// console.log(val);
				// console.log(val.first_name);
				var row = $('<tr>');
				row.html("<td>"+val.id+"</td><td>"+
					val.first_name+"</td><td>"+
					val.last_name+"</td><td>"+
					val.position+"</td><td><button style='margin:3px;' class='selectData btn btn-xs btn-success'id='"+val.id+"'>SELECT</button></td>");
				dataHandler.append(row);
				
			});
		}

	});
}

function insertData(){
	var  first_name = $("[name='first_name']").val();
	var  last_name = $("[name='last_name']").val();
	var  position = $("[name='position']").val();
	
	$.ajax ({
		method: 'POST',
		url : 'helpers/insert.php',
		data : {first_name : first_name, last_name:last_name, position:position},
		success   : function (data) {
			var dataObj = JSON.parse(data);
			$('#error').html(dataObj.message);
			loadData();
		}

	});
}

$(document).on("click",".selectData",function(){
	var id = $(this).attr('id');
	$.ajax({
		url  : 'helpers/getData.php',
		data : {id:id},
		method : 'POST',
		success : function(data){
			var dataObj = JSON.parse(data);
			console.log(dataObj);
		$("[name='first_name']").val(dataObj.first_name);
		$("[name='last_name']").val(dataObj.last_name);
		$("[name='position']").val(dataObj.position);
		$("[name='person_id']").val(dataObj.id);
		}
	});
});

function updateData(){
	var name = $("[name='first_name']").val();
	var nazwisko =$("[name='last_name']").val();
	var stanowisko =$("[name='position']").val();
	var id = $("[name='person_id']").val();
	$.ajax({

		method : 'POST',
		data : {first_name :name,last_name:nazwisko,position :stanowisko,id:id},
		url  : 'helpers/update.php',
		success  :  function(data){
			var dataObj = JSON.parse(data);
			$('#error').html(dataObj.message);

			loadData();
	
		}



	})



}

function deleteData(){
	var id = $("[name='person_id']").val();
	$.ajax({

		method : 'POST',
		data : {id:id},
		url  : 'helpers/delete.php',
		success  :  function(data){
			var dataObj = JSON.parse(data);
			$('#error').html(dataObj.message);
			loadData();
	
		}



	})

}

