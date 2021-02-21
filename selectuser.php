<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $output = '';  
 $sql = "SELECT * FROM users ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped table-hover">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Username</th>  
                     <th width="40%">Phone</th> 
                     <th width="40%">Email</th>  
                  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" >'.$row["username"].'</td>  
                     <td class="phone" data-id2="'.$row["id"].'" >'.$row["phone"].'</td> 
                     <td class="email" data-id3="'.$row["id"].'" >'.$row["email"].'</td>  
                     
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="username" ></td>  
                <td id="phone" ></td>  
                <td id="email" ></td>  
                
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