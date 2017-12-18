<html lang="fr">
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PhpProject/vues/css/accueil.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div align="center" id="bloc_page">
            <h1 id="titre">Bienvenue sur votre site de Gestion de Tâches !</h1>
            <!-- affichage de données provenant du modèle -->
            <h1 id="phrase">Découvrez quelle est votre liste d'activité à faire :</h1>
            <h2 id="choix">Choisissez si vous voulez être "anonyme" ou "identifié"</h2>

            <nav>
                <ul id="menu">
                    <li><a href="?action=anonyme">Anonyme</a></li>
                    <li><a>Identifié</a>
                        <ul>
                            <li><a href="?action=connexion">Se connecter</a></li>
                            <li><a>S'inscrire</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--
            <ul>
                <li>
                    <span class="Item">Faire le site</span>
                    <a href="#">Marquer comme fait</a>
                </li>
                <li>
                    <span class="Item done">Dormir</span>
                </li>
            </ul>
            <form class="ajout" action="add.php" method="post">
                <input type="text" name="name" placeholder="Entrer une tache" class="input" autocomplete="off" required>
                <input type="submit" value="Add" class="submt">
            </form>
            -->
    </body>
</html>
