

	fetch_data();
	function fetch_data()
	{
		$.ajax({
			url  : "helpers/select.php",
			method  :'POST',
			success  : function(data){
				$('#live_data').html(data);
				
			}
		});
	}


	  $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"helpers/insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });
      function edit_data(id,text,column_name){
      	$.ajax({
      		url  :'helpers/edit.php',
      		method  : "POST",
      		data : {text:text,id:id,column_name:column_name},
      		dataTypye  : 'text',
      		success : function(data) {
      			console.log(data);
      			
      		}

      	});
      }

      $(document).on('blur','.first_name',function(){
      	var id  = $(this).data('id1');
      	var first_name  = $(this).text();
      	edit_data(id,first_name,"first_name");

      	});

      
       $(document).on('blur','.last_name',function(){
      	var id  = $(this).data('id2');
      	var last_name  = $(this).text();
      	edit_data(id,last_name,"last_name");


      });


   $(document).on('click','.btn_delete',function() {
       	var id = $(this).data('id3');

       	if(confirm('na pewno chcesz skasowac ten rekord??')){
			$.ajax ({
			       			url  :'helpers/delete.php',
			       			method : "POST",
			       			 data : {id:id},
			       			 dataType : 'text',
			       			 success :  function (data) {
			       			 	console.log(data);
			       			 	fetch_data();
			       			 }
			       			

			       		});

       	}
       		
       });
