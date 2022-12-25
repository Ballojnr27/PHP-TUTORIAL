<?php
 function nameProduct($product)
 {
     //echo " The cost of {$product['name']} is #{$product['price']} <br/>";
     return " The cost of {$product['name']} is #{$product['price']} <br/>";
 } 

$named = nameProduct (['name' => 'Garri', 'price' => '250']);
echo $named;
?>