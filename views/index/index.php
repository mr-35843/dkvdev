<link rel="stylesheet" href="views/index/index.css">
<article>


  <div class="container" style="margin-top: 1em;">
    <h1 id="callToAction" class="type-header"></h1>
  <div class="row">
    <?=$featuredProducts->renderProducts();?>
  
    <div class="col-md-12">
      <h2 id="index-article-header">
        <?=$cfg->file->marketStallHeader;?>
      </h2>
    </div>
      <div class="col-md-6 col-lg-8">
        <?=$cfg->file->marketStallArticle;?>
      </div>
      <div class="col-md-6 col-lg-4">
        <center><img src="
        <?php
        echo IMAGE_FOLDER.$cfg->file->marketStallImage.IMAGE_EXTENSION;
        ?>
        " alt="" class="img-fluid" style="max-height: 400px;"></center>
      </div>

      <h2>More Products:</h2>
      <?php
      $products->renderInStock();
      ?>
    <h2>Comments about this store:</h2>

  </div>  

</article>
<script src="views/index/index.js"></script>