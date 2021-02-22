<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $output = '';  
 $sql = "SELECT * FROM project ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped table-hover">  
                <tr> 
                    <th width="15%">ชื่อโครงการ</th>
				<th width="30%">คำอธิบาย</th> 					 
                    <th width="10%">วัน-เวลา ทำการ</th>
				<th width="10%">หมายเลขโทรศัพท์</th>
				<th width="30%">ที่อยู่</th>
				<th width="5%">ลบ</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class="name_proj" data-id1="'.$row["id"].'" contenteditable>'.$row["name_proj"].'</td>
					 <td class="description" data-id3="'.$row["id"].'" contenteditable>'.$row["description"].'</td>
					 <td class="date" data-id4="'.$row["id"].'" contenteditable>'.$row["date"].'</td>
					 <td class="phone_proj" data-id6="'.$row["id"].'" contenteditable>'.$row["phone_proj"].'</td>
					 <td class="address" data-id8="'.$row["id"].'" contenteditable>'.$row["address"].'</td>
                     <td><button type="button" name="delete_btn" data-id9="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>