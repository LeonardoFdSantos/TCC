<?php
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($sock,"192.168.0.104",80);

$IPplaca = 192.168.0.104;
$IPcomp = 192.168.0.195;
$PortPlaca = 80;
$PortComp = 8088;
$ipcomp = $_SERVER["REMOTE_ADDR"];
$ipplaca = $_get['ipesp'];
$consumindo = $_get['consumidor'];
$gc = $_get['geladeira'];
$luzc = $_get['luz_coz'];
$tec = $_get['te_coz'];
$luzs = $_get['luz_sala'];
$tvs = $_get['tv_sala'];
$soms = $_get['som_sala'];
$ars = $_get['ar_sala'];
$luzl = $_get['luz_lav'];
$mql = $_get['maq_lav'];
$luzg = $_get['luz_ga'];
$luzfu = $_get['luz_fu'];
$luzfr = $_get['luz_fr'];
$tvqc = $_get['tv_qcasal'];
$arqc = $_get['ar_qcasal'];
$arqs1 = $_get['ar_qsol1'];
$arqs2 = $_get['ar_qsol2'];
$luzqc = $_get['luz_qcasal'];
$luzqs1 = $_get['luz_qsol1'];
$luzqs2 = $_get['luz_qsol2'];

socket_close($sock);

?>
