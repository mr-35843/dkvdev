<link rel="stylesheet" href="views/index/index.css">
<article>


<div class="container" style="margin-top: 1em; margin-bottom: 2em;">
    <h1 id="callToAction" class="type-header" style="text-align: left;">DKVDEV:CODE:SPACE</h1>
    <p id="callToAction" style="text-align: left;">Market Spaces: A tiny e-commerce solution that brings online payment to your location with QR technology.</p>
  <div class="row">
    <?=$featuredProducts->renderProducts();?>
  </div>
</div>

<div id="mainArticle" class="row">  
  <div class="col-md-6 col-lg-8">
    <div class="container">
      <h2 id="index-article-header" >
        <?=$cfg->file->marketStallHeader;?>
      </h2>
        <?=$cfg->file->marketStallArticle;?>
    </div>          
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="container">
      <center><img src="
        <?php
        echo IMAGE_FOLDER.$cfg->file->marketStallImage.IMAGE_EXTENSION;
        ?>
        " alt="" class="img-fluid" style="max-height: 400px; margin-top:0.5em;"></center>
    </div>
  </div>

</div>

<div class="container">
      
<div class="row" style="padding-top: 2em; padding-bottom: 2em;">
      <h2>More Products:</h2>
      <?php
      $products->renderInStock();
      ?>
</div>  
</div>
      <div id="comments">
        <h2>What people say about this store:</h2>
        <?php $comments->renderApproved();?>
        
        <div class="row">
          <div class="col-md-6">
            <form action="" method="post">
              <label for=""><h3>Let us and others know what think of us!</h3></label>
              <br>
              <input type="submit" name="create_comment_submit" class="btn btn-primary" value="Leave your thoughts">
              <br><br>
            </form>
          </div>

          <div class="col-md-6">
            <form action="" method="post">
              <label for=""><h3>Please leave a rating!</h3></label>
              
              <select name="" id="" class="form-control" style="max-width:70%; margin-left: 2em; ">
                <option value="5">5 / 5 - Great</option>
                <option value="">4 / 5 - Good</option>
                <option value="">3 / 5 - Decent</option>
                <option value="">2 / 5 - Bad</option>
                <option value="">1 / 5 - Horrible</option>
              </select>
              <input type="submit" name="rating_submit" class="btn btn-primary" value="Leave your thoughts">
              <br><br>
            </form>
          </div>
        </div>

        <div class="col-12">
          <h3 style="text-align:center;">Follow us on social:</h3>
        </div>
      </div>
    


</article>
<script src="views/index/index.js"></script>