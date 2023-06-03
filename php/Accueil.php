<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/Accueil.css">
    <title>Accueil</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="../SIMPLON-ron.png" alt="Logo">
            <h4>Simplon</h4>
        </div>
        <nav>
            <ul>
                <li><a href="../php/Accueil.php">Accueil</a></li>
                <li><a href="../php/Liste.php">Liste de presence</a></li>
            </ul>
        </nav>
    </header>

    <form action="../php/Recuperation.php" method="post" id="table">
        <div>
            <input type="text" name="nom" placeholder="Nom" required >
            <span class="box-alerte" >Entrer un nom correct</span>
        </div>
        <div>
            <input type="text" name="Prenom" placeholder="Prenom" required>
            <span class="box-alerte" >Entrer un Prenom correct</span>
        </div>
        <div>
            <input type="tel " name="Numero" placeholder="Numero de téléphone" maxlength="10" required>
            <span class="box-alerte">Entrer un numéro de téléphone correct</span>
        </div>
        <div><input type="email" name="Email" placeholder="Email" required></div>
        <button id="envoyer">ENVOYER</button>
    </form>
    <script src="../js/Accueil.js" type="module"></script>
</body>
</html>