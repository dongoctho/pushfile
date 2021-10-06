<?php include "include/sidebar.php";
    include "include/head.php";
?>
<?php include "../classes/danhmuc.php" ?>
<?php 
    $list = new danhmuc();
    if(isset($_GET['deldanhmucid'])){
        $id = $_GET['deldanhmucid'];
        $deldanhmuc = $list->delete_danhmuc($id);
    }
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Danh sách danh mục</h3>
        <?php if (isset($deldanhmuc)) {
                            echo $deldanhmuc;
                        }
                        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả danh mục</th>
                    <th>Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php $show_dm = $list->show_dm();
                if ($show_dm) { 
                    $i = 0;
                    while ($result = $show_dm->fetch_assoc()) {
                        $i++;
                                ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['tendanhmuc']; ?></td>
                    <td><?php echo $result['motadanhmuc'] ?></td>
                    <td align="center"><a href="editDanhMuc.php?id=<?php echo $result['id']; ?>"><img width="16"
                                src="../images/edit.png" alt=""></a></td>
                    <td align="center"><a onclick="return confirm('Bạn muốn xoá file này?');"
                            href="?deldanhmucid=<?php echo $result['id']; ?>"><img width="16" src="../images/delete.png"
                                alt=""></a></td>
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
<?php include "include/footer.php"; ?>