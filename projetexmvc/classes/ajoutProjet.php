<?php

require_once "pageConnection.php";
require_once "traitementAuthentic.php";


$nomProjet=$_POST['nomProjet'];
$dateDebutProjet=$_POST['dateDebutProjet'];
$dateFinPrevuProjet=$_POST['dateFinPrevuProjet'];
$dateFinReelProjet=$_POST['dateFinReelProjet'];
$coutPrevueProjet=$_POST['coutPrevueProjet'];
$listObjectifProjet=$_POST['listObjectifProjet'];
$chefDeProjet=$_POST['chefDeProjet'];


saveProjet($nomProjet,$dateDebutProjet,$dateFinPrevuProjet,$dateFinReelProjet,$coutPrevueProjet,$listObjectifProjet);





?>