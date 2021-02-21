<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $sql = "DELETE FROM users WHERE id = '".$_GET["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>