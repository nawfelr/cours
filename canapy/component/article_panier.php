<?php
foreach ($tableCart as $panier) { ?>

    <tr>
        <td class="product-thumbnail">
            <img src="images/<?php echo $panier['image'] ?>" alt="Image" class="img-fluid">
        </td>
        <td class="product-name">
            <h2 class="h5 text-black"><?php $panier['title'] ?></h2>
        </td>
        <td><?php echo $panier['price'] ?> €</td>
        <td>
            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                <div class="input-group-prepend">
                    <!-- <button class="btn btn-outline-black decrease" type="button">&minus;</button> -->
                    <input class="btn btn-outline-black decrease" type="submit" name="quantite" value="-">
                </div>
                <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                    <!-- <button class="btn btn-outline-black increase" type="button">&plus;</button> -->
                    <input class="btn btn-outline-black increase" type="submit" name="quantite" value="+">
                </div>
            </div>

        </td>
        <td><?php echo $panier['price'] ?> €</td>
        <td><a href="lib/delete_cart.php?id_orders=<?php echo $panier['id_orders'] ?>" class="btn btn-black btn-sm">X</a></td>
    </tr>
<?php
}
?>