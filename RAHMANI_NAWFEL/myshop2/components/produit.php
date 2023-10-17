 <?php foreach ($produit as $p) { ?>
     <div class="col mb-5">

         <div class="card h-100">
             <!-- Sale badge-->
             <?php if ($p['reservation_text'] != null) { ?>
                 <div class="badge bg-dark text-white position-absolute"> Déja reserver</div>
             <?php  } ?>
             <br>

             <!-- Product image-->
             <img class="card-img-top" style="width:250px; height:200px" src="./image/<?php echo $p['image']; ?>" alt="..." />
             <!-- Product details-->
             <div class="card-body p-4">
                 <div class="text-center">
                     <!-- Product name-->
                     <h5 class="fw-bolder" style="text-transform: uppercase;"><?php echo $p['title']; ?></h5>

                     <!-- Product price-->
                     <p><?php echo $p['price']; ?> €</p>
                 </div>
             </div>
             <!-- Product actions-->
             <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                 <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./voir_produit.php?id_produit=<?php print_r($p['id_produit']); ?>">Voir produit</a></div>
             </div>
         </div>
     </div>

 <?php } ?>