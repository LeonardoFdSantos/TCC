<?php
require_once("conf.php");

$login = $_POST['login'];
$senha = $_POST['senha'];
//coloca \ antes das aspas para evitar SQL Injection
if(get_magic_quotes_gpc() == 0){
$login = addslashes($login);
$senha = addslashes($senha);
}
//criptografamos a senha
$senha = md5($senha);
//executamos uma consulta no banco de dados
$sql = mysqli_query($conexao,"SELECT id, Nome FROM usuarios WHERE Login = '$login' AND Senha = '$senha'") or die("ERRO NO COMANDO SQL");

//retorma o n�mero de linhas retornadas pela consulta acima
$row = mysqli_num_rows($sql);

if($row == 0){
    echo "Senha e/ou usuarios invalidos";
    echo "<br>";
    sleep(10);
    header("Location: login.html");
}else{
    $id = mysqli_fetch_assoc($sql,"id");//pegamos o id do usuario autentica
    $nome = mysqli_fetch_assoc($sql, "Nome");//pegamos o nome do usu�rio autenticado

    //redirecionamos para a p�gina do resultado
    header("Location: dashboard.html");

}