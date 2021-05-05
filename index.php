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


        $pdo = new PDO ();
        include "Personnage.php";

        $Perso1 = new Personnage();
        $Perso2 = new Personnage();

        $Perso1->setNomPerso("Thomas");
        $Perso1->choixClasse("Paladins");
        $Perso1->presenteToi();



        ?>




</body>
</html>


