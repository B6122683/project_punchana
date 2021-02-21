<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $sql = "INSERT INTO project(name_proj, type_id,description,date,name_manage,phone_proj,email_proj,address) 
 VALUES('".$_POST["name_proj"]."', '".$_POST["type_id"]."', '".$_POST["description"]."', '".$_POST["date"]."'
 , '".$_POST["name_manage"]."', '".$_POST["phone_proj"]."', '".$_POST["email_proj"]."', '".$_POST["address"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 