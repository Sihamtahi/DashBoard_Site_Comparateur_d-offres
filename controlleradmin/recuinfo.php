<?php 
include_once('C:\wamp64\www\try\php\admin\model\recuinfo-model.php');
class RecupererTraducteursControl
{
 public function recupTrCon ()
 {
    $req = new RecupererTraducteurs();
    $resultat = $req->recupTr();
    return $resultat ;
 }
 public function recupTrBlCon ()
 {
    $req = new RecupererTraducteurs();
    $resultat = $req->recupTrBloc();
    return $resultat ;
 }
 public function recupTrSupCon ()
 {
    $req = new RecupererTraducteurs();
    $resultat = $req->recupTrSupp();
    return $resultat ;
 }

}
