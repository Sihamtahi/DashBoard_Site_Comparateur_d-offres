<?php

     include './controlleradmin/recuinfodoc.php';
     $req = new  RecupererDocumentCon();
     $documents = $req->recupDocCon();
     

  ?>

<!DOCTYPE html>
<html>
<head>
  <title>#EasyTraduc</title>
  <!-- css-->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" href="../../css/style2.css">
</head>
<body>
  <button class="btn btn-link"><a href="./general-view.php">Retour à l'acceuil</a></button>
  <div class="">
    
    <h1 class="text-primary text-center">  La liste des documents est :  </h1>
  <br><br>
  <table class="table " >
    <tr style="border:3px  solid blue;" >
        <th>NomClient</th> 
        <th>PrenomClient</th> 
        <th>IdDevisCorrespendant</th>
        <th>IdDocument</th> 
        <th>TypeTraduction</th>  
        <th>Date de soummission</th> 
        <th>NomTraducteur</th> 
        <th>Prenomtraducteur</th> 
        <th>DateTraduction</th> 
        <th>Action à efectuer</th> 
   </tr>
    <?php foreach ($documents as $document): ?>
      <tr style="border: 3px solid blue;">
      <form  action="./controlleradmin/suppressiondoc.php" method="POST">
        <td> <?= $document['NomClient'] ?> </td> 
        <td><?= $document['PrenomClient'] ?></td>
        <td><?= $document['idDevis'] ?> </td>
         <td> <input class="form-control"  type="text" name="idDoc" value="<?= $document['idDoc'] ?>"> </td>
        <td><?= $document['nomTYpe'] ?></td>
        <td><?= $document['dateSoumission'] ?></td>
        <td><?= $document['NomTraducteur'] ?></td>
        <td><?= $document['PrenomTraducteur'] ?></td >
        <td><?= $document['DateTraduction'] ?></td>
        <td class="form-group-inline">
          <input type="submit" name="supprimer" value="Supprimer" class="btn btn-link">  
        </td>
      </form>
      </tr>  
    <?php endforeach; ?>
  </table>
  </div>
</body>
</html>
