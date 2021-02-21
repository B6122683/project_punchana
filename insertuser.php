<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $sql = "INSERT INTO users(username, phone, email) VALUES('".$_POST["username"]."', '".$_POST["phone"]."', '".$_POST["email"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 