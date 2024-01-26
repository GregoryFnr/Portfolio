<?php
// Paramètres de connexion à la base de données
$serveur = "localhost"; // Serveur MySQL (généralement localhost)
$utilisateur = "fournierdb_user"; // Nom d'utilisateur MySQL
$motdepasse = "VCN%15snl"; // Mot de passe MySQL
$nomBaseDeDonnees = "fournier_db"; // Nom de la base de données

    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse);
    
?>