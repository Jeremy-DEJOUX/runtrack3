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

    <script type="text/javascript" src="script.js"></script>
</body>

</html>