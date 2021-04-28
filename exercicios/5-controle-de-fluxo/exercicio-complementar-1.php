<?php

/**
 * Pág 36 - Exercícios Complementares - Número 1
 */

/** Valor aleatório entre 0 e 1000 */
$nr_aleatorio = mt_rand(0, 1000);

/** Valor aleatório entre 0 e 23 */
$nr_aleatorio = mt_rand(0, 23);

/** Repetição While */
$x = 0;

while ($x < 10) {
    echo("O valor de x é $x. <br />");
    $x += 1;
}

/** Repetição For */
for ($x = 0; $x < 10; $x++) {
    echo("O valor de x é $x. <br />");
}

/** Break While */
$x = 0;

while ($x < 10) {
    if ($x == 4) {
        break;
    }
    echo("O valor de x é $x. <br />");
    $x += 1;
}

/** Break For */
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo("O valor de x é $x. <br />");
}