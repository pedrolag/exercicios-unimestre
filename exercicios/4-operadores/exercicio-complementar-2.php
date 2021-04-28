<?php

$valor = 50;

$a = $valor > 40;

$b = $valor < 60;

$c = $valor >= 70;

$d = $a && $b;

$e = $b || $c;

$f = $a || $c;

var_dump($a, $b, $c, $d, $e, $f);



$sn_exibir_btn_iugu = (
    $sn_condicao_especial_iugu
    && !$sn_condicao_especial_recorrencia
    && $sn_exibir_btn_quero_bolsa == false
    && $arrMensalidade['impressao'] == 'S'
    && !$arrMensalidade['outro_resp']
);