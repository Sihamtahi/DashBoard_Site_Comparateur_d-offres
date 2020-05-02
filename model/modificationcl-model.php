<?php 

 /**
 * cette calsse pour la connexion 
 */
class ModifierCl
{
    public function modificationcl()
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
         
       $query2 = " UPDATE client SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,mail='".$_POST['mail']."',pwd = '".$resultat['pwd']."', wilaya='".$_POST['wilaya']."', numTel='".$_POST['numTel']."',adresse='".$_POST['adresse']."', commune='".$_POST['commune']."', faxe='".$_POST['faxe']."',photo= '".$_POST['photo']."',isbloc =0 WHERE mail='".$_POST['mail']."'" ;
         
         echo $query2;
         $connexionReq2=$conn->prepare($query2);
         $connexionReq2->execute();
         header ('location:..\client-admin.php');    
    }
      
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

        
         //supprimer le champs dans la liste des clients non bloqués
         $query3="UPDATE client SET nom= '".$_POST['nom']."' , prenom='".$_POST['prenom']."', mail='".$_POST['mail']."', pwd='".$resultat['pwd']."', wilaya='".$_POST['wilaya']."', numTel ='".$_POST['numTel']."', adresse='".$_POST['adresse']."', commune='".$_POST['commune']."', faxe='".$_POST['faxe']."', photo ='".$_POST['photo']."', isbloc =1 where mail='".$_POST['mail']."'";
         echo $query3;
         $connexionReq3=$conn->prepare($query3);
         $connexionReq3->execute();
         header ('location:..\client-admin.php');   

          
        
    }
     public function debloccl()
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

        
         //supprimer le champs dans la liste des clients non bloqués
         $query3="UPDATE client SET nom= '".$_POST['nom']."' , prenom='".$_POST['prenom']."', mail='".$_POST['mail']."', pwd='".$resultat['pwd']."', wilaya='".$_POST['wilaya']."', numTel ='".$_POST['numTel']."', adresse='".$_POST['adresse']."', commune='".$_POST['commune']."', faxe='".$_POST['faxe']."', photo ='".$_POST['photo']."', isbloc =0 where mail='".$_POST['mail']."'";
         echo $query3;
         $connexionReq3=$conn->prepare($query3);
         $connexionReq3->execute();
         header ('location:..\client-admin.php');  
          
        
    }
     
     public function supprimercl()
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

        
         //supprimer le champs dans la liste des clients non bloqués
         $query3="UPDATE client SET nom= '".$_POST['nom']."' , prenom='".$_POST['prenom']."', mail='".$_POST['mail']."', pwd='".$resultat['pwd']."', wilaya='".$_POST['wilaya']."', numTel ='".$_POST['numTel']."', adresse='".$_POST['adresse']."', commune='".$_POST['commune']."', faxe='".$_POST['faxe']."', photo ='".$_POST['photo']."', isbloc =2 where mail='".$_POST['mail']."'";
         echo $query3;
         $connexionReq3=$conn->prepare($query3);
         $connexionReq3->execute();
         header ('location:..\client-admin.php');  
          
        
    }
          
        
}

    



