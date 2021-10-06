<?php 
include_once ('../library/database.php');
include_once ('../helpers/format.php');
?>
<?php 
class user{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_user($username,$password,$level,$email)
    {
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);
        $level = $this->fm->validation($level);
        $email = $this->fm->validation($email);
        $username = mysqli_real_escape_string($this->db->link, $username);
        $password = mysqli_real_escape_string($this->db->link, $password);
        $level = mysqli_real_escape_string($this->db->link, $level);
        $email = mysqli_real_escape_string($this->db->link, $email);
        if (empty($username)) {
            $alert = "username must be not empty";
            return $alert;
        } else {
            $query = "INSERT INTO tb_user(username,password,level,email) VALUES ('$username','$password','$level','$email')";
            $result = $this->db->insert($query);

            if ($result) {
                $alert = "<span class='success' style = 'color:blue; font-weight:bold'>Thêm " . $username . " thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error' style = 'color:red; font-weight:bold'>Thất bại</span>";
                return $alert;
            }
        }
    }
    public function show_user(){
        $query = "SELECT * FROM tb_user ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_user($id){
        $query = "DELETE FROM tb_user WHERE id ='$id'";
        $result = $this->db->delete($query);
        
        if ($result) {
            $alert = "<span class='success' style = 'color:green; font-weight:bold'>Xoá thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error' style = 'color:red; font-weight:bold'>Thất bại</span>";
            return $alert;
        }
    }
    public function edit_user($username, $password, $level,$id,$email){
        
        $$username = $this->fm->validation($username);
        $password = $this->fm->validation($password);
        $level = $this->fm->validation($level);
        $username = mysqli_real_escape_string($this->db->link, $username);
        $password = mysqli_real_escape_string($this->db->link, $password);
        $level = mysqli_real_escape_string($this->db->link, $level);
        $email = mysqli_real_escape_string($this->db->link, $email);
        if (empty($username)) {
            $alert = "username name must be not empty";
            return $alert;
        } else {
            $query = "UPDATE tb_user SET username = '$username',password ='$password',level='$level',email='$email' WHERE id = '$id'";
            $result = $this->db->update($query);

            if ($result) {
                $alert = "<span class='success' style = 'color:green; font-weight:bold'>Sửa " . $username . " thành công</span>";
                return $alert;
            } else {
                $alert = "<span class='error' style = 'color:red; font-weight:bold'>Thất bại</span>";
                return $alert;
            }
        }
    }
    public function getuserbyId($id)
    {
        $query = "SELECT * FROM tb_user WHERE id ='$id'";
        $result = $this->db->select($query);
        return $result;
    }
}

?>