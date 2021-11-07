<?php
session_start();

$nomeTime1 = $_POST['time1'];
$numGols_1 = $_POST['num-gol-time1'];
$nomeTime2 = $_POST['time2'];
$numGols_2 = $_POST['num-gol-time2'];

$_SESSION['time1'] = $nomeTime1;
$_SESSION['gols-time1'] = $numGols_1;
$_SESSION['time2'] = $nomeTime2;
$_SESSION['gols-time2'] = $numGols_2;

$_SESSION['msg-error'] = "<font color='#FF3300'>Insira o nome dos times e a qtd de gols.</font>";
$_SESSION['msg-error-times'] = "<font color='#FF3300'>Insira o nome dos times.</font>";
$_SESSION['msg-error-gols'] = "<font color='#FF3300'>Insira a qtd de gols.</font>";

if ($numGols_1 > $numGols_2) {
    $timeVencedor = $nomeTime1;
    $_SESSION['time-venc'] = "<font color='#006400'>O time vencedor é $timeVencedor.</font>";
    header("location: index.php");
} elseif ($numGols_1 < $numGols_2) {
    $timeVencedor = $nomeTime2;
    $_SESSION['time-venc'] = "<font color='#006400'>O time vencedor é $timeVencedor.</font>";
    header("location: index.php");
} else {
    $_SESSION['time-venc'] = "<font color='#FF6600'>Houve empate na partida.</font>";
    header("location: index.php");
}

?>