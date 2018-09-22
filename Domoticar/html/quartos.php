<?php
require("var.php");
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Quartos by Domoticar</title>
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
						<h2>Menu Quartos</h2>
					</header>
					<p> Para visualizar os Quartos separados utilizar os botões abaixo:</p>
                    <button class="button1"><a href="quartocasal.php">Quartos Casal</a></button>
                    <button class="button1"><a href="quartosolt1.php">Quartos Solteiro 1</a></button>
                    <button class="button1"><a href="quartosolt2.php">Quartos Solteiro 2</a></button>
                    <H2>Controles</H2>
                    <form method="post" action="controle.php">
                    <p>Televisão Quarto Casal:
                      <button class="btn btn-success" type="submit" name="estado" value="LTVQC">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DTVQC">Off</button> ';
                      echo $tv_ca; echo'
                    </p>
                    <p>Luz Quarto Casal:
                      <button class="btn btn-success" type="submit" name="estado" value="LLQC">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DLLQC">Off</button> ';
                      echo $luz_ca; echo'
                    </p>
                    <p>Luz Quarto Solteiro 1:
                      <button class="btn btn-success" type="submit" name="estado" value="LLQS1">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DLQS1">Off</button> ';
                    echo $luz_s1; echo'
                    </p>
                    <p>Luz Quarto Solteiro 2:
                      <button class="btn btn-success" type="submit" name="estado" value="LLQS2">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="LLQS2">Off</button> ';
                      echo $luz_s2; echo'
                    </p>
                    <p>AR Quarto Casal:
                      <button class="btn btn-success" type="submit" name="estado" value="LAQC">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DAQC">Off</button> ';
                      echo $ar_ca; echo'
                    </p>
                    <p>AR Quarto Solteiro 1:
                      <button class="btn btn-success" type="submit" name="estado" value="LAQS1">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DAQS1">Off</button> ';
                      echo $ar_ca; echo'
                    </p>
                    <p>AR Quarto Solteiro 2:
                      <button class="btn btn-success" type="submit" name="estado" value="LAQS2">On</button>
                      <button class="btn btn-danger" type="submit" name="estado" value="DAQS2">Off</button> ';
                      echo $ar_ca; echo'
                    </p>
                    </form>
                    
                </div>
			</section>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

	</body>
</html>';
