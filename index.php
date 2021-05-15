<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page création personnage</title>
</head>
<body>
        <h1><u>Création d'un personnage : </u></h1>

        
        
        <?php 


        include "personnage.php";

        $Perso1 = new Personnage();
        $Perso2 = new Personnage();

        $Perso1->setNom("Thomas");
        $Perso1->choixClasse("paladin");
        
        ?>
        
        Choisissez votre classe : </br>
 
 <form action="personnage.php" method="post">
 <select name="classe" size="1">
 <option value="Paladin">Paladin
 <option value="Orque"> Orque
 <option value="Mage"> Mage
 <option value="Elfe"> Elfe
 <option value="Nain"> Nain
 </select>
<input type="submit" value="Valider" />
</form>
        <?php

        $Perso1->presenteToi();
        



        ?>




</body>
</html>


