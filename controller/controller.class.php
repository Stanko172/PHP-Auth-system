<?php 
include_once('db.class.php');

class Controller {
    protected static $db;

    public static function init(){
        self::$db = new DB();
    }

    protected function load($name, $type = "view", $data = array()){
        if($type == 'view'){
            extract($data);
            include("view/$name.php");
        }else{
            include("model/$name.class.php");
        }
    }
}
Controller::init();
?>