<?php
require("var.php");
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Lavanderia by Domoticar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../assets/css/main1.css" />
		
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="dashboard.html" class="logo"><strong>DOMOTICAR</strong> by LEONARDO</a>
					<nav id="nav">
						<a href="sala.php">Sala</a>
						<a href="cozinha.php">Cozinha</a>
						<a href="quartos.php">Quartos</a>
						<a href="lavanderia.php">Lavanderia</a>
						<a href="areaexterna.php">Área Externa</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
   <section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Lavanderia</h2>
					</header>
    <form method="post" action="controle.php">
    <p>Máquina de lavar:
      <button class="btn btn-success" type="submit" name="estado" value="LML">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DML">Off</button> ';
    echo $maq_la; echo'
    </p>
    <p>Luz:
      <button class="btn btn-success" type="submit" name="estado" value="LLL">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DLL">Off</button> ';
    echo $luz_la; echo'
    </p>
    </form>
</div>
			</section>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

	</body>
</html>\';';