<?php  
     $connect = mysqli_connect("localhost", "root", "", "punchana");
     move_uploaded_file($_FILES["img"]["tmp_name"],"img/".$_FILES["img"]["name"]);
     $sql = "INSERT INTO project(name_proj, type_id,description,date,name_manage,phone_proj,email_proj,address,banking,img) 
     VALUES('".$_POST["name_proj"]."', '".$_POST["type_id"]."', '".$_POST["description"]."', '".$_POST["date"]."', '".$_POST["name_manage"]."', '".$_POST["phone_proj"]."', '".$_POST["email_proj"]."', '".$_POST["address"]."', '".$_POST["banking"]."', '".$_FILES["img"]["name"]."')";  
     if(mysqli_query($connect, $sql))  
     {    
          header("location: home.php");  
     } else {
          echo 'Error' . mysqli_error();
     }  
?> 