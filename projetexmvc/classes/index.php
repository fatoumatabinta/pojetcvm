<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color:black;
            background: url('images/background.jpg') no-repeat center center/cover ;
            font-family: tahoma;
        }
        nav,footer{
            background-color: black;

        }
        li{
            color: whitesmoke;
            padding:10px 10px;
            padding-right: 150px;
        }
        ul,li{
            list-style: none;
            display: flex;
        }
        fieldset{
           
            padding: 10px auto;
            margin: 50px auto;
            border: 5px solid;
            border-radius:50px;
            background-color:transparent;
            border-top-color:rgb(250, 217, 161);
            border-bottom-color:  rgb(250, 217, 161);
        }
        legend{
            text-align: center;
        }
        input[type='text'],[type='number']{
           float: left;
            left: 0px;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: transparent;
            margin-top: 10px;
           
        }
        input[name='email'],[name='matricule']{
           color: whitesmoke;
        }
        input[name='email'],[name='matricule'],[name='tel'],[name='password']{
            border-bottom: 3px solid white;
        }
       input[name='identifiant'],[name='nom'],[name='prenom']{
        border-bottom: 3px solid black;
       }
        
        button[type='submit']{
            margin-left: 250px;
            padding: 2.5px ;
            width: 100px;
            background-color: black;
            color: white;
            font-weight: bolder;
            font-size: 20px;
            border-radius: 20px;
            border: 2px solid white;
        }
        button[type='reset']{
            margin-left: 300px;
            padding: 2.5px ;
            width: 100px;
            background-color: black;
            color: white;
            font-weight: bolder;
            font-size: 20px;
            border-radius: 20px;
            border: 2px solid white;
        }
        button:hover{
            cursor: pointer;
        }
       
        h2{
           
            text-align: center;
            float: bottom;
            bottom: 0px;
            padding:5px auto;
            color:black;
            letter-spacing: 1;
            line-height: 1.25;
            font-family: Verdana;
            
        }
           
        span{
            position: fixed;
            margin-top: -10px;
            width: 400px;
            border: 5px solid;
            background-color: whitesmoke;
            float: right;
            right: 0px;
            margin-right: 305px;
           
           height: 100px;
           border-top-left-radius:50px ;
           border-bottom-left-radius:50px ;
           border-top-right-radius:50px ;
           border-bottom-right-radius:50px ;
           border-top-color:  rgb(250, 217, 161);
           border-bottom-color:  rgb(250, 217, 161);
        }
        label{
            font-weight: bolder;
            background-color: black;
            border-radius: 20px;
            padding: 5px;
            color:white;
            width: 100px;


        }
        select{
            font-weight: bolder;
            background-color: whitesmoke;
            border-radius: 20px;
            padding: 5px;
            color:black;
            width: 150px;
           
        }
        .sexe,select{
            margin-top: 10px;
            
        }
        .divProfil{
            margin-top: 50px;
        }
        a{
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <nav>
      <ul>
        <li> <a href=""> </a></li>
        <li> <a href=""> </a></li>
        <li> <a href=""> </a></li>
        <li> <a href=""> </a></li>
        <li> <a href=""> </a></li>
        
      </ul>  
    </nav>
    <form action="verifier.php" method="post"> 
        <fieldset>
            <legend><h1>Authentification</h1></legend>
            <span>
                <h2>Bienvenu Dans Notre Entreprise Les Pyramides</h2>
            </span>
            <label for="identifiant">Identfiant</label><br>
            <input type="number" name="identifiant" id="identifiant" disabled><br><br>
            <br><br>
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom"><br><br>
            <br><br>
            <label for="prenom">Prenom</label><br>
            <input type="text" name="prenom" id="prenom">
            <br><br><br><br>
            <label for="sex">Sexe</label><div class="sexe"><br><b>Masculin</b> <input  type="radio" id="sex">
           <b> Feminin</b><input type="radio"  id="sex"></div>
            <br><br><br><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email"><br><br>
            <br><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" id="password"><br><br>
            <br><br>
            <label for="tel">Tel</label><br>
            <input type="text" name="tel" id="tel"><br><br>
            <br><br>
            <label for="matricule">Matricule</label><br>
            <input type="text" name="matricule" id="matricule">
            <br><br>
           <div class="divProfil">
            <label for="profil">Votre profil</label><br>
            <select name="profil" id="profil">
                <option  value="chef">Chef de projet </option>
                <option selected value="employee">Employee</option>
                <option  value="admin">admin</option>
            </select> 
            <br><br>
            <button type="submit">Valider</button>  <button type="reset">Annuler</button>
        </div>
        </fieldset>



    </form>
    <footer>
        <ul>
          <li> <a href=""> Acceuil</a></li>
          <li> <a href=""> Apropos</a></li>
          <li> <a href=""> Service</a></li>
          <li> <a href=""> Contact</a></li>
          <li> <a href=""> Conseil</a></li>
          
        </ul>  
    </footer>
</body>
</html>