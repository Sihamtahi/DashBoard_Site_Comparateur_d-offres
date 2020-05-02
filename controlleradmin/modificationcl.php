<?php 
include_once('..\model\modificationcl-model.php');
 if (isset($_POST['modifier'])) 
 {
           if ((isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['commune']) and isset($_POST['wilaya']) and isset($_POST['numTel']) and isset($_POST['faxe']) and isset($_POST['photo'])) and isset($_POST['mail']))
           {
               $req = new ModifierCl();
               $req->modificationcl();
           }
           else
           {
	           echo "Error ";
           }
}
 if (isset($_POST['supprimer'])) 
 {
               $req = new ModifierCl();
               $req->supprimercl(); 
 }
  if (isset($_POST['bloquer'])) 
  {
               $req = new ModifierCl();
               $req->bloccl(); 
  }
   if (isset($_POST['debloquer'])) 
  {
              $req = new ModifierCl();
              $req->debloccl();             

  }