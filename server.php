<?php
    $username = "";
    $phone = "";
    $email = "";
    $user_type = "";
    $errors = array();

    
    $db = mysqli_connect('localhost','root','','punchana');

    if (isset($_POST['submit'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $user_type = mysqli_real_escape_string($db, $_POST['user_type']);

        if(empty($username)){
            array_push($errors, "username is required");
        }
        if(empty($phone)){
            array_push($errors, "phone is required");
        }
        if(empty($email)){
            array_push($errors, "email is required");
        }
        if(empty($password)){
            array_push($errors, "password is required");
        }
        if(empty($user_type)){
            array_push($errors, "usertype is required");
        }
        
        if(count($errors) == 0){
            $password = md5($password);
            $sql = "INSERT INTO users (username, phone, email, password, user_type ) VALUES('$username','$phone','$email','$password','$user_type')";
            mysqli_query($db, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

    //log user in from login page
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                //log user in
                $row = mysqli_fetch_array($result);

                $_SESSION["username"] = $row["username"];
                $_SESSION["password"] = $row["password"];
                $_SESSION["user_type"] = $row["user_type"];

			if ($_SESSION["user_type"] == "admin") {
				//$_SESSION['username'] = $username;
				$_SESSION['success']  = "You are now logged in";
				header("location: dashboard.php");		  
			}
            if ($_SESSION["user_type"] == "user") {
				//$_SESSION['username'] = $username;
				$_SESSION['success']  = "You are now logged in";
				header("location: index.php");
			}
		}else {
			array_push($errors, "Wrong username/password combination");
        }
    }


        if(empty($username)){
            array_push($errors, "Username is required");
            
        }
        if(empty($password)){
            array_push($errors, "password is required");
        }
   
} //**** */

     
    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>