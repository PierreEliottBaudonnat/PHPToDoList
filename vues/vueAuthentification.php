<html>
    <head>
        <title>ToDoList</title>
        <meta charset="UTF-8">
        <link rel="icon" href="css/images/icon.png"/>
        <link href="http://localhost/PHPToDoList/vues/css/auth.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div align="center" id="bloc_page">
            <form class="form-signin" action="?action=validateAuth" method="post">
                <section>
                    <h1 id="log">Login :</h1>
                    <input name="login" class="form-control" id="boxlog" required="" type="text" placeholder="Votre login :"/>
                </section>
                <section>
                    <h1 id="mdp">Mot de passe :</h1>
                    <input name="motDePasse" class="form-control" id="boxmdp" required="" type="password" placeholder="Votre mot de passe"/>
                </section>
                <section id="toutCo">
                    <button type="submit">Se connecter</button>
                </section>
            </form>
        </div>
    </body>
</html>
