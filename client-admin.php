<?php

     include './controlleradmin/recuinfoc.php';
     $req = new  RecupererClientControl();
     $clients = $req->recupClCon();
     $clientsbloc = $req->recupClBlCon();

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">   
   <link rel="stylesheet" href="css/style2.css">  
  <title>Admin #EasyTraduc</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Admin</span>
          </button>
        </div>
        <div class="p-4 pt-5">

          <h1><a href="dash-admin.php" class="logo">Admin</a></h1>
          <ul class="list-unstyled components mb-5">
             <li>
                <a href="dash-admin.php">Acceuil</a>
            </li>
            <li >
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Traducteurs</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="traducteur-admin.php">Modification</a>
                </li>
                <li>
                    <a href="traducteur2-admin.php">Tri & Filtre</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle active">Clients</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="client-admin.php">Modification</a>
                </li>
                <li>
                    <a href="client2-admin.php">Tri & Filtre</a>
                </li>
              </ul>
            </li>
            <li>
                <a href="document-admin.php">Document</a>
            </li>
             
            <li>
              <a href="static-admin.php">Statistiques</a>
            </li>
          </ul>
        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
            <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
             
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <button class="btn btn-link"><a href="admin.php">Déconnecter</a></button>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
<div class=""  >
      <h1 class="text-center text-primary">La liste des Clients non bloqués</h1> 
      <br> <br>                       
<table class="table table-sm" id ="mydataTable">
  <thead class="thead-dark">
    <tr>
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
  </thead>
  <tbody>
     <?php foreach ($clients as $client): ?>
      <tr >
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
  </tbody>
</table>
   <br> <br>  
 <h1 class="text-center text-primary">La liste des Clients bloqués</h1> 
      <br> <br>   
<table  class="table table-sm" id ="mydataTable2">
  <thead >
    <tr class="thead-dark">
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Email</th> 
        <th>Adresse</th>  
        <th>Commune</th> 
        <th>Wilaya</th> 
        <th>Numéro de telephone</th> 
        <th>Numéro du Faxe</th> 
        <th>photo</th> 
        <th>Débloqué</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
  
 <?php foreach ($clientsbloc as $clientbl): ?>
      <tr>
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
        <td><input type="submit" name="modifier" value="modifier" class="btn btn-link"></td>
        <td> <input type="submit" name="supprimer" value="Supprimer" class="btn btn-link"></td>
      </form>
      </tr>  
    <?php endforeach; ?>
  </tbody>
</table>
 

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- End of Sidebar -->

    
   
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
