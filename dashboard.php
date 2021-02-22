<!DOCTYPE html>
<html lang="">
<head>
<title>โครงการปันชนะ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">

        <h1><img src="images/logo4.png" alt="" ><a href="dashboard.php">PunChaNa</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="dashboard.php">หน้าหลัก</a></li>
          <li><a href="user.php">ข้อมูลผู้บริจาค</a></li>
          <li><a href="admin.php">ข้อมูลแอดมิน</a></li>
          <li><a href="report.php">รายงาน</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">โครงการทั้งหมดของปันชนะ</h6>
     
    </div>
    <div  id="live_data" ></div>  
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading"><img src="images/logo4.png" alt="" >PunChaNa</h6>
      <p>จะเป็นใครไม่สำคัญ ร่วมมือกันผ่านปันชนะ</p>
      <p class="btmspace-50">มาร่วมมือกันสร้างผลกระทบทางสังคมอันยิ่งใหญ่ ส่งต่อความช่วยเหลือกว้างไกลทั่วประเทศผ่านเว็บไซต์ปันชนะ</p>
      <nav>
        <ul class="nospace">
          <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="user.php">ข้อมูลผู้บริจาค</a></li>
          <li><a href="admin.php">ข้อมูลแอดมิน</a></li>
          <li><a href="report.php">รายงาน</a></li>
          
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">ติดต่อเรา</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          มหาวิทยาลัยเทคโนโลยีสุรนารี &amp; 111,ถนนมหาวิทยาลัย, ตำบลสุรนารี อำเภอเมือง จังหวัดนครราชสีมา 30000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 0-4422-3000</li>
        <li><i class="fa fa-fax"></i> 0-4422-4070</li>
        <li><i class="fa fa-envelope-o"></i> punchana@g.sut.ac.th</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
        
      </ul>
    </div>
   
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="dashboard.php">PunChaNa</a></p>
    <p class="fl_right">PunChaNa by Groups 3</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"selectproject.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var name_proj = $('#name_proj').text();  
           var type_id = $('#type_id').text();  
		   var description = $('#description').text();  
           var date = $('#date').text(); 
		   var name_manage = $('#name_manage').text();  
           var phone_proj = $('#phone_proj').text(); 
		   var email_proj = $('#email_proj').text();  
           var address = $('#address').text(); 
           if(name_proj == '')  
           {  
                alert("กรุณากรอกชื่อโครงการ");  
                return false;  
           }  
           if(type_id == '')  
           {  
                alert("กรุณากรอกประเภทโครงการ");  
                return false;  
           } 
		if(description == '')  
           {  
                alert("กรุณากรอกคำอธิบาย");  
                return false;  
           }  
           if(date == '')  
           {  
                alert("กรุณากรอกวัน-เวลา ทำการ");  
                return false;  
           }  
		if(name_manage == '')  
           {  
                alert("กรุณากรอกชื่อผู้รับผิดชอบโครงการ");  
                return false;  
           }  
           if(phone_proj == '')  
           {  
                alert("กรุณากรอกหมายเลขโทรศัพท์");  
                return false;  
           }  
			if(email_proj == '')  
           {  
                alert("กรุณากรอกอีเมล");  
                return false;  
           }  
           if(address == '')  
           {  
                alert("กรุณากรอกที่อยู่");  
                return false;  
           }  		   
           $.ajax({  
                url:"insertproject.php",  
                method:"POST",  
                data:{name_proj:name_proj, type_id:type_id, description:description, date:date, name_manage:name_manage, phone_proj:phone_proj, email_proj:email_proj,address:address},  
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
                url:"editproject.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.name_proj', function(){  
           var id = $(this).data("id1");  
           var name_proj = $(this).text();  
           edit_data(id, name_proj, "name_proj");  
      });  
      $(document).on('blur', '.type_id', function(){  
           var id = $(this).data("id2");  
           var type_id = $(this).text();  
           edit_data(id,type_id, "type_id");  
      }); 
		$(document).on('blur', '.description', function(){  
           var id = $(this).data("id3");  
           var description = $(this).text();  
           edit_data(id, description, "description");  
      });  
      $(document).on('blur', '.date', function(){  
           var id = $(this).data("id4");  
           var date = $(this).text();  
           edit_data(id,date, "date");  
      });
	$(document).on('blur', '.name_manage', function(){  
           var id = $(this).data("id5");  
           var name_manage = $(this).text();  
           edit_data(id, name_manage, "name_manage");  
      });  
      $(document).on('blur', '.phone_proj', function(){  
           var id = $(this).data("id6");  
           var phone_proj = $(this).text();  
           edit_data(id,phone_proj, "phone_proj");  
      });
	$(document).on('blur', '.email_proj', function(){  
           var id = $(this).data("id7");  
           var email_proj = $(this).text();  
           edit_data(id, email_proj, "email_proj");  
      });  
      $(document).on('blur', '.address', function(){  
           var id = $(this).data("id8");  
           var address = $(this).text();  
           edit_data(id,address, "address");  
      });	  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id9");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deleteproject.php",  
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