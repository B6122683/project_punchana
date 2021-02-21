<?php include('server.php'); ?>
<!DOCTYPE html>
<html style="background-image:url('images/demo/backgrounds/bg5.png');">
<head>
    <title>USER LOGIN</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
    <!-- Top Background Image Wrapper -->

    <div class="header">
        <h2 color="red">เข้าสู่ระบบ</h2>
        </div>
    <form method="post" action="login.php">
          <!-- display validation errors here-->
          <?php include('errors.php'); ?>
        <div class="input-group">
            <label>ชื่อผู้ใช้</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
         <div class="input-group">
            <button type="submit" name="login" class="btn">เข้าสู่ระบบ</button>
        </div>
        &nbsp;
        <p>
            ยังไม่เป็นสมาชิก ? <a href="register.php">สมัครสมาชิก</a>
        </p>
    </form>

</body>
</html>