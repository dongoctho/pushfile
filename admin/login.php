<?php
include '../classes/adminlogin.php';
?>
<?php
$class = new adminlogin();
if($_SERVER['REQUEST_METHOD'] ==='POST'){ 
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $login_check = $class->login_admin($username, $password); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style3.css">
</head>
<style>
    input {
        margin: auto;
        margin-top: 30px;
    }
</style>
<body style="background-image: url('../images/noi9.jpg');">

  <div class="col-md-3" style=" border: 1px solid rgb(118, 255, 250);border-radius: 15px;margin-left:650px;margin-top:420px; background-color: rgb(80, 167, 255);">
        <h2 style="text-align: center;color: white;font-weight: bold;">LOGIN</h2>
    </div>   

        <span>
        <?php 
        if(isset($login_check)){
            echo "<script type='text/javascript'>alert('$login_check');</script>";
        }
        ?>
    </span>
    
    <div class="container">
        <div class="row">
            <form style="width:600px; margin-left:470px;" action="login.php" method="POST">
            <input style="height:35px" class="input100 col-md-7" name="username" type="text" placeholder="Nhập vào tài khoản"/>
            <input style="height:35px" class="input100 col-md-7" name="password" type="password" placeholder="Nhập vào mật khẩu"/>
            <input type="submit" class="btn btn-primary col-md-7" style="background-color: rgb(245, 121, 232);height:35px" value="Đăng nhập"/>
            </form>
        </div>
    </div>
      
</body>
</html>