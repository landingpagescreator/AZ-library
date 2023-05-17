<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMANDE</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
        // debut
        $link = mysqli_connect('localhost', 'root' , '' , 'base_client');

        $id = $_SESSION['id'];
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $vendeur = $_POST['vendeur'];
        $prix = $_POST['prix'];
        $reference = $_POST['reference'];
        $quantite = $_POST['quantite'];
        
        // $couleur = "blanc";
        // foreach($_POST['couleur'] as $valeur) {
        //     $couleur = $couleur." ".$valeur;
        // }

        $result = mysqli_query($link, "INSERT INTO commande_produit (id_client, vendeur_prod, prix_prod, ref_prod, colr_prod, qant_prod) VALUES ('$id', '$vendeur', '$prix', '$reference', '$couleur', '$quantite')");

        if($result == true) {
            echo("<p>Bonjour $nom $prenom, votre commande a été enregistrée avec succès </p>");
            echo("<a href='index.html' style='color: blue;'>Retour à la page d'accueil </a>");
        } else {
            echo("<p>La commade n'a pas été ajoutée, assayez une autre fois! </p>");
        }
    } else {
        echo("<p>Vous devez confirmer votre authentification </p>");
        echo("<a href='login.html' style='color: green;'>confirmer votre authentification </a>");
    }
    ?>
</body>
</html>