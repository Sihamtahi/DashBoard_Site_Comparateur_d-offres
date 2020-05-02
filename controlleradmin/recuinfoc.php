<?php 
include_once('C:\wamp64\www\try\php\admin\model\recuinfoc-model.php');
class RecupererClientControl
{
 public function recupClCon ()
 {
    $req = new RecupererClient();
    $resultat = $req->recupCl();
    return $resultat ;
 }
 public function recupClBlCon ()
 {
    $req = new RecupererClient();
    $resultat = $req->recupClBl();
    return $resultat ;
 }
 
 public function recupClSuppCon  ()
 {
    $req = new RecupererClient();
    $resultat = $req->recupClSupp();
    return $resultat ;
 }
}
