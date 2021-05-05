<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Table Medecin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='insertPDOcss.css'>
    <script src='main.js'></script>

</head>
<body>

    <h1>Table Medecin</h1>
    <h3>{AJOUT/MODIFICATION/SUPPRESSION}</h3>

    <?php
    
    $ipServerSQL = "192.168.65.91";
    $NomBase = "Clinique";
    $UserBDD = "SiteWeb";
    $PassBDD = "SiteWeb";
    $BaseBDD = null;


    $Crud = '0';


    if(isset($_POST["MedecinSubmit"])){

        if(!empty($_POST["MedecinNom"]) && !empty($_POST["MedecinPrenom"])){

            $Crud = 'C';
            $MedecinNom = $_POST["MedecinNom"];
            $MedecinPrenom = $_POST["MedecinPrenom"];
        }
    }
    
    if(isset($_POST["MedecinDeletSubmit"])){
        $Crud = 'D';
    }
    
    if(isset($_POST["MedecinUpdateSubmit"])){
        $Crud = 'U1';
    }
    
    if(isset($_POST["MedecinUpdate2Submit"])){
        $Crud = 'U2';
        $MedecinNom = $_POST["MedecinNom"];
        $MedecinPrenom = $_POST["MedecinPrenom"];
        $MedecinId = $_POST["idUpdate"];
    }
    
    $BasePDO = new PDO ("mysql:host=".$ipServerSQL.";dbname=".$NomBase.";port=3306",$UserBDD,$PassBDD);

    if($Crud!='0'){

        try{

            if($BasePDO){
                switch ($Crud){
                    case 'C';
                        echo "<p>Tentative de création de Medecin </p>";
                        $sql = "INSERT INTO 'MEDECIN' ('Nom','Prenom') VALUES ('".$MedecinNom"','".$MedecinPrenom"')";
                        $RequetStatement = $BasePDO->errorCode()=='00000'){
                            echo "Insertion reussite : ";
                            echo $MedecinNom." ".$MedecinPrenom." est le nouveau medecin";
                        }
                }else{
                    echo "Erreur dans le format de la requête";
                }

                break;
            case 'R':
                echo "<p>Vous avez sélectionner un Medecin</p>";
                break;
            case 'U1':
                echo "<p>Tentative Update du Medecin N°</p>";
            }
        }
    }



    
    ?>

</body>
</html>