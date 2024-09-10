<?php
require_once "traitementAuthentic.php";
require_once 'pageConnection.php';
verifierAuthentification();
function verifierAuthentification(){
    $iForm=$_POST['identifiant'];
    $nForm=$_POST['nom'];
    $prForm=$_POST['prenom'];
    $eForm=$_POST['email'];
    $paForm=$_POST['password'];
    $tForm=$_POST['tel'];
    $mForm=$_POST['matricule'];
    $proForm=$_POST['profil'];
   
     $con=connecter();
     $statement=$con->prepare("SELECT * FROM personne where idPersonne='1'");
     $statement->execute();
     $data=$statement->fetchAll();
     
     $iSql=$data['idPersonnePersonne'];
     $nSql=$data['nomPersonne'];
     $prSql=$data['prenomPersonne'];
     $eSql=$data['emailPersonne'];
     $paSql=$data['passwordPersonne'];
     $tSql=$data['telPersonne'];
     $mSql=$data['matriculePersonne'];
     $proSql=$data['profilPersonne'];
 
     if(($nForm===$nSql && $prForm===$prSql && $eForm===$eSql &&
      $paForm===$paSql && $tForm===$tSql && $mForm===$mSql) || $proForm==="admin" )
    {
      
       header("location:pageAdmin.php");

    }
   
   else if(($nForm===$nSql && $prForm===$prSql && $eForm===$eSql && $paForm===$paSql && $tForm===$tSql && $mForm===$mSql) || $proForm==="chef" )
    {
      
       header("location:ChefDeProjet.php");

    }
    else if(($nForm===$nSql && $prForm===$prSql && $eForm===$eSql && $paForm===$paSql && $tForm===$tSql && $mForm===$mSql) || $proForm==="employee" )
    {
     
       header("location:Employee.php");

    }
    else{
      
       header("location:formulaire.html");
       
    }

    
}

?>
