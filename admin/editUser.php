<?php
    include('include/sidebar.php');
    include('include/head.php');
?>

                <?php include '../classes/user.php'; ?>
                
                <?php
                $user = new user();
                if (!isset($_GET['id']) || $_GET['id'] == NULL) {
                    echo "<script>window.location='listuser.php'</script>";
                } else {
                    $id = $_GET['id'];
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $_POST['username'];
                    $password = md5($_POST['username']);
                    $level = $_POST['level'];
                    $email = $_POST['email'];
                    $updateUser = $user->edit_user($username, $password, $level,$id,$email);
                }

                ?>
                <div class="row">
                    <div class="form-add col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <style>
                            .required {
                                color: red;
                            }
                        </style>

<b><h3 style="margin-left:175px;color: rgb(255, 203, 254);font-size: 50px">Sửa user</h3></b>
                        <?php if (isset($updateUser)) {
                            echo $updateUser;
                        } ?>
                        <?php
                        $get_user_name = $user->getuserbyId($id);
                        if ($get_user_name) {
                            while ($result = $get_user_name->fetch_assoc()) {
                        ?>
                                <form name="" action="" method="POST">

                                    <div class="form-group">
                                        <label style="font-weight:bold"></label>
                                        <input type="text" value="<?php echo $result['username']; ?>" name="username" placeholder="Tài Khoản" class="form-control" value="">
                                        <input type="password" name="password" placeholder="Mật khẩu" class="form-control" value="">
                                        <input type="text" value="<?php echo $result['level']; ?>" name="level" placeholder="Phân quyền" class="form-control" value="">
                                        <input type="text" value="<?php echo $result['email']; ?>" name="email" placeholder="Email" class="form-control" value="">

                                    </div>

                                    <input style="font-size: 30px;background-color: rgb(255, 203, 254);" type="submit" name="add" value="Sửa" class="btn btn-primary">
                                </form>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
                <!-- <style>
                    .form-add {
                        margin: 20px;
                    }
                </style> -->
            </div>
            <?php
   
    include('include/footer.php');  
?>

        