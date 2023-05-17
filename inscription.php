<html>
<head>
    <title>INSCRIPTION</title>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '', 'base_client');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$wilaya = $_POST['wilaya'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$password = $_POST['password'];
$sexe = $_POST['sexe'];

$result = mysqli_query($link, "INSERT INTO Client (no_clt, pno_clt, age_clt, wi_clt, tel_clt, mail_clt, adr_clt, mot_clt, sexe_clt) VALUES ('$nom', '$prenom', '$age', '$wilaya', '$telephone', '$email', '$adresse', '$password', '$sexe')");

if ($result == true) {
    echo("<p>Le client a été ajouté avec succès </p>");
    echo("<a href='index.html' style='color: blue;'>Retour à la page d'accueil </a>");
} else {
    echo("<p>Le client n'a pas été ajouté </p>");
}
mysqli_close($link);
?>
</body>
</html>