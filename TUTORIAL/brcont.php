<?php
$products = [
    ['name' => 'Garri', 'price'=> 250],
    ['name' => 'Sugar', 'price'=> 1400],
    ['name' => 'Peanut', 'price'=> 50],
    ['name' => 'Groundnut', 'price'=> 50]
];

foreach ($products as $product)
{
    /*if($product['name'] === 'Peanut')
    {
        break;
    }*/

    if ($product['price'] > 500)
    {
        continue;
    }
    echo $product['name'] . '<br/>';
}

// 'break' stops the code in the loop and does not continue the next loop
// 'continue' skips the affected loop and continue to the next loop
?>