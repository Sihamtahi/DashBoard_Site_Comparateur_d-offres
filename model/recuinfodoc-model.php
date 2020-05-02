<?php 

 
class RecupererDocument
{
    public function recupDoc()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT client.nom as NomClient,client.prenom as PrenomClient,devis.idDevis,document.idDoc,typetr.nomTYpe,effectuer.date as dateSoumission,traducteur.nom as NomTraducteur,traducteur.prenom as PrenomTraducteur,traduire.datet as DateTraduction FROM effectuer,client,devis,typetr,document,traduire,traducteur WHERE effectuer.idClient = client.idClient and effectuer.idDevis=devis.idDevis and devis.idType=typetr.idType and document.idDevis = devis.idDevis and traduire.idDoc=document.idDoc and traduire.id_tr=traducteur.id_tr";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchAll();
        return $resultat; 
    } 
}
    