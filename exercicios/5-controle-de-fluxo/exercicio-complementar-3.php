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

    $nr_tijolos_camada = 0;
    $nr_espacos_camada = 0;
    $nr_camadas_total = 4;
    $nr_camada_atual = 0;

    $sn_arvore_terminada = false;

    echo("<pre>");

    while (!$sn_arvore_terminada) {

        // Determinar o número de espaços e tijolos que serão impressos
        if ($nr_camada_atual == 0) {
            $nr_tijolos_camada = 1;
            $nr_espacos_camada = 3;
        } else {
            $nr_tijolos_camada += 2;
            $nr_espacos_camada -= 1;
        }

        // Incrementar o número da camada atual
        $nr_camada_atual += 1;

        // Imprimir espacos
        for ($x = 0; $x < $nr_espacos_camada; $x ++) {
            echo(" ");
        }

        // Imprimir tijolos
        for ($x = 0; $x < $nr_tijolos_camada; $x ++) {
            echo("*");
        }

        // Quebrar a linha
        echo("<br />");

        // Verificar se a árvore está pronta
        if ($nr_camada_atual == $nr_camadas_total) {
            $sn_arvore_terminada = true;
        }

    }

}

piramide();