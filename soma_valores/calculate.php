<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma de 2 Valores</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);
    if(isset($button)){
        $sum = (int)$a + (int)$b;

        echo '<div class="box"><h1>'.$sum.'</h1></div>';
    }
?>