<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Equação 2° Grau</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);

    $a = (int)$a;
    $b = (int)$b;
    $c = (int)$c;

    if(isset($enviar)){
        if($a == 0){
            $result = $c/$b;
            $result = 'X = '.(string)$result;
        } else {
            $delta = pow($b, 2) - (4 * $a *$c);

            if($delta < 0){
                $result = 'Raiz inexistente';
            } elseif($delta == 0){
                $result = (-$b + SQRT($delta)) / (2 * $a);
                $result = 'X = '.(string)$result;
            } else {
                $x1 = (-$b + SQRT($delta)) / (2 * $a);
                $x2 = (-$b - SQRT($delta)) / (2 * $a);

                $result = 'X1 = '.(string)$x1.'<br>X2 = '.(string)$x2;
            }
        }
        echo '<div class="box"><h1>'.$result.'</h1></div>';
    }
?>