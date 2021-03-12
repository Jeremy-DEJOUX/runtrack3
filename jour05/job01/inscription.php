<?php
function connect()
{

    $database = new \PDO('mysql:host=localhost; dbname=utilisateurs; charset=utf8', 'root', '');

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $database;
}
$db = connect();

if (isset($_POST['inscription'])) {
    $insert = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:name, :prenom, :email ,:password)");

    $test = $insert->execute([
        ":name" => $_POST['name'],
        ":prenom" => $_POST['first_name'],
        ":email" => $_POST['email'],
        ":password" => $_POST['password']
    ]);
    if ($test == true) {
        echo "Success";
        return;
    } else {
        return "Error";
    }
}


?>

<form>

    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name"/>
    </div>

    <div>
        <label for="first_name">Prénom</label>
        <input type="text" name="first_name" id="first_name"/>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"/>
    </div>

    <div>
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password"/>
    </div>

    <!-- <div>
        <label for="confirmPassword">Confirmation MDP</label>
        <input type="password" name="confirmPassword">
    </div> -->

    <input type="submit" value="Inscription" name="inscription" id="submit"/>


</form>