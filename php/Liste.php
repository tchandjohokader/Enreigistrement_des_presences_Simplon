<?php
session_start();
try {
    $connect= new PDO('mysql:host=mysql-kader.alwaysdata.net;dbname=kader_simplon','kader','Kader2005@');
} catch(Exception $e) {
    die("Erreur : ".$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Liste.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Liste de presence</title>
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

<div id="dossier">

    <h1>LISTE DE PRESENCE</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>N'</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Numero</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $req = "SELECT * FROM information";
                $prep = $connect->prepare($req);
                $prep->execute();
                $donnees = $prep->fetchAll();
                foreach($donnees as $result) {
                ?>
                <tr>
                    <td><?= $result["id_part"]; ?></td>
                    <td><?= $result["Nom_part"]; ?></td>
                    <td><?= $result["Prenom_part"]; ?></td>
                    <td><?= $result["Num_part"]; ?></td>
                    <td><?= $result["Email_part"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<button id="downloadBtn">TELECHARGER</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/Liste.js"></script>
</body>
</html>
