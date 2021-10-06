<?php
include_once "../helpers/format.php";
include_once "../library/database.php";
?>
<?php
class dauan{
    private $db;
    private $fm;
    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();

    }
    public function insert_dauan($tenhang,$soluong,$mahang,$nhasx,$mota,$giaban){
        $tenhang = $this->fm->validation($tenhang);
        $soluong = $this->fm->validation($soluong);
        $mahang = $this->fm->validation($mahang);
        $nhasx = $this->fm->validation($nhasx);
        $mota = $this->fm->validation($mota);
        $giaban = $this->fm->validation($giaban);

        $tenhang =  mysqli_real_escape_string($this->db->link,$tenhang);
        $soluong =  mysqli_real_escape_string($this->db->link,$soluong);
        $mahang =  mysqli_real_escape_string($this->db->link,$mahang);
        $nhasx =  mysqli_real_escape_string($this->db->link,$nhasx);
        $mota =  mysqli_real_escape_string($this->db->link,$mota);
        $giaban =  mysqli_real_escape_string($this->db->link,$giaban);


        if(empty($tenhang)||empty($soluong)||empty($mahang)||empty($nhasx)||empty($mota)||empty($giaban)){
            $alert = "Không được bỏ trống!";
            return $alert;
        }
        else{
            $query = "INSERT INTO tb_dauan(tenhang,soluong,mahang,nhasx,mota,giaban) VALUES ('$tenhang','$soluong','$mahang','$nhasx','$mota','$giaban')";
            $result = $this->db->insert($query);
            if($query){
                $alert = "<span class='success' style='color:yellow,font-weigth:bold'>Thêm mới thành công!</span>";
                return $alert;
            }else{
                $alert = "<span class='error' style='color:red,font-weigth:bold'>Thêm mới thất bại!</span>";
                return $alert;
            }
        }
    }
    public function edit_dauan($tenhang,$soluong,$mahang,$nhasx,$mota,$giaban,$id){
        $tenhang = $this->fm->validation($tenhang);
        $soluong = $this->fm->validation($soluong);
        $mahang = $this->fm->validation($mahang);
        $nhasx = $this->fm->validation($nhasx);
        $mota = $this->fm->validation($mota);
        $giaban = $this->fm->validation($giaban);

        $tenhang =  mysqli_real_escape_string($this->db->link,$tenhang);
        $soluong =  mysqli_real_escape_string($this->db->link,$soluong);
        $mahang =  mysqli_real_escape_string($this->db->link,$mahang);
        $nhasx =  mysqli_real_escape_string($this->db->link,$nhasx);
        $mota =  mysqli_real_escape_string($this->db->link,$mota);
        $giaban =  mysqli_real_escape_string($this->db->link,$giaban);

        if(empty($tenhang)||empty($soluong)||empty($mahang)||empty($nhasx)||empty($mota)||empty($giaban)){
            $alert = "Không được bỏ trống!";
            return $alert;
        } else {
            $query = "UPDATE tb_dauan SET tenhang='$tenhang',soluong='$soluong',mahang='$mahang',nhasx='$nhasx',mota='$mota',giaban='$giaban' WHERE id = '$id'";
            $result = $this->db->update($query);

            if ($result) {
                $alert = "<span class='success' style = 'color:green; font-weight:bold'>Sửa " . $tenhang . " thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error' style = 'color:red; font-weight:bold'>Thất bại</span>";
                return $alert;
            }
        }
    }
    public function show_dauan(){
        $query = "SELECT * FROM tb_dauan ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function getSanPham($id)
    {
        $query = "SELECT * FROM tb_dauan WHERE id ='$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_dauan($id){
        $query = "DELETE FROM tb_dauan WHERE id ='$id'";
        $result = $this->db->delete($query);
        
        if ($result) {
            $alert = "<span class='success' style = 'color:green; font-weight:bold'>Xoá thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error' style = 'color:red; font-weight:bold'>Thất bại</span>";
            return $alert;
        }
    }

}
?>