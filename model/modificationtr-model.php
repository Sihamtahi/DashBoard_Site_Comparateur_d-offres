<?php 

 /**
 * cette calsse pour la connexion 
 */
class ModifierTr
{
    public function modificationtr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['email']));
        $resultat=$connexionReq->fetch();
        $query2 = " UPDATE traducteur SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,addresse='".$_POST['addresse']."', commune='".$_POST['commune']."', wilaya='".$_POST['wilaya']."', num_tel='".$_POST['num_tel']."', num_faxe='".$_POST['num_faxe']."',note= '".$_POST['note']."',email='".$_POST['email']."' , mdp = '".$resultat['mdp']."',assurmente=NULL,cv='".$resultat['cv']."',f1='".$resultat['f1']."',f2='".$resultat['f2']."',f3='".$resultat['f3']."',assurfile='".$resultat['assurfile']."',photo='".$resultat['photo']."' WHERE email= '".$_POST['email']."'" ;
         
        $connexionReq2=$conn->prepare($query2);
         $connexionReq2->execute();
         header ('location:..\traducteur-admin.php'); 
        
    }
     public function bloquertr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['email']));
        $resultat=$connexionReq->fetch();
       $query2 = " UPDATE traducteur SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,addresse='".$_POST['addresse']."', commune='".$_POST['commune']."', wilaya='".$_POST['wilaya']."', num_tel='".$_POST['num_tel']."', num_faxe='".$_POST['num_faxe']."',note= '".$_POST['note']."',email='".$_POST['email']."' , mdp = '".$resultat['mdp']."',assurmente=NULL,cv='".$resultat['cv']."',f1='".$resultat['f1']."',f2='".$resultat['f2']."',f3='".$resultat['f3']."',assurfile='".$resultat['assurfile']."',photo='".$resultat['photo']."',isbloc =1  WHERE email= '".$_POST['email']."'" ;  
        $connexionReq2=$conn->prepare($query2);
        $connexionReq2->execute();
        header ('location:..\traducteur-admin.php'); 
         
    }
    public function debloquertr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['email']));
        $resultat=$connexionReq->fetch();
        $query2 = " UPDATE traducteur SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,addresse='".$_POST['addresse']."', commune='".$_POST['commune']."', wilaya='".$_POST['wilaya']."', num_tel='".$_POST['num_tel']."', num_faxe='".$_POST['num_faxe']."',note= '".$_POST['note']."',email='".$_POST['email']."' , mdp = '".$resultat['mdp']."',assurmente=NULL,cv='".$resultat['cv']."',f1='".$resultat['f1']."',f2='".$resultat['f2']."',f3='".$resultat['f3']."',assurfile='".$resultat['assurfile']."',photo='".$resultat['photo']."',isbloc =0  WHERE email= '".$_POST['email']."'" ;  
        $connexionReq2=$conn->prepare($query2);
        $connexionReq2->execute();
        header ('location:..\traducteur-admin.php'); 
         
        
    }
       public function supprimertr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['email']));
        $resultat=$connexionReq->fetch();
       $query2 = " UPDATE traducteur SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,addresse='".$_POST['addresse']."', commune='".$_POST['commune']."', wilaya='".$_POST['wilaya']."', num_tel='".$_POST['num_tel']."', num_faxe='".$_POST['num_faxe']."',note= '".$_POST['note']."',email='".$_POST['email']."' , mdp = '".$resultat['mdp']."',assurmente=NULL,cv='".$resultat['cv']."',f1='".$resultat['f1']."',f2='".$resultat['f2']."',f3='".$resultat['f3']."',assurfile='".$resultat['assurfile']."',photo='".$resultat['photo']."',isbloc =2  WHERE email= '".$_POST['email']."'" ;  
        $connexionReq2=$conn->prepare($query2);
        $connexionReq2->execute();
        header ('location:..\traducteur-admin.php'); 
         
    }
}
    



