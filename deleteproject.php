<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $sql = "DELETE FROM project WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'ลบข้อมูลสำเร็จ';  
 }  
 ?>