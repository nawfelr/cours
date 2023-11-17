<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes-nous ?</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include('components/nav.php'); ?>
      
       <div class="container-product-bleu">       
            <H2>Formulaire de contact</H2>
         </div>
       
    </header>
    <style>
        body{
            background-color: rgb(3, 66, 129);
        }
    </style>

       <div class="form-connexion">
        <form method="POST">
            
            
           <label for="name">Nom (OBLIGATOIRE)</label>
           <input type="text" name="name" class="input-mail" placeholder="Veuillez entrez votre nom...">
           <label for="email">Mail (OBLIGATOIRE)</label>
           <input type="email" name="email" class="input-mail" placeholder="Veuillez entrez votre adresse mail...">
           
<label for="message">Veuillez entrez votre message (OBLIGATOIRE)</label>
           <textarea name="message"  cols="30" rows="5"  maxlength="200" placeholder="Maximum 200 caractères"></textarea>
          
           

           <input type="submit" id="send-msg" value="Se connecter" >
          
    
        </form>
    </div>
     
    <div class="loc">

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247664.57760382158!2d138.56252113792712!3d35.35399613032014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019629a42fdc899%3A0xa6a1fcc916f3a4df!2sMont%20Fuji!5e0!3m2!1sfr!2sfr!4v1700142875329!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

   <footer>

   <?php
        include('components/footer.php');
        ?>
   </footer>
        
    

</body>

</html>