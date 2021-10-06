<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website của Tho</title>
    <link rel="stylesheet" href="../webbb/css/bootstrap.min.css">
    <link rel="stylesheet" href="../webbb/css/style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
    .menu ul li a { 
        color: red;
    }
</style>
<body>
    <header style="background-color:khaki;">
        <div class="container">
            <div class="row">
                <div class="col-md-2 menu">
                    <img width="300px" src="../webb/images/1454px-Lazada_(2019).svg.png" alt="">
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-8 menu">
                    <ul>
                        <li><a href="../webbb/index.php">Trang chủ</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="../webbb/admin/danhsachdauan.php">Sản phẩm </a></li>
                        <li><a href="admin/login.php">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========================CONTENT=================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img style="margin-left: 300px;"  width="500px" src="../webb/images/dau-an-3.jpg" alt="">
            </div>
            <hr style="margin-top: 30px;">

            <div class="row">
            <div class="col-md-4 sidebar">
                    <style>
                        .sidebar ul li {
                            list-style-type: circle;
                        }
                        
                        .sidebar ul li a {
                            text-decoration: none;
                        }
                        
                        .sidebar {
                            font-size: 20px;
                        }
                    </style>
                    <h2>Loại hàng</h2>
                    <hr style="margin-top: 30px;">
                    <ul>
                        <li><a href="../webbb/mejan.php">Dầu ăn mejan</a> </li>
                        <li><a href="../webbb/neptune.php">Dầu ăn neptune</a> </li>
                        
                    </ul>
                </div>
                <div class="col-md-8 content">
                    <h2>Sản phẩm</h2>
                    <br>
                    <div class="row allproduct">
                        <style>
                            .product a {
                                text-decoration: none;
                            }
                            
                            .product {
                                font-family: Arial, Helvetica, sans-serif;
                                font-size: 20px;
                            }
                        </style>

                        <div class="col-md-3 product">
                            <img width="100%" src="../webb/images/dau-an-1.jpg" alt="">
                            <p>DAU AN NEPTUNE</p>
                            <p>Giá: 200,000Đ</p>
                            <a href="../webbb/admin/themdauan.php"> <span class="glyphicon glyphicon-shopping-cart"> &nbsp;Thêm vào giỏ hàng</span></a>
                        </div>
                        <div class="col-md-3 product">
                            <img width="100%" src="../webb/images/dau-an-2.jpg" alt="">
                            <p>DAU AN MEJAN</p>
                            <p>Giá: 200,000Đ</p>
                            <a href="../webbb/admin/themdauan.php"> <span class="glyphicon glyphicon-shopping-cart"> &nbsp;Thêm vào giỏ hàng</span></a>
                        </div>
                       
                    </div>
                    <!-- SẢN PHẨM BÁN CHẠY -->
                    <hr style="margin-top: 30px;">
                    <h2>Sản phẩm bán chạy</h2>
                    <div class="row">
                    <div class="col-md-3 product">
                            <img width="100%" src="../webb/images/dau-an-1.jpg" alt="">
                            <p>DAU AN NEPTUNE</p>
                            <p>Giá: 200,000Đ</p>
                            <a href="../webbb/admin/themdauan.php"> <span class="glyphicon glyphicon-shopping-cart"> &nbsp;Thêm vào giỏ hàng</span></a>
                        </div>
                        <div class="col-md-3 product">
                            <img width="100%" src="../webb/images/dau-an-2.jpg" alt="">
                            <p>DAU AN MEJAN</p>
                            <p>Giá: 200,000Đ</p>
                            <a href="../webbb/admin/themdauan.php"> <span class="glyphicon glyphicon-shopping-cart"> &nbsp;Thêm vào giỏ hàng</span></a>
                        </div>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- =======================END CONTENT================= -->

    <footer class="footer">
        <div class="container-fluid">
            <nav>
                <p class="copyright text-center">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="https://www.facebook.com/profile.php?id=100009337852694">Jarvis</a>, made with love
                </p>
            </nav>
        </div>
    </footer>
</body>

</html>