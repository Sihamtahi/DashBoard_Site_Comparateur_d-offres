<?php 

  
class BloquerCl
{
    public function bloccl()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
         } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM client WHERE mail= '".$_POST['mail']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['mail']));
        $resultat=$connexionReq->fetch();
         //inserer dans la liste des clients bloqués
         $query2 = "SELECT FROM client WHERE mail= '".$_POST['mail']."'" ;
         $res2=$conn->prepare($query2);
         $res22->execute();
         //supprimer le champs dans la liste des clients non bloqués
         $query3 = "" ;
         $connexionReq3=$conn->prepare($query3);
         $connexionReq3->execute();
         header ('location:..\client-admin.php');   

          
        
    }
}
    



