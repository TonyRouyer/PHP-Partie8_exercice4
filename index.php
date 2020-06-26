<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice 4</title>
    <style>
        form {

            display: flex;
            flex-direction: column;
        }
        label {
            margin: 0 auto;
            margin-top: 10px;
        }
        #sendBtn {
            width: 80px;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php  if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {  ?>
    <p><?= 'login : ' . $_COOKIE['login'] . ' et mot de passe : ' . $_COOKIE['password']  //on affiche le login contenue dans le cookie "login"?></p>
    <?php }else { ?>
    <p><?= 'Aucun cookie n\'est definie' ?></p>
    <?php } ?>
    <p><a href="../index.php">Retour au menu</a></p>

</body>
</html>