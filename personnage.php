
<?php

        

        class Personnage{
            
            private $id;
            private $nomPerso;
            private $classe;

            public function __construct($id, $pdo){
                $req = "SELECT * FROM Personnage WHERE idPersonnage=".$id;
                echo $req;
                $RequetStatement = $pdo->query($req);

                if($RequetStatement){
                    $tab = $RequetStatement->fetch();
                    $this->id = $tab["idPersonnage"];
                    $this->nomPerso = $tab ["NomPerso"];
                    $this->classe = $tab ["idClasse"];
                }
                $reponse = $pdo->query($req)
                
                

            }
    
            public function setNomPerso($NewNomPerso){
               $this->nomPerso = $NewNomPerso;
            }
            public function presenteToi(){
                echo "Nom du personnage : ".$this->nomPerso ."<br>"."Choix de la classe : ".$this->classe;
            }
            public function choixClasse($NewClasse){
               $this->classe = $NewClasse;
            }
    
        }


?>
