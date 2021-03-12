<?php
function connect()
{

    $database = new \PDO('mysql:host=localhost; dbname=utilisateurs; charset=utf8', 'root', '');

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $database;
}
    $db = connect();

        $insert = $db->prepare("INSERT INTO utilisateurs (nom, prenom, password, email) VALUES (:name, :prenom, :password ,:email)");

        $insert->execute([
            ":name" => $_POST['name'],
            ":prenom" => $_POST['first_name'],
            ":password" => $_POST['password'],
            ":email" => $_POST['email']
        ]);
        var_dump($insert);
        if ($insert == true) {
            echo "Success";
            var_dump($insert);
        }else {
            echo "Error";
            var_dump($insert);
        }
?>

