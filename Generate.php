<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Choisissez votre générateur de nom :
<br> </br>
    <form action="traitement.php" method="post">
    <select name="choix" size="1">
    <option value="fée">féeriques
    <option value="dino"> dinosaures
    <option value="démon"> démons
    </select> 
<input type="submit" value="Entrer" />
</form>

<?php

if ( isset($_POST['fée']) && !empty($_POST['fée']) ) 

     {header("Location: ".$_POST['fée']."");}

if ( isset($_POST['dino']) && !empty($_POST['dino']) ) 

     {header("Location: ".$_POST['dino']."");}

if ( isset($_POST['démon']) && !empty($_POST['démon']) ) 

     {header("Location: ".$_POST['démon']."");}


?>

<?php?>


    <!--\\\\\\\\\\\\\\\\PARTIE NOM FEERIQUE////////////////-->
    <h1><U>GENERATEUR NOM FEERIQUE:</U></h1>
    <?php  
    
   
    
    
    $_nom = GenerateNomPropre();
   for ($i=0;$i<15;$i++){
    ?>
    <div><p>
    <?php  
         echo GenerateNomPropre();
    ?>
    </p></div>
    <?php
    }

    function GenerateNomPropre(){

        $TableNom = array();
        array_push($TableNom,"Champignon");
        array_push($TableNom,"Dragon");
        array_push($TableNom,"Elfe");
        array_push($TableNom,"Nain");
        array_push($TableNom,"Rivière");
        array_push($TableNom,"Nymphe");
        array_push($TableNom,"Ogre");
        array_push($TableNom,"Fée");
        array_push($TableNom,"Assasins");
     

        $TableAdjectif = array();
        array_push($TableAdjectif,"Noire");
        array_push($TableAdjectif,"Tueur");
        array_push($TableAdjectif,"Magique");
        array_push($TableAdjectif,"d'Or");
        array_push($TableAdjectif,"Scintillant");
        array_push($TableAdjectif,"Canibale");
        array_push($TableAdjectif,"Démon");
        
        $TableSyllabe = array();
        array_push($TableSyllabe,"mor");
        array_push($TableSyllabe,"fo");
        array_push($TableSyllabe,"se");
        array_push($TableSyllabe,"teu");
        array_push($TableSyllabe,"gar");
        array_push($TableSyllabe,"pi");
        array_push($TableSyllabe,"def");
        array_push($TableSyllabe,"tu");
        array_push($TableSyllabe,"eru");
        array_push($TableSyllabe,"par");
        array_push($TableSyllabe,"kid");
        array_push($TableSyllabe,"tra");
        array_push($TableSyllabe,"veu");
        array_push($TableSyllabe,"mag");
        array_push($TableSyllabe,"glou");

        $tailleTab = count($TableNom);
        $tailleTab2 = count($TableAdjectif);
        $tailleTab3 = count($TableSyllabe);
        $nombreSyllabe = rand(0,16);

        
        $nompropre="";
        for ($i=0;$i<3;$i++){
            $toto = $TableNom[rand(0,$tailleTab-1)];
            $tata = $TableAdjectif[rand(0,$tailleTab2-1)];
            $titi = $TableSyllabe[rand(0,$tailleTab3-1)];
            $titi1 = $TableSyllabe[rand(0,$tailleTab3-1)];
            $titi2 = $TableSyllabe[rand(0,$tailleTab3-1)];
            $nompropre = $toto."  ".$tata."  ".$titi.$titi1.$titi2;
        }
        
        return ucwords($nompropre);
    }
    
    
    
    ?>
