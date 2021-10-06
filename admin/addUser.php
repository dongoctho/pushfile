<?php
include('include/sidebar.php');
include('include/head.php');
?>
            <?php include'../classes/user.php'; ?>
<?php
$user = new user();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    $email = $_POST['email'];
    $insertUser = $user->insert_user($username,$password,$level,$email);
}
 ?>
<div class="row">
    <div class="form-add col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <style>
            .required{
                color: red;
            }
        </style>
       
        <h3>Thêm mới user</h3>
        <?php if(isset($insertUser)){
                echo $insertUser;
            } ?>
        <form action="" method="POST">
        
            <div class="form-group">
                <label style="font-weight:bold"></label>
                <input type="text" name="username" placeholder="Tài khoản" class="form-control" value="">
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control" value="">
                <input type="text" name="level" placeholder="Phân quyền" class="form-control" value="">
                <input type="text" name="email" placeholder="Email" class="form-control" value="">
            </div>
            
            <input type="submit" name="add" value="Thêm" class="btn btn-primary">
        </form>
    </div>
</div>
<!-- <style>
.form-add{
    margin: 20px;
}
</style> -->
            </div>


            <!-- End Navbar -->
<!-- 
<?php include('include/footer.php'); ?>