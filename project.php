<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="">
<head>
<title>ปันชนะ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />




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
          <li><a href="user.php">ข้อมูลสมาชิก</a></li>
          <li><a href="report.php">รายงาน</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">สรุปรายงานโครงการทั้งหมด</h6>
    </div>
    <div id="id01"></div>

    <script>
      var xmlhttp = new XMLHttpRequest();
      var url = "fetchproject.php";

      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              myFunction(this.responseText);
          }
      }
      xmlhttp.open("POST", url, true);
      xmlhttp.send();

      function myFunction(response) {
          var arr = JSON.parse(response);
          var i;
          var out = "<table><tr><th width='200px'>ชื่อโครงการ</th><th width='200px'>ผู้จัดโครงการ</th><th width='50px'>หมายเลขโทรศัพท์</th></tr>";

          for(i = 0; i < arr.length; i++) {
              out += "<tr><td>" +
              arr[i].Name +
              "</td><td>" +
              arr[i].Manager +
              "</td><td>" +
              arr[i].Phone +
              "</td></tr>";
          }
          out += "</table>";
          document.getElementById("id01").innerHTML = out;
      }
    </script>  
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
          <li><a href="home.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="project.php">ส่งโครงการ</a></li>
          <li><a href="contact.html">ติดต่อเรา</a></li>
         
          
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
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">PunChaNa</a></p>
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

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>