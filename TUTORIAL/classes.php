<?php
// classes is like creating our own datatype

class User {
    public $email;
    public $name;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . 'logged in';
    }
}

// creating a new object
$userOne = new User('abdulgafar ', 'abdulgafar@gmail.com ');

$userOne->login();


?>