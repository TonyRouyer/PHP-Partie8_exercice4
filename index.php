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
    <p><?= 'login : ' . $_COOKIE['login'] . ' et mot de passe : ' . $_COOKIE['password'] ?></p>
    <p><a href="../index.php">Retour au menu</a></p>
</body>
</html>