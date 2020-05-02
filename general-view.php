<?php

     include './controlleradmin/recuinfo.php';
     $req = new  RecupererTraducteursControl();
     $traducteurs = $req->recupTrCon();
     $traducteursbloc = $req->recupTrBlCon();
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>   
<table class="table" id ="mydataTable">
  <thead>
    <tr>
       <th>Nom</th> 
        <th>Prenom</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>Note</th> 
        <th>Email</th> 
    </tr>
  </thead>
  <tbody>
    <?php foreach ($traducteurs as $traducteur): ?>
      <tr>
        <td><?= $traducteur['nom'] ?></td> 
        <td> <?= $traducteur['prenom'] ?></td>
        <td><?= $traducteur['addresse'] ?></td>
        <td><?= $traducteur['commune'] ?></td>
        <td> <?= $traducteur['wilaya'] ?></td>
        <td><?= $traducteur['num_tel'] ?></td >
        <td><?= $traducteur['num_faxe'] ?></td>
        <td><?= $traducteur['note'] ?></td>
        <td><?= $traducteur['email'] ?></td>        
      </tr>  
    <?php endforeach; ?>
  </tbody>
</table>
<table class="table" id ="mydataTable2">
  <thead>
    <tr>
       <th>Nom</th> 
        <th>Prenom</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>Note</th> 
        <th>Email</th> 
    </tr>
  </thead>
  <tbody>
  
    <?php foreach ($traducteurs as $traducteur): ?>
      <tr>
      <form  action="./controlleradmin/modificationtr.php" method="POST">
        <td><?= $traducteur['nom'] ?></td> 
        <td> <?= $traducteur['prenom'] ?></td>
        <td><?= $traducteur['addresse'] ?></td>
        <td><?= $traducteur['commune'] ?></td>
        <td> <?= $traducteur['wilaya'] ?></td>
        <td><?= $traducteur['num_tel'] ?></td >
        <td><?= $traducteur['num_faxe'] ?></td>
        <td><?= $traducteur['note'] ?></td>
        <td><?= $traducteur['email'] ?></td>
         
      </form>
      </tr>  
    <?php endforeach; ?>
  </tbody>
</table>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
       $('#mydataTable').DataTable();
       } );
      $(document).ready( function () {
       $('#mydataTable2').DataTable();
       } );
    </script>
  </body>
</html>
<!-- la page traducteur-admin.php><-->
  <?php

     include './controlleradmin/recuinfo.php';
     $req = new  RecupererTraducteursControl();
     $traducteurs = $req->recupTrCon();
     $traducteursbloc = $req->recupTrBlCon();
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
  <h1 class="text-primary text-center">  La liste des traducteurs non bloqués: </h1>
  <br><br>
  <table class="table">
    <tr style="border:3px solid blue;" >
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>Note</th> 
        <th>Email</th> 
        <th>Modifier</th>
        <th>Bloquer</th>
   </tr>

    <?php foreach ($traducteurs as $traducteur): ?>
      <tr style="border: 3px solid blue;">
      <form  action="./controlleradmin/modificationtr.php" method="POST">
        <td><input class="form-control" type="text"  name="nom" value="<?= $traducteur['nom'] ?>"></td> 
        <td><input class="form-control"  type="text" name="prenom" value="<?= $traducteur['prenom'] ?>"></td>
        <td><input class="form-control"  type="text" name="addresse" value="<?= $traducteur['addresse'] ?>"></td>
        <td><input class="form-control"  type="text" name="commune" value="<?= $traducteur['commune'] ?>"></td>
        <td><input class="form-control"  type="text" name="wilaya" value="<?= $traducteur['wilaya'] ?>"></td>
        <td><input class="form-control"  type="text" name="num_tel" value="<?= $traducteur['num_tel'] ?>"></td >
        <td><input class="form-control"  type="text" name="num_faxe" value="<?= $traducteur['num_faxe'] ?>"></td>
        <td><input class="form-control"  type="text" name="note" value="<?= $traducteur['note'] ?>"></td>
        <td><input class="form-control"  type="text" name="email" value="<?= $traducteur['email'] ?>"> </td>
        <td><input type="submit" name="modifier" value="modifier" class="btn btn-link"></td>
         <td> <input type="submit" name="bloquer"  value="bloquer" class="btn  btn-link"></td>
      </form>
      </tr>
      
    <?php endforeach; ?>

  </table>
   <h1 class="text-primary text-center">  La liste des traducteurs Bloqués : </h1>
  <br><br>
  <table style="border-collapse: collapse;  ">
    <tr style="border:3px solid blue;" >
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>Note</th> 
        <th>Email</th> 
        <th>Action à effectuer ...</th>
   </tr>

    <?php foreach ($traducteursbloc as $traducteurbloc): ?>
      <tr style="border: 3px solid blue;">
      <form  action="./controlleradmin/modificationtr.php" method="POST">
        <td><input class="form-control" type="text"  name="nom"       value="<?= $traducteurbloc['nom'] ?>"></td> 
        <td><input class="form-control"  type="text" name="prenom"    value="<?= $traducteurbloc['prenom'] ?>"></td>
        <td><input class="form-control"  type="text" name="addresse"  value="<?= $traducteurbloc['addresse'] ?>"></td>
        <td><input class="form-control"  type="text" name="commune"   value="<?= $traducteurbloc['commune'] ?>"></td>
        <td><input class="form-control"  type="text" name="wilaya"    value="<?= $traducteurbloc['wilaya'] ?>"></td>
        <td><input class="form-control"  type="text" name="num_tel"   value="<?= $traducteurbloc['num_tel'] ?>"></td >
        <td><input class="form-control"  type="text" name="num_faxe"  value="<?= $traducteurbloc['num_faxe'] ?>"></td>
        <td><input class="form-control"  type="text" name="note"      value="<?= $traducteurbloc['note'] ?>"></td>
        <td><input class="form-control"  type="text" name="email"     value="<?= $traducteurbloc['email'] ?>"> </td>
        <td> 
          <input type="submit" name="debloquer"  value="Débloquer" class="btn  btn-link">
        </td>
      </form>
      </tr>
      
    <?php endforeach; ?>

  </table>
  <br><br>
