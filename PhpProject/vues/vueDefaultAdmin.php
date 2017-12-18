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
        <button id="btAccueil" href="?action=default">Retour au menu</button>
    </div>
    <h1 id="titre">Bienvenue <?php echo $_POST['login']?> !</h1>

    <h1 id="phrase">Découvrez ce que vous pouvez faire :</h1>

    <section>
        <button href="?action=ajoutTache">Ajouter Tâche ?</button>
        <button>Modifier Tâche ?</button>
        <button>Supprimer Tâche ?</button>
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
</div>
</body>
</html>