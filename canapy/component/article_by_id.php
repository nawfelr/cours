<div class="col-12 col-md-4 col-lg-4 mb-5" style="margin: 0 auto;">
    <a class="product-item" href="single_article.php?idarticle=<?php echo $articleData['id_article'] ?>">
        <img src="images/<?php echo $articleData['image']; ?>" class="img-fluid product-thumbnail">
        <h3 class="product-title"><?php echo $articleData['title']; ?></h3>
        <strong class="product-price"><?php echo  $articleData['price']; ?> €</strong>

        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </a>
</div>