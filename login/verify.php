<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);

    if($user == 'kauan' && $pass == '123456'){
        header('Location: aprovado.html');
        exit;
    }else{
        header('Location: reprovado.html');
        exit;
    }
?>