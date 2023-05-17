<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php
    $link = mysqli_connect('localhost', 'root' , '' , 'base_client');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($link, "SELECT * FROM Client WHERE mail_clt = '$email' AND mot_clt = '$password'");
    if (mysqli_num_rows($result) > 0) {
        $ligne = mysqli_fetch_row($result);

        session_start();
        $_SESSION['id'] = $ligne[0];
        $_SESSION['nom'] = $ligne[1];
        $_SESSION['prenom'] = $ligne[2];

        echo("<h3>Bonjour $ligne[1] $ligne[2] ! </h3>");
        echo("<h3>Vous pouvez maintenant lancer des commandes d'achat </h3>");
        echo("<a href='index.html'>Retour à la page d-accueille </a>");
    } else {
        echo("<h3>Email et/ou mot de passe incorrect(s) </h3>");
        echo("<a href='login.html'>Retour à la page login </a>");
    }

    mysqli_close($link);
    ?>
</body>
</html>