<?php
require_once 'Product.php'; 

$product = new Product(
    1, 
    "T-Shirt", 
    ["https://picsum.photos/200/300"],  
    1000, 
    "A beautiful T-Shirt", 
    10, 
    new DateTime(), 
    new DateTime()
);


echo "Valeurs initiales :\n";
var_dump($product->getId());     
var_dump($product->getPrice());     
var_dump($product->getQuantity());  
var_dump($product->getCreatedAt()); 
var_dump($product->getUpdatedAt()); 

$product->setPrice(600);
$product->setQuantity(75);
$product->setUpdatedAt(new DateTime());


echo "\nValeurs modifiées :\n";
var_dump($product->getPrice());     
var_dump($product->getQuantity());  
var_dump($product->getUpdatedAt()); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revisionsPoo</title>
</head>
<body>
    <header>
        <h1>Produit Détails</h1>
    </header>
    <main>
        <h2>Valeurs Initiales</h2>
        <p><strong>ID:</strong> <?php echo $product->getId(); ?></p>
        <p><strong>Name:</strong> <?php echo $product->name; ?></p>
        <p><strong>Photos:</strong> <img src="<?php echo $product->photos[0]; ?>" alt="Product Image"></p>
        <p><strong>Price:</strong> <?php echo $product->getPrice(); ?> €</p>
        <p><strong>Description:</strong> <?php echo $product->description; ?></p>
        <p><strong>Quantity:</strong> <?php echo $product->getQuantity(); ?></p>
        <p><strong>Created At:</strong> <?php echo $product->getCreatedAt()->format('Y-m-d H:i:s'); ?></p>
        <p><strong>Updated At:</strong> <?php echo $product->getUpdatedAt()->format('Y-m-d H:i:s'); ?></p>

        <h2>Valeurs Modifiées</h2>
        <p><strong>New Price:</strong> <?php echo $product->getPrice(); ?> €</p>
        <p><strong>New Quantity:</strong> <?php echo $product->getQuantity(); ?></p>
        <p><strong>New Updated At:</strong> <?php echo $product->getUpdatedAt()->format('Y-m-d H:i:s'); ?></p>
    </main>
    <footer>
        
    </footer>
</body>
</html>
