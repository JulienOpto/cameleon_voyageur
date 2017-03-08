<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Le Caméléon voyageur</title>
        <link href="https://fonts.googleapis.com/css?family=Boogaloo|Gloria+Hallelujah|Indie+Flower|Oxygen" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <meta charset="utf-8">
    </head>

    <body>
        <div class="container">
            <br /><br />
            <!-- formulaire de connection envoi requête POST connection_bo.php-->
            <form method="post" action="connection_bo.php" class="text-center">
                <input type="text" name="id" placeholder="Identifiant" autofocus>
                <input type="password" name="pw" placeholder="Mot de passe"><br /><br /><br />
                <button type="submit" value="submit" class="btn btn-default">Se connecter</button>
            </form>
        </div>

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>