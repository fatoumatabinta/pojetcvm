<?php
    require_once "traitementAuthentic.php";
    $projet=afficheListeProjet();
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
    <caption>Projet No: <?= $projet['idProjet'];?></caption>
    <tr>
        <th>identifiant</th>
        <th>nom projet</th>
        <th>date debut</th>
        <th>date fin</th>
        <th>date fin reel</th>
        <th>cout</th>
        <th>objectifs</th>
        <th>nom chef</th>
    </tr>
    <?php foreach ($projet as $p):?>
    
        <tr>
        <th><?=  $p["idProjet"]; ?></th>
        <th><?= $p["nomProjet"]; ?></th>
        <th><?= $p["dateDebutProjet"]; ?></th>
        <th><?= $p["dateFinPrevuProjet"];?></th>
        <th><?= $p["dateFinReelProjet"];?></th>
        <th><?= $p["coutPrevueProjet"];?></th>
        <th><?= $p["listObjectifProjet"];?></th>
        <th><?= $p["chefDeProjet"];?></th>
    </tr>
    <?php endforeach ?>
</table>

</body>
</html>






