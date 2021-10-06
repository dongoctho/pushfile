<?php
include_once "../helpers/format.php";
include_once "../library/database.php"; 
?>
<?php 
    class danhmuc{
        private $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_danhmuc($tendanhmuc,$motadanhmuc){
            $tendanhmuc = $this->fm->validation($tendanhmuc);
            $motadanhmuc = $this->fm->validation($motadanhmuc);
            $tendanhmuc = mysqli_real_escape_string($this->db->link,$tendanhmuc);
            $motadanhmuc = mysqli_real_escape_string($this->db->link,$motadanhmuc);
            if(empty($tendanhmuc)||empty($motadanhmuc)){
                $alert = "Tên danh mục hoặc mô tả không được bỏ trống";
                return $alert;
            }
            else{
                $query = "INSERT INTO tbl_danhmuc(tendanhmuc,motadanhmuc) VALUES ('$tendanhmuc','$motadanhmuc')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span class='success' style='color:green,font-weight:bold'>Thêm mới thành công!</span>";
                    return $alert;
                }
                else{
                    $alert = "<span class='error' style='color:red,font-weight:bold'>Thêm mới thất bại!</span>";
                    return $alert;
                }
            }
        }
        public function show_dm(){
            $query = "SELECT * FROM tbl_danhmuc ORDER BY id";
            $result = $this->db->select($query);
             return $result;
        }
        public function delete_danhmuc($id){
            $query = "DELETE FROM tbl_danhmuc WHERE id='$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert ="<span class='success' style='color:green;font-weight=bold'>Xoá thành công</span>";
                return $alert;
            }
            else{
                $alert ="<span class='error' style='color:red;font-weight=bold'>Xoá thất bại</span>";
                return $alert;
            }
        }
        public function update_danhmuc($id,$tendanhmuc,$motadanhmuc){
            $tendanhmuc = $this->fm->validation($tendanhmuc);
            $motadanhmuc = $this->fm->validation($motadanhmuc);
            $id = mysqli_real_escape_string($this->db->link, $id);
            $tendanhmuc = mysqli_real_escape_string($this->db->link, $tendanhmuc);
            $motadanhmuc = mysqli_real_escape_string($this->db->link, $motadanhmuc);
            if(empty($tendanhmuc)||empty($motadanhmuc)){
                $alert = "Tên danh mục và mô tả không được để trống";
                return $alert;
            }
            else{
                $query = "UPDATE tbl_danhmuc SET tendanhmuc = '$tendanhmuc',
                 motadanhmuc = '$motadanhmuc' WHERE id ='$id'";
                 $result = $this->db->update($query);
                 if($result){
                    $alert ="<span class='success' style='color:green;font-weight=bold'>Sửa thành công</span>";
                    return $alert;
                }
                else{
                    $alert ="<span class='error' style='color:red;font-weight=bold'>Sửathất bại</span>";
                    return $alert;
                }
            }
        }
    }
?>