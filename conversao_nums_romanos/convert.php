<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversão Números Romanos</title>
    <link rel="stylesheet" href="../main_style.css">
    <link rel="stylesheet" href="style.css">
</head>

<?php
    extract($_POST);

    function convert($input){

        $milhar = ['', 'M', 'MM', 'MMM'];
        $centena = ['', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'];
        $dezena = ['', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXXX', 'LC'];
        $unidade = ['', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
        
        if($input < 1 || $input > 3999){
            $result = 'N° fora de alcance';
        } else {
            $input = str_split($input);
            $contador_valores = count($input);

            $result = get_result($contador_valores, $milhar, $centena, $dezena, $unidade);
        }
        echo '<div class="box"><h1>'.$result.'</h1></div>';
    }

    function get_result($contador, $milhar, $centena, $dezena, $unidade) {
        global $input;

        switch($contador) {
            case 1:
                return $unidade[$input[0]];
                break;
            case 2:
                return $dezena[$input[0]].''.$unidade[$input[1]];
                break;
            case 3:
                return $centena[$input[0]].''.$dezena[$input[1]].''.$unidade[$input[2]];
                break;
            case 4:
                return $milhar[$input[0]].''.$centena[$input[1]].''.$unidade[$input[2]].''.$unidade[$input[3]];
                break;     
        }
    }

    if(isset($button)){
        convert($input);
    }
?>