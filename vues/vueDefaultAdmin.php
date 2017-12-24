<html>
<head>
    <title>ToDoList</title>
    <meta charset="UTF-8">
    <link rel="icon" href="css/images/icon.png"/>
    <link href="http://localhost/PhpProject/vues/css/accueil.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center" id="bloc_page">
    <div align="left">
        <button>
            <a id="btAccueil" href="?action=default">Déconnexion</a>
        </button>
    </div>
    <h1 id="titre2">Bienvenue <?php echo $login ?> !</h1>

    <h1 id="phrase">Découvrez ce que vous pouvez faire :</h1>

    <section>
        <button><a href="?action=ajoutTache">Ajouter Tâche ?</a></button>
        <button><a href="?action=modifTache">Modifier Tâche ?</a></button>
        <button><a href="?action=supprTache">Supprimer Tâche ?</a></button>
    </section>

    <h1 id="phrase">Découvrez aussi la liste de tâches publiques : <br></h1>

    <section>
        <h2 id="menuNu">Numéro</h2>    <h2 id="menuTi">Titre</h2>  <h2 id="menuDe">Description</h2>    <h2 id="menuDu">Duree</h2>

    </section>
    <div id="php">
        <?php
        $model = new \modeles\ListeTachesModel();
        $model->getModelListeTachesPubliques();
        ?>
    </div>
    <div id="phpPrive">
        <?php
        $model->getModelListeTachesPrivees();
        ?>
    </div>

    <h1 id="phrase">Découvrez aussi VOS tâches perso, les tâches privées</h1>

    <section>
        <button><a href="?action=ajoutTachePrivee">Ajouter Tâche Privée ?</a></button>
        <button><a href="?action=modifTachePrivee">Modifier Tâche Privée ?</a></button>
        <button><a href="?action=supprTachePrivee">Supprimer Tâche Privée ?</a></button>
    </section>

</div>
</body>
</html>