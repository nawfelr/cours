<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <style>
        body{
            background-color: rgb(3, 66, 129);
        }
    </style>
    <header>
        <?php include('components/nav.php'); ?>
      
       <div class="container-connexion">       
            <H2> Bienvenue chez Mon Fuji </H2>
         </div>
         
       
    </header>

    <div class="form-connexion">
        <form method="POST">
            
            <label for="name">Nom (OBLIGATOIRE)</label>
            <input type="text" name="lastname" class="input-name" placeholder="Veuillez entrez votre Nom...">
     
            <label for="name">Prénom (OBLIGATOIRE)</label>
           <input type="text" name="firstname" class="input-name" placeholder="Veuillez entrez votre prénom...">

           <label for="email">Mail (OBLIGATOIRE)</label>
           <input type="email" name="email" class="input-mail" placeholder="Veuillez entrez votre adresse mail...">
           <label for="password">Mot de passe (OBLIGATOIRE)</label>
           <input type="password" name="confirmPassword"  placeholder="Veuillez entrez votre mot de passe...">

           <label for="confirmPassword">Confirmation du mot de passe (OBLIGATOIRE)</label>
           <input type="Password" name="confirmPassword"  placeholder="Veuillez vérifiez votre mot de passe...">
    
           

           <input type="submit" id="send-msg" value="S'inscrire" >
          
    
        </form>
    </div>

</body>

</html>