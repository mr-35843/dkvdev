<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="/vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<body>

  </head>

  <body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="id">
        <?php
            $productId = uniqid();
            echo "ID: $productId";
        ?>
    </label>

    <label for="name">Product:</label>
    <input type="text" class="form-control" name="product_name" placeholder="Enter product name">

    <label for="price">Price:</label>
    <input type="text" name="product_price" class="form-control" placeholder="12.50">
    
    <label for="description">Product description:</label>
    <textarea name="product_description" id="mytextarea" cols="30" rows="10"></textarea>

    <label for="quantity">Quantity:</label>
    <input type="number" name="product_quantity" class="form-control">

    <label for="image_a">Image A:</label>
    <input type="file" name="fileToUpload" class="form-control">
    <label for="image_b">Image B:</label>
    <input type="file" name="fileToUpload" class="form-control">

    <input type="submit" name="new_product_submit" class="btn btn-primary" value="Submit Product">

    
</form>

<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>    
</body>
</html> -->

<?php
session_start();
//DEPENDENCIES
require __DIR__ . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
require("constants.php");
require("middleware/helperFunctions.php");
require("classes/Config.php");
require("classes/ShoppingCart.php");
require("classes/FeaturedProducts.php");
require("classes/Products.php");
require("classes/Comments.php");
//INITIALIZING OBJECTS
$cfg = new Config();
$cart = new ShoppingCart();
$featuredProducts = new FeaturedProducts($cfg->file);
$products = new Products();
$comments = new Comments();
//APPLICATION
$featuredProducts->handleSubmits($cart); //creates POST event handlers for featured products add to cart buttons.
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DKVDEV CODESPACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Tilt+Neon&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
  <?php require("views/navbar/navbar.php");
        require("views/products/create/createProduct.php");?>
  <?php require("views/footer/footer.html");?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>


  </body>
</html>

