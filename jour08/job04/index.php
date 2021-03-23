<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper deep-orange">
                <a href="index.php" class="brand-logo">
                    <span class="material-icons">
                        security
                    </span>Armor</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php">Inscription</a></li>
                    <li><a href="index.php">Connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <p>civilité:</p>
        <form action="#">
            <p>
                <label>
                    <input class="with-gap deep-orange" name="group1" type="radio" checked />
                    <span>Monsieur</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap deep-orange" name="group1" type="radio" />
                    <span>Madame</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap deep-orange" name="group1" type="radio" />
                    <span>LGBTQAVWXYZ</span>
                </label>
            </p>
        </form>
        <div>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="" id="first_name" type="text" class="validate">
                            <label for="first_name"><i class="material-icons">face</i>Prénom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name"><i class="material-icons">face</i>Nom</label>
                        </div>
                        <div class="input-field col s12">
                            <label for="last_name"><i class="material-icons">home</i>Adresse</label>
                            <input id="last_name" type="text" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="password" type="password" class="validate">
                            <label for="password"><i class="material-icons">https</i>Mot de passe</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email"><i class="material-icons">alternate_email</i>Email</label>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div>
            <p>Hobbies: </p>
            <p>
                <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Lecture</span>
                </label>
            </p>
            <p>
                <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Informatique</span>
                </label>
            </p>
            <p>
                <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Sport</span>
                </label>
            </p>
            <p>
                <label>
                    <input id="indeterminate-checkbox" type="checkbox" />
                    <span>Voyage</span>
                </label>
            </p>
        </div>
        <button class="btn waves-effect waves-light deep-orange" type="submit" name="action" style="margin-bottom: 10px">Envoyer
            <i class="material-icons right">send</i>
        </button>
        </form>
    </main>
    <footer class="page-footer deep-orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Armor</h5>
                    <p class="grey-text text-lighten-4">Un Armor pour réparer vos fuites d'eau ou encore votre toiture ? Vous êtes à la bonne adresse.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Navigation</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2021 Armor Corp
                <a class="grey-text text-lighten-4 right" href="#!">ArmorArmorArmorArmor</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>