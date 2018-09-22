<?php
require("var.php");
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Quarto Casal by Domoticar</title>
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
						<a href="quartos.php">Quartos</a>
						<a href="quartocasal.php">Quarto Casal</a>
						<a href="quartosolt1.php">Quarto Solteiro 1</a>
						<a href="quartosolt2.php">Quarto Solteiro 1</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
    
   <section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Menu Quarto Casal</h2>
					</header>
    <form method="post" action="controle.php">
    <p>Luz:
      <button class="btn btn-success" type="submit" name="estado" value="LLQC">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DLQC">Off</button> ';
      echo $luz_ca; echo'
    </p>
    <p>Ar:
      <button class="btn btn-success" type="submit" name="estado" value="LAQC">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DAQC">Off</button> ';
      echo $ar_ca; echo'
    </p>
    <p>Televisão:
      <button class="btn btn-success" type="submit" name="estado" value="=LTVQC">On</button>
      <button class="btn btn-danger" type="submit" name="estado" value="DTVQC">Off</button> ';
      echo $ar_ca; echo'
      </p>
    </form>
</section>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

	</body>
</html>';