<?php 

class User {
    protected $id;
    protected $username;
    protected $firstname;
    protected $lastname;
    protected $password;
    protected $email;

    public function __construct($username="", $password="", $firstname="", $lastname="", $email="", $id=0)
    {   
        $this->id = $id;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = md5($password);
        $this->email = $email;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setPassword($password){
        $this->password = md5($password);
    }

    public function getPassword(){
        return $this->password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}

?>