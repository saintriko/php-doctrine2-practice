<?php
// show_product.php <id>
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

if ($products === null) {
    echo "No products found.\n";
    exit(1);
} else {
    foreach ($products as $product) {
        echo sprintf("-%s\n", $product->getName());
    }
}
