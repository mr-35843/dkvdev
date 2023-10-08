<?php
class ShoppingCart {
  private $cart = array();

  public function __construct() {
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
    $this->cart = &$_SESSION['cart'];
  }

  public function addItem($id, $name, $price, $quantity) {
    if (isset($this->cart[$id])) {
      $this->cart[$id]['quantity'] += $quantity;
    } else {
      $this->cart[$id] = array(
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
      );
    }
  }

  public function removeItem($id) {
    if (isset($this->cart[$id])) {
      unset($this->cart[$id]);
    }
  }

  public function updateQuantity($id, $quantity) {
    if (isset($this->cart[$id])) {
      $this->cart[$id]['quantity'] = $quantity;
    }
  }

  public function getItems() {
    return $this->cart;
  }

  public function getTotal() {
    $total = 0;
    foreach ($this->cart as $item) {
      $total += $item['price'] * $item['quantity'];
    }
    return $total;
  }
}

// // Example usage
// $cart = new ShoppingCart();

// $cart->addItem(1, 'testOne', 59.99, 1);
// print_r($cart->getItems());


// echo "<br><br>Total: " . $cart->getTotal();
