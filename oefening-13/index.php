<?php
$cars = [
    ['Volvo', 22, 18],
    ['BMW', 15, 13],
    ['Saab', 0, 5],
    ['Land Rover', 17, 15],
];
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Multidimensional array</title>
    </head>

    <body>
        <table>

            <?php

            echo "<col>" . $cars[0][0] . "</col>";
            echo "<row>" . $cars[1][0] . "</row>";
            echo "<col>" . $cars[2][0] . "</col>";
            echo "<col>" . $cars[3][0] . "</col>";

        ?>
        </table>
    </body>

    </html>
