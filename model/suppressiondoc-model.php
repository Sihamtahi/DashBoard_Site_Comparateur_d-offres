<?php 

 /**
 * cette calsse pour la connexion 
 */
class ModifierDoc
{
    
     public function supprimerdoc()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
         } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
       //supprimer le document la ou il figure dans la table associative de correspandance entre traducteur et document
        $query1="DELETE FROM traduire WHERE idDoc= '".$_POST['idDoc']."'";
        $connexionReq1=$conn->prepare($query1);
        $connexionReq1->execute(array($_POST['idDoc']));
        $resultat1=$connexionReq1->fetch();
        //supprimer le document dans la table document
        $query2="DELETE FROM document WHERE idDoc= '".$_POST['idDoc']."'";
        $connexionReq2=$conn->prepare($query2);
        $connexionReq2->execute(array($_POST['idDoc']));
        $resultat2=$connexionReq2->fetch();
        
        header ('location:..\document-admin.php');   

          
        
    }
      
          
        
}

    



