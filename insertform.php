<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>แบบฟอร์มโครงการ</title>
</head>
<body>
<?php
//print_r($_POST);
// connect to the database
$conn=mysqli_connect("localhost", "root", "","punchana");
$conn->query("SET NAMES UTF8");
if (($_POST["name_proj"] <> "") && ($_POST["type_id"] <> "") && 
 ($_POST["description"] <> "")&& ($_POST["date"] <> "")&& ($_POST["name_manage"] <> "")&& ($_POST["phone_proj"] <> "")&& ($_POST["email_proj"] <> "")
 && ($_POST["address"] <> "")&& ($_POST["img"] <> ""))
 
{
$name_j = $_POST['name_proj'];
$type_j = $_POST['type_id'];
$des = $_POST['description'];
$date = $_POST['date'];
$name_m = $_POST['name_manage'];
$phone = $_POST['phone_proj'];
$email = $_POST['email_proj'];
$add = $_POST['address'];
$img = $_POST['img];
} else exit("คุณยังกรอกข้อมูลไม่ครบ!");
$sql="insert into project(name_proj, type_id, description,date, name_manage, phone_proj, email_proj, address, img)
 values('$name_j','$$type_j','$des','$date','$name_m','$phone ','$email','$add','$img')";
$rs=$conn->query($sql);
echo "Insertion Successfully!!";
$conn->close();
?>
<p><a href="viewuser.php"></a></p>
</body>
</html>