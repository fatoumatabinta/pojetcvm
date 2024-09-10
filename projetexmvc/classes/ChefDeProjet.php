


<?php
	require_once "pageConnection.php";
     session_start();
//clic sur deconnexion...
   if (isset($_GET['logout'])) {//si clic sur deconnexion
	session_destroy();

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
			fieldset{
				top: 0px;
			display: block;
			width: 150px;
			height: 100px;
			
			
		}
		label{
			display: inline;
			
		}
		legend,label{
			font-weight: bolder;
			}
			body{
				background:linear-gradient(white,green,lime,white);
			}
            a{
                color:black;
            }
	</style>
</head>
<body>
	<center>
	
	<fieldset><legend>Profil: Chef de projet</legend>
		<label>Date:</label><?php echo date("D/M/Y"); ?><br>
		<label>Heure:</label><?php echo date("H/i/s/a"); ?><br>
	</fieldset>
		<h1><u>MENU GENERAL</u></h1>
		<h3><a href="formulaireFonctionnalites.html">ajouter fonctionnalites</a></h3>
        <h3><a href="formulaire.html?logout=ok">Deconnection</a></h3>	
		
			
    </center>
</body>
</html>