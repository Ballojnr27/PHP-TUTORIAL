<?php 
// local variables can only function when they inside the funct, they won't work 
//if they are declared outside the funct
/*function sayHello($name)
{
    
    echo "Hello $name";
}

sayHello('Abdulgafar');
//echo $name;*/
// But it can work if it is declared with the funct 'global'

$name = 'Abdulgafar';

function mine()
{
    global $name;
    echo "my name is $name";
}

mine();
?>