</body>
</html>
<!-- la page client-admin.php-->
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
    
  
  <h1 class="text-primary text-center">  La liste des Clients non bloqués : </h1>
  <br><br>
  <table class="table ">
    <tr style="border:3px solid blue;" >
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Email</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>photo</th> 
        <th>modifier</th>
        <th>Supprimer</th>
        <th>Bloquer</th>
   </tr>
    <?php foreach ($clients as $client): ?>
      <tr style="border: 3px solid blue;">
      <form  action="./controlleradmin/modificationcl.php" method="POST">
        <td><input class="form-control"  type="text"  name="nom"      value="<?= $client['nom'] ?>"></td> 
        <td><input class="form-control"  type="text"  name="prenom"   value="<?= $client['prenom'] ?>"></td>
        <td><input class="form-control"  type="text" name="mail"    value="<?= $client['mail'] ?>"> </td>
        <td><input class="form-control"  type="text" name="adresse" value="<?= $client['adresse'] ?>"></td>
        <td><input class="form-control"  type="text" name="commune"  value="<?= $client['commune'] ?>"></td>
        <td><input class="form-control"  type="text" name="wilaya"   value="<?= $client['wilaya'] ?>"></td>
        <td><input class="form-control"  type="text" name="numTel"  value="<?= $client['numTel'] ?>"></td >
        <td><input class="form-control"  type="text" name="faxe" value="<?= $client['faxe'] ?>"></td>
        <td><input class="form-control"  type="text" name="photo"     value="<?= $client['photo'] ?>"></td>
        <td><input type="submit" name="modifier" value="modifier" class="btn btn-link"></td>
        <td> <input type="submit" name="supprimer" value="Supprimer" class="btn btn-link"></td>
       <td> <input type="submit" name="bloquer" value="Bloquer" class="btn btn-link"></td>
      </form>
      </tr>  
    <?php endforeach; ?>
  </table>
    <h1 class="text-primary text-center">  La liste des clients bloqués: </h1>
  <br><br>
  <!--style="border-collapse: collapse; margin-left: 10px; "-->
  <table class="table" >
    <tr style="border:3px solid blue;" >
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Email</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>photo</th> 
        <th>Action à effectuer ...</th>
        
   </tr>
    <?php foreach ($clientsbloc as $clientbl): ?>
      <tr style="border: 3px solid blue;">
      <form  action="./controlleradmin/modificationcl.php" method="POST">
        <td><input class="form-control"  type="text"  name="nom"      value="<?= $clientbl['nom'] ?>"></td> 
        <td><input class="form-control"  type="text"  name="prenom"   value="<?= $clientbl['prenom'] ?>"></td>
        <td><input class="form-control"  type="text" name="mail"    value="<?= $clientbl['mail'] ?>"> </td>
        <td><input class="form-control"  type="text" name="adresse" value="<?= $clientbl['adresse'] ?>"></td>
        <td><input class="form-control"  type="text" name="commune"  value="<?= $clientbl['commune'] ?>"></td>
        <td><input class="form-control"  type="text" name="wilaya"   value="<?= $clientbl['wilaya'] ?>"></td>
        <td><input class="form-control"  type="text" name="numTel"  value="<?= $clientbl['numTel'] ?>"></td >
        <td><input class="form-control"  type="text" name="faxe" value="<?= $clientbl['faxe'] ?>"></td>
        <td><input class="form-control"  type="text" name="photo"     value="<?= $clientbl['photo'] ?>"></td>
        
        <td ><input type="submit" name="debloquer" value="Déloquer" class="btn btn-link"> </td>
      </form>
      </tr>  
    <?php endforeach; ?>
  </table>
  <br><br>
  </div>
</body>
</html>
