<?php

/**
 * Pág 45 - Exercícios Complementares - Número 3
 * 
 *    *
 *   ***
 *  *****
 * *******
 */

function piramide() {

    $nr_total_camadas = 4;
    $nr_espacos = 4;
    $nr_estrelas = 1;

    echo("<pre>");

    while ($nr_total_camadas > 0) {

        for ($x = 0; $x < $nr_espacos; $x ++) {

            echo(" ");

        }

        for ($x = 0; $x < $nr_estrelas; $x ++) {

            echo("*");

        }
        
        if ($nr_estrelas > 1) {

            for ($x = 1; $x < $nr_estrelas; $x ++) {
                
                echo("*");
                
            }

        }
        
        echo("<br>");

        $nr_total_camadas -= 1;
        $nr_espacos -= 1;
        $nr_estrelas += 1;

    }

    echo("</pre>");

}

piramide();