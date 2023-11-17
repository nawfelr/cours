<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Fuji</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
       <?php include('components/nav.php'); ?>
        <!-- Mon image du Mont Fuji -->
        <div class="banniere">
            <!-- <img src="./assets/images/montfuji.jpg" alt="Image du Mont Fuji"> -->
             <video autoplay muted loop>
                    
                 <source src="assets/videos/vid-fuji.mp4" type="video/mp4">
                    <!-- <source src="video/videoBackground.mp4" type="video/mp4"> -->
            </video>
        </div>

    </header>


    <div class="container">

    <section class="souvenirTitre">
        <h2>Nos souvenir du Japon</h2>
        <hr class="separation">

    </section>
    


    <section class="souvenirCard">

     <div class="card">
        <img src="assets/images/peluche-en-forme-du-mont-fuji.png" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button type="button"><a href="#">Voir article</a></button>
     </div>
        
     <div class="card">
        <img src="assets/images/DreamShaper_v7_can_you_create_images_of_a_pillow_looking_like_3.jpg" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button type="button"><a href="#">Voir article</a></button>
     </div>
        
     <div class="card">
        <img src="assets/images/porte-cl--du--mont-fuji.png" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button type="button"><a href="#">Voir article</a></button>
     </div>
        
     

    </section>



    <section class="souvenirLivraison">
        <h2>Livraison dans toute la France</h2>
        <hr class="separation">

    </section>


    <section class="souvenirIcon">

       <div class="icon">
           <i class="fa-solid fa-truck fa-6x" style="color: #ffffff;"></i>
           
           <p> <span>Livraison gratuite</span> <br>à partir de 50€</p>
       </div>
   
       <div class="icon">
           <i class="fa-solid fa-credit-card fa-6x" style="color: #ffffff;"></i>
           
           <p> <span>Paiement sécurisé</span> <br> Avec CB SecurePay</p>
       </div>
   
       <div class="icon">
           <i class="fa-solid fa-phone fa-6x" style="color: #ffffff;"></i>
           <p> <span>Support et SAV</span> <br> disponible 24h/24h  </p>
       </div>
   
    </section>



   <section class="souvenirTitre">
        <h2>Oreiller Mont Fuji</h2>
        <hr class="separation">

    </section>

    <section class="pillowCard">

     <div class="card">
        <img src="assets/images/peluche-en-forme-du-mont-fuji.png" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button href="contact.php" type="button"><a href="contact.php">Voir article</a></button>
     </div>
        
     <div class="card">
        <img src="assets/images/DreamShaper_v7_can_you_create_images_of_a_pillow_looking_like_3.jpg" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button type="button"><a href="#">Voir article</a></button>
     </div>
        
     <div class="card">
        <img src="assets/images/porte-cl--du--mont-fuji.png" alt="Image d'un portemonaie traditionnel japonais">
        <h3>Gamaguchi Mont Fuji</h3>
        <p>15.99 €</p>
        <button type="button"><a href="#">Voir article</a></button>
     </div>
        

    </section>


    </div>

   <footer>

   <?php
        include('components/footer.php');
       ?>
   </footer>
        
    

</body>

</html>