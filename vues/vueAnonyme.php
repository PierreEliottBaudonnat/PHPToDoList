<html>
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PHPToDoList/vues/css/accueil.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center" id="bloc_page">
            <h1 id="titre">Bienvenue anonyme !</h1>

            <h1 id="phrase">Découvrez la liste de tâches publiques : <br></h1>

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