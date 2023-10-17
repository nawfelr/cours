<!-- ARTICLE  -->

<?php foreach ($articles as $a) { ?>
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="single_article.php?idarticle=<?php echo $a['id_article'] ?>">
            <img src="images/<?php echo $a['image']; ?>" class="img-fluid product-thumbnail">
            <h3 class="product-title"><?php echo $a['title']; ?></h3>
            <strong class="product-price"><?php echo $a['price']; ?> €</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
        <a href="lib/update_panier.php?id_article=<?php echo $a['id_article'] ?>"><button type="button">Add cart</button></a>
    </div>

<?php } ?>