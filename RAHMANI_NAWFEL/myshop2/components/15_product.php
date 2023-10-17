<?php foreach ($produit15 as $p15) { ?>


    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->

            <!-- Product image-->
            <img class="card-img-top" style="width:250px; height:200px" src="./image/<?php echo $p15['image']; ?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder" style="text-transform: uppercase;"><?php echo $p15['title']; ?></h5>

                    <!-- Product price-->
                    <p><?php echo $p15['price']; ?> €</p>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./voir_produit.php?id_produit=<?php print_r($p15['id_produit']); ?>">Voir produit</a></div>
            </div>
        </div>
    </div>

<?php } ?>