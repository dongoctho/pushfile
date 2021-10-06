<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm đơn hàng</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
    .menu ul li a { 
        color:tomato;
    }
</style>
<body>
<header style="background-color:khaki;">
        <div class="container">
            <div class="row">
                <div class="col-md-2 menu">
                    <img width="300px" src="../images/1454px-Lazada_(2019).svg.png" alt="">
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-8 menu">
                    <ul>
                    <li><a href="../index.php">Trang chủ</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="../admin/danhsachdauan.php">Sản phẩm </a></li>
                        <li><a href="../admin/login.php">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
                <?php include '../classes/sanpham.php'; ?>
                <?php
                $dauan = new dauan();

                if (isset($_GET['deluserid'])) {
                    $id = $_GET['deluserid'];
                    $delid = $dauan->delete_dauan($id);
                }


                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 style="color: rgb(255, 251, 145);font-size: 40px">Danh sách sản phẩm</h3>
                        <?php
                        if (isset($delid)) {
                            echo $delid;
                        }
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên hàng</th>
                                    <th>Số lượng</th>
                                    <th>Mã hàng</th>
                                    <th>Nhà sản xuất</th>
                                    <th>Mô tả</th>
                                    <th>Giá bán</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $show_dauan = $dauan->show_dauan();
                                if ($show_dauan) {
                                    $i = 0;
                                    while ($result = $show_dauan->fetch_assoc()) {
                                        $i++;
                                ?>
                                        <tr>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['tenhang']; ?></td>
                                            <td><?php echo $result['soluong']; ?></td>
                                            <td><?php echo $result['mahang']; ?></td>
                                            <td><?php echo $result['nhasx']; ?></td>
                                            <td><?php echo $result['mota']; ?></td>
                                            <td><?php echo $result['giaban']; ?></td>

                                            <td align="center"><a href="suadauan.php?id=<?php echo $result['id']; ?>"><img width="16" src="../images/edit.png" alt=""></a></td>
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
<div style="margin-top: 400px;">
<?php
   
   include('include/footer.php');  
?>

</div>
            
           