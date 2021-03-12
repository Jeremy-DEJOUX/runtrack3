<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>Job 01</title>
</head>

<body>
    <?php
    if (isset($_SESSION['id'])) {
        echo "Vous êtes connéctés";
    } else {
        echo "<button type='button' id='connexion'>Connexion</button> <br>
                    <button type='button' id='inscription'>Inscription</button>";
    }
    ?>

    <form style="display: none" id="form_i">

        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="first_name">Prénom</label>
            <input type="text" name="first_name" id="first_name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password">
        </div>

        <!-- <div>
        <label for="confirmPassword">Confirmation MDP</label>
        <input type="password" name="confirmPassword">
    </div> -->

        <input type="button" value="Inscription" name="inscription" id="submit">


    </form>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>