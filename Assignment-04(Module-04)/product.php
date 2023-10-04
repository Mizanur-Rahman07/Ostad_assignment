<?php 

class Product {
  private int $productId;
  private string $productName;
  private float $productPrice;

  public function __construct($id,$name,$price){
    $this->productId    = $id;
    $this->productName  = $name;
    $this->productPrice = $price;
  }

  private function getFormattedPrice() {
    // return sprintf("$%.2f",$this->productPrice);
    return number_format($this->productPrice, 2);
  }

  public function showDetails() {
    echo "ID: " . $this->productId . "\n";
    echo "Name: " . $this->productName . "\n";
    echo "Price: $" . $this->getFormattedPrice() . "\n";
  }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();