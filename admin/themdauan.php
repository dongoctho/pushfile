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
    $danhmuc = new dauan();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $tenhang=$_POST['tenhang'];
        $soluong=$_POST['soluong'];
        $mahnag=$_POST['mahang'];
        $nhasx=$_POST['nhasx'];
        $mota=$_POST['mota'];
        $giaban=$_POST['giaban'];  
        $taohang = $danhmuc->insert_dauan($tenhang,$soluong,$mahnag,$nhasx,$mota,$giaban);
    }
?>
<div class="row">
<div class="form-add col-lg-12 col-md-12 col-xs-12 col-sm-12">
<style>
.required{
    color: red;
}
</style>

<h3>Thêm mới hàng</h3>
<?php
    if(isset($taohang)){
        echo $taohang;
    }
?>
<form action="" method="POST">
<div class="form-group">
    
    <input type="text" name="tenhang" placeholder="Tên hàng" class="form-control" value="">
    
    <input type="text" name="soluong" placeholder="Số lượng" class="form-control" value="">
    
    <input type="text" name="mahang" placeholder="Mã hàng" class="form-control" value="">
    
    <input type="text" name="nhasx" placeholder="Nhà sản xuất" class="form-control" value="">
   
    <input type="text" name="mota" placeholder="Mô tả" class="form-control" value="">
    
    <input type="text" name="giaban" placeholder="Giá bán" class="form-control" value="">

    <input type="file" name="img" placeholder="Hình ảnh" class="form-control" value="">

    <label>Danh mục</label>
    <select>Danh muc
    <option>mejan</option>
    <option>neptune</option>
</select>

</div>

<input style="font-size: 30px;background-color: rgb(255, 203, 254);" type="submit" name="add" value="Thêm" class="btn btn-primary">
</form>
</div>
</div>
<style>
input{
margin: 20px;
}
</style>
</div>
<br>
<br>
<br>
<?php
   
   include('include/footer.php');  
?>