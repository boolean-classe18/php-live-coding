<?php

// Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP - foreach</title>
    </head>
    <body>
        <h1>Lista parametri GET:</h1>
        <ul>
            <?php
            foreach ($_GET as $key => $param) { ?>
                <li>
                <?php echo $key . ' = ' . $param; ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </body>
</html>
