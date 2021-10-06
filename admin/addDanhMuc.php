<?php
include "include/sidebar.php";
include "include/head.php";
?>
<?php include "../classes/danhmuc.php"; ?>
<?php 
    $danhmuc = new danhmuc();
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $tendanhmuc = $_POST['tendanhmuc'];
        $motadanhmuc = $_POST['motadanhmuc'];
        $taodanhmuc = $danhmuc->insert_danhmuc($tendanhmuc,$motadanhmuc);
    }
?>
<div class="row">
    <div class="form-add col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <style>
            .required{
                color: red;
            }
        </style>
        <h3>Thêm mới danh mục</h3>
        <?php
        if(isset($taodanhmuc)){
            echo $taodanhmuc;
        }
        ?>
        <hr/>
        <form action="" method="POST">
        
            <div class="form-group">
                <label style="font-weight:bold">Tên danh mục</label>
                <input type="text" name="tendanhmuc" placeholder="Tên danh mục" class="form-control" value="">
                <label style="font-weight:bold">Mô tả danh mục</label>
                <input type="text" name="motadanhmuc" placeholder="Mô tả danh mục" class="form-control" value="">
            </div>
            <input type="submit" name="add" value="Thêm" class="btn btn-primary">
        </form>
    </div>
</div>
<style>
input{
    margin: 20px;
}
</style>
</div>

<?php include "include/footer.php"; ?>