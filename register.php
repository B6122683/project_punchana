<?php include('server.php'); ?>
<!DOCTYPE html>
<html style="background-image:url('images/demo/backgrounds/bg5.png');">
<head>
    <title>USER REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
    <div class="header">
        <h2>สมัครสมาชิก</h2>
        </div>
    <form method="post" action="register.php">
        <!-- display validation -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>ชื่อผู้ใช้</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>เบอร์โทรศัพท์</label>
            <input type="text" name="phone">
        </div>
        <div class="input-group">
            <label>อีเมลล์</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>รหัสผ่าน</label>
            <input type="password" name="password">
        </div>


        <div class="input-group">
        <label for="user_type">ประเภทผู้ใช้ </label>
        <select name="user_type" id="user_type" style="width:97%; font-size: 13px; min-height: 30px; margin-bottom:3.0%;">
            <option value="other">---</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
        
        </select>
</div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">สมัครสมาชิก</button>
        </div>
       
        &nbsp;
        <p>
            เป็นสมาชิกแล้ว? <a href="login.php">เข้าสู่ระบบ</a>
        </p>
    </form>
</body>
</html>