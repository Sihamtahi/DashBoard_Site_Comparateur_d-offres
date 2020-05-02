<?php 

 /**
 * cette calsse pour la connexion 
 */
class connexionadmin{
	public function connectadmin(){
		try {
 	$conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
 	
       } catch (Exception $e) 
     { 
 	   die('Erreur:'.$e->getMessage());
     }
     $query="SELECT * FROM admin WHERE email= '".$_POST['email']."' AND mdp='".$_POST['mdp']."' ";
	  $connexionReq=$conn->prepare($query);
	  $connexionReq->execute(array($_POST['email'],$_POST['mdp']));
      $resultat=$connexionReq->fetch();
         
        if ($resultat['email'] == $_POST['email'] && $resultat['mdp'] == $_POST['mdp']) 
        {
         
             session_start ();
            // Enregistrer username & password comme variables de session 
             $_SESSION['email'] = $_POST['email'];
             $_SESSION['mdp'] = $_POST['mdp'];
             echo '<body onLoad="alert(\'vous etes connectés Mr administrateur\')">';
             header ('location:.\dash-admin.php'); 
             
       
        }
    else {
              echo '<body onLoad="alert(\'Utilisateur ou mot de passe incorrect\')">';
              header ('location:.\admin.php');
      }
   

	}
}
    



