<?php
class Products {
    
    private $all = array();
    public $inStock = array();
    private $soldOut = array();

    function __construct(){
        $productPaths = scandir(PRODUCT_FOLDER);
        
        foreach($productPaths as $path){
            if(strlen($path) !== 18)
                continue;

            $pathSlice = substr($path, -5);
                if($pathSlice === ".json"){
                    $productFile = file_get_contents(PRODUCT_FOLDER.$path);
                    $product = json_decode($productFile);
                    array_push($this->all, $product);

                    if($product->quantity > 0){
                        array_push($this->inStock, $product);
                    }else {
                        array_push($this->soldOut, $product);
                    }
                }
        }
    }

    function renderInStock(){
        //render  products
        foreach($this->inStock as $product){
          global $cfg;
          echo '<div class="col-sm-6 col-md-4 col-lg-3 product">';
          echo '
         
          <img class="img-fluid" src="images/'.$product->id.IMAGE_EXTENSION.'" alt="">
          
              <form action="" method="post">
                  <label>'.zeroPadPrice($product->price).' '.$cfg->file->currencySymbol.'</label><br>
                  <label>'.$product->name.'</label><br>
                  <label>'.$product->description.'</label>
                  <br>
                  <input type="submit" class="btn btn-success" name="add_to_cart_submit-product-'.$product->id.'" value="Add to cart">
              </form>
          ';
          echo "</div>";
        }

    }

    function create($productDetails){ 
    //write to filesystem.
    $filePath = $productDetails["productId"].".json";
    echo $filePath;
    $pointer = fopen($filePath, "x") or die("Unable to open file.");
    fwrite($pointer, json_encode($productDetails));
    fclose($pointer);
    //move and rename images
    move_uploaded_file($_FILES["product_image_a"]["tmp_name"], $productDetails["productId"]."json");
    move_uploaded_file($_FILES["product_image_b"]["tmp_name"], $productDetails["productId"]."json");    
    }


}
?>