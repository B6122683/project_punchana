<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $output = '';  
 $sql = "SELECT * FROM project ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped table-hover">  
                <tr>  
                     <th width="10%">ลำดับ</th>  
                     <th width="40%">ชื่อโครงการ</th>  
                     <th width="20%">ประเภทโครงการ</th> 
					<th width="80%">คำอธิบาย</th> 					 
                     <th width="50%">วัน-เวลา ทำการ</th>  
					 <th width="30%">ผู้รับผิดชอบโครงการ</th>
					 <th width="30%">หมายเลขโทรศัพท์</th>
					 <th width="30%">อีเมล</th>
					 <th width="30%">ที่อยู่</th>
					 <th width="10%">ลบ</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name_proj" data-id1="'.$row["id"].'" contenteditable>'.$row["name_proj"].'</td>  
                     <td class="type_id" data-id2="'.$row["id"].'" contenteditable>'.$row["type_id"].'</td>  
					 <td class="description" data-id3="'.$row["id"].'" contenteditable>'.$row["description"].'</td>
					 <td class="date" data-id4="'.$row["id"].'" contenteditable>'.$row["date"].'</td>
					 <td class="name_manage" data-id5="'.$row["id"].'" contenteditable>'.$row["name_manage"].'</td>
					 <td class="phone_proj" data-id6="'.$row["id"].'" contenteditable>'.$row["phone_proj"].'</td>
					 <td class="email_proj" data-id7="'.$row["id"].'" contenteditable>'.$row["email_proj"].'</td>
					 <td class="address" data-id8="'.$row["id"].'" contenteditable>'.$row["address"].'</td>
                     <td><button type="button" name="delete_btn" data-id9="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name_proj" contenteditable></td>  
                <td id="type_id" contenteditable></td> 
				 <td id="description" contenteditable></td> 
				  <td id="date" contenteditable></td> 
				   <td id="name_manage" contenteditable></td> 
				    <td id="phone_proj" contenteditable></td> 
					 <td id="email_proj" contenteditable></td> 
					  <td id="address" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
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