<?php 

 
class RecupererClient
{   //les client supprimméq ont un champs isbloc =0
    public function recupCl()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM client where isbloc = 0";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
    //les client bloqués ont un champs isbloc = 1
    public function recupClBl()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM client where isbloc = 1";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
    //les client supprimméq ont un champs isbloc =2
      public function recupClSupp()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM client where isbloc = 2";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat;
        
    }
}
    