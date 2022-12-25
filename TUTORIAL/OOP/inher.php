<?php
// Inheritance: means one class inherit properties and methods from another

/* 'protected' access modifiers is like 'private', the only difference is that 'protected' can be accessed in an
extended class unlike 'private'*/ 
class User {

    // property methods
    public $username;
    protected $email;
    public $role = 'member';

    // creating a method
    public function addFriend(){
        return "$this->username added a new friend";
    }
    
    // to override the variables 
    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function message(){
        return "$this->email sent a new message";
    }

    // getters
    public function getEmail(){
        return $this->email;
    }
    
    // setters
    public function setEmail($email){
      if(strpos($email, '@') > -1){
          $this->email = $email;
      } 
    }
    
    }

    // for AdminUser class to inherit from User class
    class AdminUser extends User{
    
      public $level;
      public $role = 'admin';

      public function __construct($username, $email, $level){
          $this->level = $level;
          parent::__construct($username, $email);
      }
      public function message(){
            return "$this->email, an admin, sent a new message";
      }

    } 

    $userOne = new User('Abdulgafar', 'ballojnr@gmail.com');
    $userTwo = new User('Seun', 'seun@gmail.com');
    $userThree = new AdminUser('Olamilekan', 'Olami@gmail.com', 7);

    /*echo $userThree->username . '</br>';
    echo $userThree->getEmail() . '</br>';
    echo $userThree->level . '</br>';*/

    echo $userOne->role . '</br>';
    echo $userThree->role . '</br>';
    echo $userOne->message() . '</br>';
    echo $userTwo->message() . '</br>';
    echo $userThree->message() . '</br>';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>