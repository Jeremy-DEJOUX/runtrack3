<?php
session_start();
function connect()
{

    $database = new \PDO('mysql:host=localhost; dbname=utilisateurs; charset=utf8', 'root', '');

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $database;
}
$db = connect();

if (isset($_POST['connexion'])) {
    $error = null;
    $userconnect = $db->prepare("SELECT * FROM utilisateurs WHERE email = :email");

    $userconnect->execute([
        ":email" => $_POST['email'],
    ]);
    $user = $userconnect->fetch(PDO::FETCH_ASSOC);

    if (!empty($user)){
        if ($_POST['password'] == $user['password']){
            $_SESSION['utilisateurs'] = [
                'id_user' => $user['id'],
                'mail' => $user['email']
            ];
            if (isset($_SESSION['utilisateurs'])) {
                echo "Success";
                return;
            }
            else{
                return "Error";
            }            
        }
        else{
            return "Error";
        }
    }else{
        return "Error";
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