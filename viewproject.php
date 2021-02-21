<html>  
      <head>  
           <title>Live Table Data Edit</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">ปันชนะ (Pun Cha Na) </h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"selectproject.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var name_proj = $('#name_proj').text();  
           var type_id = $('#type_id').text();  
		   var description = $('#description').text();  
           var date = $('#date').text(); 
		   var name_manage = $('#name_manage').text();  
           var phone_proj = $('#phone_proj').text(); 
		   var email_proj = $('#email_proj').text();  
           var address = $('#address').text(); 
           if(name_proj == '')  
           {  
                alert("กรุณากรอกชื่อโครงการ");  
                return false;  
           }  
           if(type_id == '')  
           {  
                alert("กรุณากรอกประเภทโครงการ");  
                return false;  
           } 
		if(description == '')  
           {  
                alert("กรุณากรอกคำอธิบาย");  
                return false;  
           }  
           if(date == '')  
           {  
                alert("กรุณากรอกวัน-เวลา ทำการ");  
                return false;  
           }  
		if(name_manage == '')  
           {  
                alert("กรุณากรอกชื่อผู้รับผิดชอบโครงการ");  
                return false;  
           }  
           if(phone_proj == '')  
           {  
                alert("กรุณากรอกหมายเลขโทรศัพท์");  
                return false;  
           }  
			if(email_proj == '')  
           {  
                alert("กรุณากรอกอีเมล");  
                return false;  
           }  
           if(address == '')  
           {  
                alert("กรุณากรอกที่อยู่");  
                return false;  
           }  		   
           $.ajax({  
                url:"insertproject.php",  
                method:"POST",  
                data:{name_proj:name_proj, type_id:type_id, description:description, date:date, name_manage:name_manage, phone_proj:phone_proj, email_proj:email_proj,address:address},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"editproject.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.name_proj', function(){  
           var id = $(this).data("id1");  
           var name_proj = $(this).text();  
           edit_data(id, name_proj, "name_proj");  
      });  
      $(document).on('blur', '.type_id', function(){  
           var id = $(this).data("id2");  
           var type_id = $(this).text();  
           edit_data(id,type_id, "type_id");  
      }); 
		$(document).on('blur', '.description', function(){  
           var id = $(this).data("id3");  
           var description = $(this).text();  
           edit_data(id, description, "description");  
      });  
      $(document).on('blur', '.date', function(){  
           var id = $(this).data("id4");  
           var date = $(this).text();  
           edit_data(id,date, "date");  
      });
	$(document).on('blur', '.name_manage', function(){  
           var id = $(this).data("id5");  
           var name_manage = $(this).text();  
           edit_data(id, name_manage, "name_manage");  
      });  
      $(document).on('blur', '.phone_proj', function(){  
           var id = $(this).data("id6");  
           var phone_proj = $(this).text();  
           edit_data(id,phone_proj, "phone_proj");  
      });
	$(document).on('blur', '.email_proj', function(){  
           var id = $(this).data("id7");  
           var email_proj = $(this).text();  
           edit_data(id, email_proj, "email_proj");  
      });  
      $(document).on('blur', '.address', function(){  
           var id = $(this).data("id8");  
           var address = $(this).text();  
           edit_data(id,address, "address");  
      });	  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id9");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deleteproject.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>