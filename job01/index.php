<?php
require_once 'Product.php';

$product = new Product(
    1,
    'T-shirt',
    ['https://picsum.photos/200/300'],
    1000,
    'A beautiful T-shirt',
    10,
    new DateTime(),
    new DateTime()
);

var_dump($product);
echo $product->getName(); 
$product->setPrice(1200);
echo $product->getPrice();
?>
