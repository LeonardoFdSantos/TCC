<?php
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_connect($sock,"192.168.0.104",80);
/* SALA */
if ($_POST['estado']=="LTVS"){
  socket_write($sock, "LTVS");
}
elseif ($_POST['estado']=="DTVS"){
  socket_write($sock, "DTVS");
}
elseif ($_POST['estado']=="LSS") {
  socket_write($sock, "LSS");
}
elseif ($_POST['estado']=="DSS") {
  socket_write($sock, "DSS");
}
elseif ($_POST['estado']=="LAS") {
  socket_write($sock, "LAS");
}
elseif ($_POST['estado']=="DAS") {
  socket_write($sock, "DAS");
}
elseif ($_POST['estado']=="LSS") {
  socket_write($sock, "LSS");
}
elseif ($_POST['estado']=="DLS") {
  socket_write($sock, "DLS");
}
/* COZINHA */
elseif ($_POST['estado']=="LGC") {
  socket_write($sock, "LGC");
}
elseif ($_POST['estado']=="DGC") {
  socket_write($sock, "DGC");
}
elseif ($_POST['estado']=="LLC") {
  socket_write($sock, "LLC");
}
elseif ($_POST['estado']=="DLC") {
  socket_write($sock, "DLC");
}
elseif ($_POST['estado']=="LTC") {
  socket_write($sock, "LTC");
}
elseif ($_POST['estado']=="DTC") {
  socket_write($sock, "DTC");
}
/* lAVANDERIA */
elseif ($_POST['estado']=="LML") {
  socket_write($sock, "LML");
}
elseif ($_POST['estado']=="DML") {
  socket_write($sock, "DML");
}
elseif ($_POST['estado']=="LLL") {
  socket_write($sock, "LLL");
}
elseif ($_POST['estado']=="DLL") {
  socket_write($sock, "DLL");
}
/* AREA EXTERNA */
elseif ($_POST['estado']=="LLG") {
  socket_write($sock, "LLG");
}
elseif ($_POST['estado']=="DLG") {
  socket_write($sock, "DLG");
}
elseif ($_POST['estado']=="LLFU") {
  socket_write($sock, "LLFU");
}
elseif ($_POST['estado']=="DLFU") {
  socket_write($sock, "DLFU");
}
elseif ($_POST['estado']=="LLFR") {
  socket_write($sock, "LLFR");
}
elseif ($_POST['estado']=="DLFR") {
  socket_write($sock, "DLFR");
}
/* QUARTOS */
elseif ($_POST['estado']=="LTVQC") {
  socket_write($sock, "LTVQC");
}
elseif ($_POST['estado']=="DTVQC") {
  socket_write($sock, "DTVQC");
}
elseif ($_POST['estado']=="LLQC") {
  socket_write($sock, "LLQC");
}
elseif ($_POST['estado']=="DLQC") {
  socket_write($sock, "DLQC");
}
elseif ($_POST['estado']=="LLQS1") {
  socket_write($sock, "LLQS1");
}
elseif ($_POST['estado']=="DLQS1") {
  socket_write($sock, "DLQS1");
}
elseif ($_POST['estado']=="LLQS2") {
  socket_write($sock, "LLQS2");
}
elseif ($_POST['estado']=="DLQS2") {
  socket_write($sock, "DLQS2");
}
elseif ($_POST['estado']=="LAQC") {
  socket_write($sock, "LAQC");
}
elseif ($_POST['estado']=="DAQC") {
  socket_write($sock, "DAQC");
}
elseif ($_POST['estado']=="LAQS1") {
  socket_write($sock, "L1QS1");
}
elseif ($_POST['estado']=="DAQS1") {
  socket_write($sock, "DAQS1");
}
elseif ($_POST['estado']=="LAQS2") {
  socket_write($sock, "L1QS2");
}
elseif ($_POST['estado']=="DAQS2") {
  socket_write($sock, "DAQS2");
}
header("location: ../index.html");
socket_close($sock);
?>
