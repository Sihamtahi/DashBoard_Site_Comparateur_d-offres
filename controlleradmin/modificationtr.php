<?php 
include_once('C:\wamp64\www\try\php\admin\model\modificationtr-model.php');

        if (isset($_POST['modifier']))
        {

           if ((isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['addresse']) and isset($_POST['commune']) and isset($_POST['wilaya']) and isset($_POST['num_tel']) and isset($_POST['num_faxe']) and isset($_POST['note'])) and isset($_POST['email']))
           {
               $req = new ModifierTr();
               $req->modificationtr();
  
           }
        }

         if (isset($_POST['bloquer'])) 
         {
         	 
               $req = new ModifierTr();
               $req->bloquertr();
         }
         if (isset($_POST['debloquer']))
         {
          
         	     $req = new ModifierTr();
               $req->debloquertr();
         }
          if (isset($_POST['supprimer']))
         {
          
               $req = new ModifierTr();
               $req->supprimertr();
         }