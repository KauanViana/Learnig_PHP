<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);
    if(isset($subm)){
        $user = 'Usuário: '.$user.'<br>';
        $pass = 'Senha: '.md5($pass).'<br>';
        echo '<div class="box">'.$user.$pass.'</div>';
    }
?>