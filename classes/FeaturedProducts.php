<?php
/*
IMPORTANT: This class makes use of external helper functions.
These functions can be found at: localhost/middleware/helperFunctions.php
This class will break if the required helper functions are not defined before loading this class.
*/

class FeaturedProducts{
  private $products = [];

  function __construct($cfg){
    foreach($cfg->featuredProducts as $product){
      $pointer = PRODUCT_FOLDER.$product;
      $productRequest = file_get_contents($pointer);
      $productObject = json_decode($productRequest);
      array_push($this->products, $productObject);
    }
  }

  function handleSubmits($cart){
    //event handlers featured products.
    foreach($this->products as $product){
      $pointer = "add_to_cart_submit-featured-$product->id";
        if(isset($_POST[$pointer])){
          $cart->addItem($product->id, $product->name, $product->price, 1);
        }
      }
  }

  function renderProducts(){
    //render featured products
    foreach($this->products as $product){
      global $cfg;
      echo '<div class="col-md-4">';
      echo '
     
      <img class="img-fluid" src="images/'.$product->id.IMAGE_EXTENSION.'" alt="">
      
          <form action="" method="post">
              <label>'.$product->name.'</label>
              <label>'.$product->description.'</label>
              <label>'.zeroPadPrice($product->price).' '.$cfg->file->currencySymbol.'</label>
              <br>
              <input type="submit" class="btn btn-success" name="add_to_cart_submit-featured-'.$product->id.'" value="Add to cart">
          </form>
      ';
      echo "</div>";
    }
  }
}
?>