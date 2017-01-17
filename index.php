<?php
require 'lib/Car.php';
require 'lib/MyCar.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>Modif de ma voiture</h1>

	<form action="#" method="post">
		<label for="couleur">Couleur</label>
		<input type="text" name="couleur" id="couleur">
		<br>
		<label for="type">Type</label>
		<input type="text" name="type" id="type">
		<br>
		<label for="nbRoue">Nombre de roue</label>
		<input type="text" name="nbRoue" id="nbRoue">
		<br>
<input type="submit" value="Modif">
	</form>

	<h1>My Car</h1>
	<p><?php 
		$maVoiture = new Mycar('Bleu','Sportive','4');

		echo " Couleur :  " . $maVoiture->setColor($_POST["couleur"]) ."<br> ";
		echo " Type :  " . $maVoiture->settype($_POST["type"]) . "<br> ";
		echo "Nombre de roue :  " . $maVoiture->setWeels($_POST["nbRoue"]) . " <br> ";

		?></p>

	</body>
	</html>