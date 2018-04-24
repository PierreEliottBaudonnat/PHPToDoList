<html>
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PHPToDoList/vues/css/modif.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center">
            <h1>Modification d'une tâche</h1>
            <form class="form-signin" action="?action=validModif" method="post" id="formModif">
                <section>
                    <h2 id="id">Numéro de la tâche à modifier</h2>
                    <input name="idTache" class="form-control" id="boxId" required type="number" placeholder="Votre numéro(obligatoire)"/>
                </section>
                <section>
                    <h2 id="titre">Titre de la tâche à modifier</h2>
                    <input name="titreTache" class="form-control" id="boxTitre" type="text" placeholder="Votre titre"/>
                </section>
                <section>
                    <h2 id="desc">Description de la tâche à modifier</h2>
                    <input name="description" class="form-control" id="boxDesc" type="text" placeholder="Votre description"/>
                </section>
                <section>
                    <h2 id="time">Durée de la tâche à modifier</h2>
                    <input name="duree" class="form-control" id="boxTime" type="text" placeholder="Votre durée estimée"/>
                </section>
                <button type="submit">Valider</button>
            </form>

            <button id="retour">
                <a href="?action=validateAuth">Retour page précédente</a>
            </button>

        </div>
    </body>
</html>