<?php
if(isset($_POST["new_product_submit"])){
    //collect product info, product create function requires an asc array.
    $productDetails =
    [
        "productId" => $productId,
        "name" => $_POST['product_name'],
        "price" => $_POST['product_price'],
        "description" => $_POST['product_description'],
        "quantity"  => $_POST['product_quantity'],
        "productImage" => $_FILES["product_image_a"],
        "productImageB" => $_FILES['product_image_b']
    ];
    //create product
    $products->create($productDetails);
}
?>

<script src="/vendor/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container">
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
        <input type="number" name="product_quantity" class="form-control" value="1">
        <label for="image_a">Image A:</label>
        <input type="file" name="product_image_a" class="form-control">
        <label for="image_b">Image B:</label>
        <input type="file" name="product_image_b" class="form-control">
        <input type="submit" name="new_product_submit" class="btn btn-primary" value="Submit Product">
    </form>
</div>
<script src="views/products/create/createProduct.js"></script>    