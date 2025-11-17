<?php
include "includes/util.php";

$n1 = limpar($_POST['n1']);
$n2 = limpar($_POST['n2']);

$soma = $n1 + $n2;

$subtracao = $n1 - $n2;

$multiplicacao = $n1 * $n2;

$divisao = $n1 / $n2;

$data = [
    'soma' => $soma,
    'subtracao' => $subtracao,
    'multiplicacao' => $multiplicacao,
    'divisao' => $divisao,
];

echo json_encode($data);