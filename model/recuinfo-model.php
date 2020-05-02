<?php 

 
class RecupererTraducteurs
{
    public function recupTr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM traducteur where isbloc = 0";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
    public function recupTrBloc()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM traducteur where isbloc = 1";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
    
    public function recupTrSupp()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM traducteur where isbloc = 2";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
}
    



