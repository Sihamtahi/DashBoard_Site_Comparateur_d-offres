<?php 
include_once('C:\wamp64\www\try\php\admin\model\suppressiondoc-model.php');
 
 if (isset($_POST['supprimer'])) 
 {
               $req = new ModifierDoc();
               $req->supprimerdoc(); 
 }
   