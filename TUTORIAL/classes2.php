<?php
// classes is like creating our own datatype

class User {
    private $email;
    private $name;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . 'logged in';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        }else{
            return 'not a valid name';
        }
    }
}

// creating a new object
$userOne = new User('abdulgafar ', 'abdulgafar@gmail.com ');

$userOne->getName();
echo $userOne->setName('kay');

?>