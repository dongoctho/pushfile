<?php 
    include '../library/session.php';
    Session::checkLogin();
    include '../library/database.php';
    include '../helpers/format.php';
?>
<?php 
class adminlogin {
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database(); 
        $this->fm = new Format();
    }
    public function login_admin($username,$password){
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);
        $username = mysqli_real_escape_string($this->db->link, $username);
        $password = mysqli_real_escape_string($this->db->link, $password);
        if(empty($username)||empty($password)){
            $alert = "Tài khoản hoặc mật khẩu không được bỏ trống";           
            return $alert;
        }
        else{
            $query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' LIMIT 1";
            $result = $this->db->select($query);
            if($result != false){
                $value = $result->fetch_assoc();
                Session::set('login',true);
                Session::set('id',$value['id']);
                Session::set('username',$value['username']);
                Session::set('password',$value['password']);
                Session::set('level',$value['level']);
                header('Location:listUser.php');
            }
            else{
                $alert = "<span style='color:red;font-weight:bold;'>Sai tài khoản hoặc mật khẩu</span>";
                return $alert;
            }
        }
    }
}
?>
