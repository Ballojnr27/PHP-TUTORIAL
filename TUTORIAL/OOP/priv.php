<?php
// private class can only be accessed inside the class unless we use the FUNCTION 'Getters & Setters'


class User {

// property methods
public $username;
private $email;

// creating a method
public function addFriend(){
    return "$this->username added a new friend";
}

// to override the variables 
public function __construct($username, $email){
    $this->username = $username;
    $this->email = $email;
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

$userOne = new User('Abdulgafar', 'ballojnr@gmail.com');
$userTwo = new User('Seun', 'seun@gmail.com');

// $ would be neglected here when accessing it
//echo $userOne->addFriend() . '</br>';
//echo $userTwo->addFriend() . '</br>';

$userOne->setEmail('olami@gmail.com');

echo $userOne->getEmail() . '</br>';
echo $userTwo->getEmail(); 
// to access the variables in a class
//print_r(get_class_vars('User'));
// to access the methods in a class
//print_r(get_class_methods('User'));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to classes</title>
</head>
<body>
    
</body>
</html>