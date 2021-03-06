<?php 
session_start();
include_once('db.class.php');
include_once('model/user.class.php');
include_once('controller.class.php');

class Login extends Controller {
    public static $user;

    public function index(){
        if(isset($_POST['username']) && isset($_POST['pwd'])){
            try{
                $user = new User($_POST['username'], $_POST['pwd']);
                self::loginUser($user);
                $this->load("home", "view");
            }catch(Exception $e){
                $this->load("login", "view", array("error" => $e->getMessage()));
            }

        }else{
            $this->load("login", "view");
        }
    }

    public static function loginUser($user){
       $sql_query = "SELECT * FROM user WHERE username=? AND pwd=?";
       $connection = self::$db->getConnection();

       $stmt = $connection->prepare($sql_query);
       $stmt->execute([$user->getUsername(), $user->getPassword()]);

       $user = $stmt->fetch(PDO::FETCH_OBJ);
       
       if(!$user){
            throw new Exception("User faild to login, try again!");
            return false;
       }else{
            return true;
       }
    }

    public static function logoutUser(){
        unset($_SESSION['id']);
        session_destroy();
    }
}



?>