<!--\\\\\\\\\\\\\\\\PARTIE NOM DINO////////////////-->
<h1><U>GENERATEUR DE NOM DE DINO :</U></h1>
    <?php  
    
   
    
    
    $_nom2 = GenerateNomDino();
   for ($i=0;$i<15;$i++){
    ?>
    <div><p>
    <?php  
         echo GenerateNomDino();
    ?>
    </p></div>
    <?php
    }

    function GenerateNomDino(){

        $TableNomDino = array();
        array_push($TableNomDino,"Tyranno");
        array_push($TableNomDino,"Spino");
        array_push($TableNomDino,"Véloci");
        array_push($TableNomDino,"Alloga");
        array_push($TableNomDino,"Tricé");
        array_push($TableNomDino,"Iguan");
        array_push($TableNomDino,"Stego");
        array_push($TableNomDino,"Nodo");
        array_push($TableNomDino,"Diplo","");
        array_push($TableNomDino,"Brachio");
        array_push($TableNomDino,"Bronto");
        array_push($TableNomDino,"Mosa");
        array_push($TableNomDino,"Plesio");
        array_push($TableNomDino,"Strongo");
     
        $TableNomDino2 = array();
        array_push($TableNomDino2,"saurus");
        array_push($TableNomDino2,"tor");
        array_push($TableNomDino2,"ratops");
        array_push($TableNomDino2,"odon");
        array_push($TableNomDino2,"docus");
        array_push($TableNomDino2,"zor");
        array_push($TableNomDino2,"mérus");
        array_push($TableNomDino2,"arcus");
        

        $tailleTab = count($TableNomDino);
        $tailleTab2 = count($TableNomDino2);
        $nombreSyllabe = rand(0,16);

        
        $nompropre2="";
        for ($i=0;$i<2;$i++){
            $toto = $TableNomDino[rand(0,$tailleTab-1)];
            $toto2 = $TableNomDino2[rand(0,$tailleTab2-1)];
            $nompropre2 = $toto.$toto2;
        }
        
        return ucwords($nompropre2);
    }
    
    
    
    ?>
    
    
    <!--\\\\\\\\\\\\\\\\PARTIE NOM DEMON////////////////-->
    <h1><U>GENERATEUR DE NOM DE DEMON :</U></h1>
    <?php  
    
   
    
    
    $_nom3 = GenerateNomDemon();
   for ($i=0;$i<15;$i++){
    ?>
    <div><p>
    <?php  
         echo GenerateNomDemon();
    ?>
    </p></div>
    <?php
    }

    function GenerateNomDemon(){

        $TableNomDemon = array();
        array_push($TableNomDemon,"luci");
        array_push($TableNomDemon,"sa");
        array_push($TableNomDemon,"belzé");
        array_push($TableNomDemon,"asmo");
        array_push($TableNomDemon,"ara");
        array_push($TableNomDemon,"li");
        array_push($TableNomDemon,"alri");
        array_push($TableNomDemon,"socco");
        array_push($TableNomDemon,"asta");
        array_push($TableNomDemon,"Bér");
        array_push($TableNomDemon,"sama");

        $TableNomDemon2 = array();
        array_push($TableNomDemon2,"fer");
        array_push($TableNomDemon2,"tan");
        array_push($TableNomDemon2,"beast");
        array_push($TableNomDemon2,"buth");
        array_push($TableNomDemon2,"dia");
        array_push($TableNomDemon2,"lith");
        array_push($TableNomDemon2,"slayer");
        array_push($TableNomDemon2,"nach");
        array_push($TableNomDemon2,"roth");
        array_push($TableNomDemon2,"phomet");
        array_push($TableNomDemon2,"lael");


        $tailleTab3 = count($TableNomDemon);
        $tailleTab4 = count($TableNomDemon2);
        $nombreSyllabe = rand(0,16);

        
        $nompropre3="";
        for ($i=0;$i<2;$i++){
            $tata = $TableNomDemon[rand(0,$tailleTab3-1)];
            $tata2 = $TableNomDemon2[rand(0,$tailleTab4-1)];
            $nompropre3 = $tata.$tata2;
        }
        
        return ucwords($nompropre3);
    }
    
    
    
    ?>




</body>
</html>