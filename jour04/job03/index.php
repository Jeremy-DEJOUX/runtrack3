<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <form method="post" class="submit">
        <input type="text" name="id" placeholder="ID">
        <input type="text" name="nom" placeholder="Nom">
        <select name="type">
            <option value="Grass">Grass</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Fire</option>
            <option value="Flying">Flying</option>
            <option value="Water">Water</option>
            <option value="Bug">Bug</option>
            <option value="Normal">Normal</option>
            <option value="Electric">Electric</option>
            <option value="Ground">Ground</option>
            <option value="Fairy">Fairy</option>
            <option value="Fighting">Fighting</option>
            <option value="Psychic">Psychic</option>
            <option value="Rock">Rock</option>
            <option value="Steel">Steel</option>
            <option value="Ice">Ice</option>
            <option value="Ghost">Ghost</option>
            <option value="Dragon">Dragon</option>
        </select>
        <button type="submit">Filtrer</button>
    </form>
    <div class="content">
    </div>
    <script src="script.js"></script>
</body>

</html>