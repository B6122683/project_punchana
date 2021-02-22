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
                url:"selectuser.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var username = $('#username').text();  
           var phone = $('#phone').text();  
           var email = $('#email').text(); 
           if(username == '')  
           {  
                alert("Enter UserName");  
                return false;  
           }  
           if(phone == '')  
           {  
                alert("Enter Phone");  
                return false;  
           } 
           if(email == '')  
           {  
                alert("Enter Email");  
                return false;  
           }  
           $.ajax({  
                url:"insertuser.php",  
                method:"POST",  
                data:{username:username, phone:phone, email:email},  
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
                url:"edituser.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.username', function(){  
           var id = $(this).data("id1");  
           var username = $(this).text();  
           edit_data(id, username, "username");  
      });  
      $(document).on('blur', '.phone', function(){  
           var id = $(this).data("id2");  
           var phone = $(this).text();  
           edit_data(id,phone, "phone");  
      });
      $(document).on('blur', '.email', function(){  
           var id = $(this).data("id3");  
           var email = $(this).text();  
           edit_data(id,email, "email");  
      });   
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id4");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deleteuser.php",  
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