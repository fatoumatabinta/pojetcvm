<?php
require_once 'pageConnection.php';

//  echo"Votre nom est :".$n.".<br>";
//  echo"Votre prenom est :".$pr.".<br>";
// // echo"Votre email est :".$e.".<br>";
// // echo"Votre mot de passe est :".$pa.".<br>";
// // echo"Votre numero est :".$t.".<br>";
// // echo"Votre matricule est :".$m.".<br>";
// // echo"Votre identifiant est :".$i.".<br>";
// // echo "Votre profil est : ".$pro.".<br>";

// infos projet

$nomProjet=$_POST['nomProjet'];
$dateDebutProjet=$_POST['dateDebutProjet'];
$dateFinPrevuProjet=$_POST['dateFinPrevuProjet'];
$dateFinReelProjet=$_POST['dateFinReelProjet'];
$coutPrevueProjet=$_POST['coutPrevueProjet'];
$listObjectifProjet=$_POST['listObjectifProjet'];
$chefDeProjet=$_POST['chefDeProjet'];
// infos taches
$nomTaches=$_POST['nomTaches'];
$dateDebutTaches=$_POST['dateDebutTaches'];
$dateFinPrevuTaches=$_POST['dateFinPrevuTaches'];
$dateFinReelTaches=$_POST['dateFinReelTaches'];
$coutPrevueTaches=$_POST['coutPrevueTaches'];
$listObjectifTaches=$_POST['listObjectifTaches'];
$chefDeTaches=$_POST['chefDeTaches'];



function afficheListePersonne(){
     $con=connecter();
     $statement=$con->prepare("SELECT * FROM personne where idPersonne='1'");
     $statement->execute();
     $data=$statement->fetchAll();
     
     return $data;
 }
 function afficheListeProjet(){
    $con=connecter();
    $statement=$con->prepare("SELECT * FROM  projet ");
    $statement->execute();
    $data=$statement->fetchAll();
    
    return $data;

}
function saveProjet($v1,$v2,$v3,$v4,$v5,$v6,$v7){
    $db= connecter();
    $statement = $db->prepare("INSERT INTO projet values (null,?,?,?,?,?,?,?)");
    $statement->execute(array($v1,$v2,$v3,$v4,$v5,$v6,$v7));
  echo "enregistrement avec succes";
    return true;
}

// function saveTaches($v1,$v2,$v3,$v4,$v5,$v6,$v7){
//     $db= connecter();
//     $statement = $db->prepare("INSERT INTO taches values (null,?,?,?,?,?,?,?)");
//     $statement->execute(array($v1,$v2,$v3,$v4,$v5,$v6,$v7));
//   echo "enregistrement avec succes";
//     return true;
// }
// saveTaches($nomProjet,$dateDebutProjet,$dateFinPrevuProjet,$dateFinReelProjet,$coutPrevueProjet,$listObjectifProjet,$etat)


//  afficheListePersonne();
//  if($data[4]====$pa){
//      echo"votre identifiant est : ".$data[0];

//  }







?>