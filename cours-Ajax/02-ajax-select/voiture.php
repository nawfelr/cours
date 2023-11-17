<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX avec SELECT</title>
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px
        }

        select {
            width: 100%;
            height: 30px;
            border: 1px solid #333;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div style="width: 1000px; margin: 0 auto; padding: 20px;">
        <!-- form>label+br+select#pays>option*4^br+label+select#ville>option -->
        <form>
            <label>Voiture</label><br>
            <select id="voiture">
                <option value=""></option>
                <option>Renault</option>
                <option>Mercedes</option>
                <option>Audi</option>
            </select><br><br>

            <label for="">Modèle</label><br>
            <select id="modele">
                <option>Veuillez choisir un modèle de voiture...</option>
            </select>
        </form>
    </div>

    <script src="voiture.js"></script>

</body>

</html>