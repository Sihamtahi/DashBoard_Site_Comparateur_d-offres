<?php 
 include_once('C:\wamp64\www\try\php\admin\model\connexionadmin-model.php');

if(isset($_POST['email']) and isset($_POST['mdp'])){
$req = new connexionadmin();
$req->connectadin();
}
