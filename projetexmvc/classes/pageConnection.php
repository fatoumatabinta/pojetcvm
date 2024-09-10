
<?php
connecter();
 
function connecter(){  
$dbname="gestion_projet";
$hostname="localhost";       
$username="root";
$password="";
try{
  
   $con=new PDO("mysql:host=$hostname;dbname=$dbname;",$username,$password);
   echo"Connection reussie";

}catch(PDOException $blem){
        $blem->$errorInfo;
        echo $blem;
}
return $con;
}


// admin creer le projet en creant le chef de projet et ce chef de projet va creer les taches 
// les phases les objectifs  et tout ce qui restent 
//  3 roles chef de projet admin employe
// pour les etats 

?>