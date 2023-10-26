<?php 

// $products = 
//     array("name" => "Product A", "price" => 10);

// $productKeys = array_keys($products);

// foreach ($productKeys as $index => $key) {
//     $productName = $key;
//     $productPrice = $products[$key];

//     // Process or display the data as needed
//     // echo "Index: $index, Product: $productName, Price: $productPrice<br>";
//     // echo $key;
//     // echo $index;
//     echo $products['price'];
// }

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$productA = new Product("Product A", 10);
$productB = new Product("Product B", 20);
$productC = new Product("Product C", 30);

$products = array($productA, $productB, $productC);
print_r($products);
$products = array_reverse($products);
foreach ($products as $index => $product) {
    $productName = $product->name;
    $productPrice = $product->price;

    // Process or display the data as needed
    echo "<br>";
    echo "Index: $index, Product: $productName, Price: $productPrice<br>";
}

?>