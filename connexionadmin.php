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
</head>
<body>
	     
          <br><br>
          	<h1 class="text-primary text-center">Section Admin de #EasyTraduc </h1>
	     	<br><br>
	     <div style="width: 500px; border:5px;margin-left: 500px">
	     
         <form action="connexionadminn.php" method="POST">  
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text"   id="email" class="form-control" name="email" >
              </div>   
              <div class="form-group">
                <label for="password">Mot de passe </label>
                <input type="password"   id="password" class="form-control" name="mdp">
              </div>    
              <input type="submit" name="submit" value="Se connecter" class="btn btn-primary">  
            </form>

      </div>
</body>
</html>