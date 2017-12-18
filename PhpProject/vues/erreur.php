
/**
 * Created by PhpStorm.
 * User: Pierre Eliott
 * Date: 23/11/2017
 * Time: 20:35
 */

<html>
    <head>
        <title>Erreur</title>
    </head>

    <body>
        <h1>ERREUR !!!!!</h1>
        <?php
            if (isset($dVueEreur)) {
                foreach ($dVueEreur as $value){
                    echo $value;
                }
            }
        ?>
    </body>
</html>