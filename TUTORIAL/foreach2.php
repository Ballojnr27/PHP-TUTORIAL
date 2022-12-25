<?php
/*$chels = ['auba', 'mount', 'chillwell'];
foreach($chels as $chel)
{
    echo $chel . '<br/>';
}*/

// using the key for different values in an array

$products = [
    ['name' => 'Garri', 'price'=> 250],
    ['name' => 'Sugar', 'price'=> 1400],
    ['name' => 'Peanut', 'price'=> 50],
    ['name' => 'Groundnut', 'price'=> 50]
];

/*foreach ($products as $product)
{
    echo $product['name'] . '-' . $product['price']. '<br/>';
}*/
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
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product){ ?>

            <h3><?php echo $product['name']; ?></h3>
            <p> N <?php echo $product['price']; ?></p>
            
        <?php } ?>    
    </ul>
</body>
</html>