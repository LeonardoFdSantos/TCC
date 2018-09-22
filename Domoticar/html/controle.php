<?php
require ("conf.php");
require ("Entrada.php");
//$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//socket_connect($sock,$ESP,80);
/* SALA */
if ($_POST['estado']=="LTVS"){
    $sql = mysqli_query($conexao,"UPDATE comandos SET tv_sala = ('1')");
    //socket_write($sock, "1");
}
elseif ($_POST['estado']=="DTVS"){
    $sql = mysqli_query($conexao,"UPDATE comandos SET tv_sala = ('0')");
}
elseif ($_POST['estado']=="LSS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET som_sala = ('1')");
    $som_sa = "On";
}
elseif ($_POST['estado']=="DSS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET som_sala = ('0')");
    $som_sa = "Off";
}
elseif ($_POST['estado']=="LAS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_sala = ('1')");
    $ar_sa = "On";
}
elseif ($_POST['estado']=="DAS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_sala = ('0')");
    $ar_sa = "Off";
}
elseif ($_POST['estado']=="LLS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_sala = ('1')");
    $luz_sa = "On";
}
elseif ($_POST['estado']=="DLS") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_sala = ('0')");
    $luz_sa = "Off";
}
 /* COZINHA */
elseif ($_POST['estado']=="LGC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET geladeira_co = ('1')");
}
elseif ($_POST['estado']=="DGC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET geladeira_co = ('0')");
}
elseif ($_POST['estado']=="LLC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_co = ('1')");
}
elseif ($_POST['estado']=="DLC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_co = ('0')");
}
elseif ($_POST['estado']=="LTC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET torneira_co = ('1')");
}
elseif ($_POST['estado']=="DTC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET torneira_co = ('0')");
}
 /* LAVANDERIA */
elseif ($_POST['estado']=="LML") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET maq_la = ('1')");
}
elseif ($_POST['estado']=="DML") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET maq_la = ('0')");
}
elseif ($_POST['estado']=="LLL") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_la = ('1')");
  socket_write($sock, "17");
}
elseif ($_POST['estado']=="DLL") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_la = ('0')");
}
 /* AREA EXTERNA */
elseif ($_POST['estado']=="LLG") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_ga = ('1')");
}
elseif ($_POST['estado']=="DLG") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_ga = ('0')");
}
elseif ($_POST['estado']=="LLFU") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_fu = ('1')");
}
elseif ($_POST['estado']=="DLFU") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_fu = ('0')");
}
elseif ($_POST['estado']=="LLFR") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_fr = ('1')");
}
elseif ($_POST['estado']=="DLFR") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_fr = ('0')");
}
 /* QUARTOS */
elseif ($_POST['estado']=="LTVQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET tv_ca = ('1')");
}
elseif ($_POST['estado']=="DTVQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET tv_ca = ('0')");
}
elseif ($_POST['estado']=="LLQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_ca = ('1')");
}
elseif ($_POST['estado']=="DLQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_ca = ('0')");
}
elseif ($_POST['estado']=="LLQS1") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_s1 = ('1')");
}
elseif ($_POST['estado']=="DLQS1") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_s1 = ('0')");
}
elseif ($_POST['estado']=="LLQS2") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_s2 = ('1')");
}
elseif ($_POST['estado']=="DLQS2") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET luz_s2 = ('0')");
}
elseif ($_POST['estado']=="LAQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_ca = ('1')");
}
elseif ($_POST['estado']=="DAQC") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_ca = ('0')");
}
elseif ($_POST['estado']=="LAQS1") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_s1 = ('1')");
}
elseif ($_POST['estado']=="DAQS1") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_s1 = ('0')");
}
elseif ($_POST['estado']=="LAQS2") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_s2 = ('1')");
}
elseif ($_POST['estado']=="DAQS2") {
    $sql = mysqli_query($conexao,"UPDATE comandos SET ar_s2 = ('0')");
}
header("location: dashboard.html");
socket_close($sock);
?>

