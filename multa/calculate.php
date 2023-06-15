<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Multa</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);

    $difference = $vh_speed - $track_speed;
    if($difference < 10){
        $result = 'Não vai receber multa';
    } elseif($difference >= 10 && $difference <= 50){
        $result = 'Multa de R$ 50,00';
    } elseif($difference > 50 && $difference <= 100){
        $result = 'Multa de R$ 100,00';
    } else{
        $result = 'Multa de R$ 200,00';
    }

    echo '<div class="box"><h1>'.$result.'</h1></div>';
?>