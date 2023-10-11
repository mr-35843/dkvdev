<!DOCTYPE html>
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
</html>