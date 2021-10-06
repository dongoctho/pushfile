
         <?php
    include('include/sidebar.php');
    include('include/head.php');
?>   
                <?php include '../classes/user.php'; ?>
                <?php
                $user = new user();

                if (isset($_GET['deluserid'])) {
                    $id = $_GET['deluserid'];
                    $delid = $user->delete_user($id);
                }


                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 style="color: rgb(255, 251, 145);font-size: 40px">Danh sách tài khoản</h3>
                        <?php
                        if (isset($delid)) {
                            echo $delid;
                        }
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tài khoản</th>
                                    <th>Quyền</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $show_user = $user->show_user();
                                if ($show_user) {
                                    $i = 0;
                                    while ($result = $show_user->fetch_assoc()) {
                                        $i++;
                                ?>
                                        <tr>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['username']; ?></td>
                                            <td><?php 
                                            if($result['level']==1){
                                                echo "Admin";
                                            }
                                            else{
                                                echo "User";
                                            }
                                            ?></td>
                                            <td align="center"><a href="editUser.php?id=<?php echo $result['id']; ?>"><img width="16" src="../images/edit.png" alt=""></a></td>
                                            <td align="center"><a onclick="return confirm('Bạn muốn xoá file này?');" href="?deluserid=<?php echo $result['id']; ?>"><img width="16" src="../images/delete.png" alt=""></a></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php
   
   include('include/footer.php');  
?>

           