<?php 
include_once('C:\wamp64\www\try\php\admin\model\recuinfodoc-model.php');
class RecupererDocumentCon
{
 public function recupDocCon ()
 {
    $req = new RecupererDocument();
    $resultat = $req->recupDoc();
    return $resultat ;
 }
  
}
