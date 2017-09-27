<?php
session_start();
if (isset($_GET['ajouter'])) {
	if (!isset($_SESSION['list'])) {
			$_SESSION['list'] = array();
	}
	array_push($_SESSION['list'], $_GET['ajouter']);
	
}
$panier_count = 0;
if (isset($_SESSION['list'])) {
	$panier_count = sizeof($_SESSION['list']);
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Exercice Panier - Page article</title>
<link rel="stylesheet" href="pageindexStyle.css" />

</head>
<body>
	<div class="header">
      <?php include 'header.php';?>
    </div>
		<div class="wrapper">
			<div class="number1">
			<img class="ours" src="ours.jpg">
					<a class="article1" href="pageindex.php?page=1">Article 1</a>
			</div>
			<div class="number2">
			<img  class="velo" src="velo.jpg">
			<a class="article2" href="pageindex.php?page=2">Article 2</a>
			</div>


			<?php include ( 'article' . (isset($_GET['page']) ? $_GET['page'] : '1') . '.php' ); ?>

			<div class="deco">
				<a class="deco" href="decopanier.php">Deconnexion</a>
			</div>
		</div>
</body>
</html>