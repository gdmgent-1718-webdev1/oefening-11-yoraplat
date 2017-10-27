<?php
$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Nav</title>
    </head>

    <body>
        <ul>

            <?php

        foreach ($navigation as $key => $value){
            echo "<a href=#>" . $value . "</a>" . " ";
        }
        ?>

        </ul>
    </body>

    </html>
