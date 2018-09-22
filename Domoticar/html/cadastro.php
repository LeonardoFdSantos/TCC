<?php
require("conf.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

$select = mysqli_query($conexao, "SELECT Login FROM usuarios WHERE Login = '$login1'");
$array = mysqli_fetch_assoc($select);
$verifica = $array['$login1'];

if ($login == "" || $login == null) {
    echo "<script language='javascript' type='text/javascript'> alert('O campo login deve ser preenchido');window.location.href='cadastro.html'</script>";
} else {
    if ($verifica == $login) {
        echo "<script language='javascript' type='text/javascript'> alert('Esse login já existe');window.location
        .href='cadastro.html';</script>";
        die();
    } else {
        $insert = mysqli_query($conexao, "INSERT INTO usuarios (Nome, Email, Login, Senha) VALUES ('$nome','$email','$login','$senha')");
        if ($insert) {
            echo "<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!');window.location.href='dashboard.html'</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'> alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
    }
}
