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
    <?php
    include "../classes/sanpham.php";
?>
                
                <?php
                $dauan = new dauan();
                if (!isset($_GET['id']) || $_GET['id'] == NULL) {
                    echo "<script>window.location='danhsachdauan.php'</script>";
                } else {
                    $id = $_GET['id'];
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $tenhang=$_POST['tenhang'];
                    $soluong=$_POST['soluong'];
                    $mahnag=$_POST['mahang'];
                    $nhasx=$_POST['nhasx'];
                    $mota=$_POST['mota'];
                    $giaban=$_POST['giaban'];  
                    $updatedauan = $dauan->edit_dauan($tenhang,$soluong,$mahnag,$nhasx,$mota,$giaban,$id);
                }

                ?>
                <div class="row">
                    <div class="form-add col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <style>
                            .required {
                                color: red;
                            }
                        </style>

<b><h3 style="margin-left:175px;color: rgb(255, 203, 254);font-size: 50px">Sửa Sản phẩm</h3></b>
                        <?php if (isset($updatedauan)) {
                            echo $updatedauan;
                        } ?>
                        <?php
                        $get_dauan = $dauan-> getSanPham($id);
                        if ($get_dauan) {
                            while ($result = $get_dauan->fetch_assoc()) {
                        ?>
                        <form name="" action="" method="POST">

                        <div class="form-group">
                        <label style="font-weight:bold">Sửa sản phẩm</label>
                        <input type="text" value="<?php echo $result['tenhang']; ?>" name="tenhang" placeholder="Tên hàng" class="form-control" value="">
                        <input type="text" value="<?php echo $result['soluong']; ?>" name="soluong" placeholder="Số lượng" class="form-control" value="">
                        <input type="text" value="<?php echo $result['mahang']; ?>" name="mahang" placeholder="Mã hàng" class="form-control" value="">
                        <input type="text" value="<?php echo $result['nhasx']; ?>" name="nhasx" placeholder="Nhà sản xuất" class="form-control" value="">
                        <input type="text" value="<?php echo $result['mota']; ?>" name="mota" placeholder="Mô tả" class="form-control" value="">
                        <input type="text" value="<?php echo $result['giaban']; ?>" name="giaban" placeholder="Giá bán" class="form-control" value="">
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

        