<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "punchana");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM project 
  WHERE name_proj LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "
  SELECT * FROM project ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th width="20%">โครงการ</th>
     <th width="20%">รูปภาพ</th>
	 <th width="40%">รายละเอียด</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name_proj"].'</td>
    <td><img src="img/'.$row["img"].'"style="width:300px;"></td>
	<td>'.$row["description"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>