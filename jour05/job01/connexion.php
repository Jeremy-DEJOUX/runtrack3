<?php

function connect()
{

    $database = new \PDO('mysql:host=localhost; dbname=utilisateurs; charset=utf8', 'root', '');

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $database;
}
$db = connect();


$email = "b@b";
$password = "salut";

if (isset($_POST['email']) && isset($_POST['password'])) {

    if ($_POST['email'] == $email && $_POST['password'] == $password) { // Si les infos correspondent...
        session_start();
        $_SESSION['user'] = $email;
        echo "Success";
        return;
    } else { // Sinon
        echo "Failed";
    }
}
?>

<form>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
    </div>

    <div>
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="connexion" name="connexion" id="submit" />


</form>