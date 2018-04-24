<html>
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PHPToDoList/vues/css/modif.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center">
            <h1>Suppression d'une tâche</h1>
            <form class="form-signin" action="?action=validSuppr" method="post" id="formModif">
                <section>
                    <h2 id="id">Numéro de la tâche à supprimer</h2>
                    <input name="idTache" class="form-control" id="boxId" required type="number" placeholder="Votre numéro"/>
                </section>

                <button type="submit">Valider</button>
            </form>

            <button id="retour">
                <a href="?action=validateAuth">Retour page précédente</a>
            </button>
        </div>
    </body>
</html>