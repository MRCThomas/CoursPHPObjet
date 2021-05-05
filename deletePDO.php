<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Suppression Medecin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>
<body>



    <?php
        if(isset($_GET["IdDelete"])){
            $idMedecin = $_GET["IdDelete"];
            echo"<h1>Supression du Medecin N°:".$idMedecin."</h1>";


     ?> 
     <form>   
     <input type="hidden" name="delete" value="supprimer"<?php echo $idMedecin?>>
     </form>
     <?php
            try {
                $Clinique = new PDO('mysql:host=192.168.65.91;dbname=Clinique', 'Thomas', 'tma123');
            
                        
                            $sql  = "DELETE FROM `Medecin`
                                    WHERE id_Medecin = '".$idMedecin."'";
                            

                            $resultat = $Clinique->query( $sql );
                            
                            if($resultat){
                                if($resultat->errorCode()=='00000'){
                                    echo "Insertion reussite : ";
                                    echo "Le Medecin a été supprimer";
                                }else{
                                    echo "Erreur N°  ".$resultat->errorCode()." lors de la suppression";
                                }
                            }else{
                                echo "Erreur dans le format de la requête";
                            } 
                        
                          
                }  catch(exception $e){
                    die('Erreur'.$e->getMessage());
                }
                $resultat = $Clinique->query("select * from Medecin");
                
            
    ?>    
                
            <table>
                <head>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </head>
            <?php    
                while ($Medecin = $resultat->fetch()){
            ?>
                    
                    <tr>
                        <td><?php echo $Medecin['Nom']?></td>
                        <td><?php echo $Medecin['Prenom']?></td>
                        <td><a href="insertPDO.php?IdUpdate=<?php echo $Medecin['id_Medecin']?>">modifier</a></td>
                        <td><a href="deletePDO.php?IdDelete=<?php echo $Medecin['id_Medecin']?>">supprimer</a></td>
                    </tr>
            
            
            <?php    
                }
         }
       
        
        
    
    ?>

      