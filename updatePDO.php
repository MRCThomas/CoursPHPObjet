<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Modification Medecin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='insertPDOcss.css'>
    <script src='main.js'></script>

</head>
<body>



    <?php
        if(isset($_GET["IdUpdate"])){
            $idUpdate = $_GET["IdUpdate"];
            echo"<h1>Modification du Medecin N°:".$idUpdate."</h1>";

            ?>
            <h1><u>Nom et Prénom des Medecins: </u></h1>
            <form action="" method="post">
                <label for="name">Nom du Medecin:</label>
                <input type="text" id="id" name="nom" prenom="prenom">
                <label for="name">Prénom du Medecin:</label>
                <input type="text" id="id" name="prenom">
                <input type="submit" name="MedecinSubmit" value="Modifier le Medecin N°"<?php echo $idUpdate?>>
            </form>
            
            <?php
            try {
                $Clinique = new PDO('mysql:host=192.168.65.91;dbname=Clinique', 'Thomas', 'tma123');
            
                    if (isset($_POST['nom']) && isset($_POST['prenom'])){
            
                        if (!empty($_POST['nom']) && !empty($_POST['prenom'])){
                            $nom = $_POST["nom"];
                            $prenom = $_POST["prenom"];
            
                            
                            $sql  = "UPDATE `Medecin` SET nom = '".$nom."', prenom ='".$prenom."'
                                    WHERE id_Medecin = '".$idUpdate."'";
                            

                            $resultat = $Clinique->query( $sql );
                            
                            if($resultat){
                                if($resultat->errorCode()=='00000'){
                                    echo "Insertion reussite : ";
                                    echo $nom." ".$prenom." est le nouveau medecin";
                                }else{
                                    echo "Erreur N°  ".$resultat->errorCode()." lors de l'insertion";
                                }
                            }else{
                                echo "Erreur dans le format de la requête";
                            } 
                        }
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

        













</body>
</html>