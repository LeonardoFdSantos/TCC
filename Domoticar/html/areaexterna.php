<?php
require("var.php");
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Área Externa by Domoticar</title>
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
						<h2>Menu Área Externa</h2>
					</header>
    <form method="post" action="controle.php">
    <p>Luz Garagem:
      <button class="btn btn-success" type="submit" name="estado" value="LLG">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DLG">Off</button> ';
    echo $luz_ga; echo'
      </p>
    <p>Luz Fundos:
      <button class="btn btn-success" type="submit" name="estado" value="LLFU">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DLFU">Off</button> ';
    echo $luz_fu; echo'
    </p>
    <p>Luz Frente:
      <button class="btn btn-success" type="submit" name="estado" value="LLFR">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DLFR">Off</button> ';
    echo $luz_fr; echo'
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