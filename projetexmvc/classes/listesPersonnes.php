<?php
    require_once "traitementAuthentic.php";
    $person=afficheListePersonne();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
                    border:2px solid black;
                    border-collapse:collapse;
                    text-align:center;
                    padding:  10px;
                    margin-top:50px;
                    margin-left:100px
        }
    </style>
</head>
<body>
   
<table>
    <tr>
        <th>identifiant</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>password</th>
        <th>telephone</th>
        <th>matricule</th>
        <th>profil</th>
    </tr>
    <?php foreach ($person as $p):?>
    
        <tr>
        <th><?=  $p["idPersonne"]; ?></th>
        <th><?= $p["nomPersonne"]; ?></th>
        <th><?= $p["prenomPersonne"]; ?></th>
        <th><?= $p["emailPersonne"];?></th>
        <th><?= $p["passwordPersonne"];?></th>
        <th><?= $p["telPersonne"];?></th>
        <th><?= $p["matriculePersonne"];?></th>
        <th><?= $p["profilPersonne"];?></th>
    </tr>
    <?php endforeach ?>
</table>

</body>
</html>






