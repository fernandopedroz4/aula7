<?php
header("content-type:application/json");


echo json_encode($soma);
$subtracao = $n1 - $n2;
echo json_encode($subtracao);
$multiplicacao = $n1 * $n2;
echo json_encode($multiplicacao);
$divisao = $n1 / $n2;
echo json_encode($divisao);