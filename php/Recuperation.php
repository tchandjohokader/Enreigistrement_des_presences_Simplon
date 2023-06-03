<?php
try{
    $connection = new PDO('mysql:host=mysql-kader.alwaysdata.net;dbname=kader_simplon','kader','Kader2005@');
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}   
    
    $nom=$_POST['nom'];
    $prenom=$_POST['Prenom'];
    $email=$_POST['Email'];
    $num=$_POST['Numero'];

    $query="INSERT INTO information (Nom_part,Prenom_part,Email_part,Num_part) values (?,?,?,?)";
    $prepare2=$connection->prepare($query);
    $prepare2->execute(array($nom,$prenom,$email,$num));
    header("location: ../php/Accueil.php");