<?php

    extract($_POST);

    if(isset($criptografia_md5)){
        $var = 'criptografia_md5';
    } elseif(isset($login)){
        $var = 'login';
    } elseif(isset($equacao_segundo_grau)){
        $var = 'equacao_segundo_grau';
    } elseif(isset($cores)){
        $var = 'cores';
    } elseif(isset($multa)){
        $var = 'multa';
    } elseif(isset($conversao_nums_romanos)){
        $var = 'conversao_nums_romanos';
    } elseif(isset($soma_valores)){
        $var = 'soma_valores';
    } elseif(isset($sign_up)){
        $var = 'sign_up';
    }
    
    header('Location: '.$var.'/');
    exit;
?>