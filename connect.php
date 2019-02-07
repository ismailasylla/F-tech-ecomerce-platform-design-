<!DOCTYPE html>
<html lang="en">
<head>
  <title>F-Tech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container" >
      <h2>Bienvenu a vous !</h2>
      <ul class="nav nav-tabs">
        <!--<li class="active"><a data-toggle="tab" href="#home">F-Tech</a></li>-->
        <li class="active"><a data-toggle="tab" href="#Sign-up">S'inscrire</a></li>
        <li><a data-toggle="tab" href="#Login"> Connexion</a></li>
        <li><a data-toggle="tab" href="#Admin">Aide</a></li>
      </ul>

      <div class="tab-content">
        <!--<div id="home" class="tab-pane fade in active">
          <h3> <a href="index.php">Retour Au Menu</a></h3>
        </div>-->
        <div id="Sign-up" class="tab-pane fade in active">
          <h3>S'inscrire</h3>
                <?php include('sign-up.php');?>
                </div>

        <div id="Login" class="tab-pane fade">

          <h3>Connexion</h3>
            <?php include('login-form.php');?>

        </div>
        <div id="Admin" class="tab-pane fade">
          <hr><hr>
          <h3 style="text-align:center;">Bonjour. Comment pouvons-nous vous aider ?</h3>

            <?php include'aide.php'; ?>

        </div>
      </div>
    </div>


<script src="bootsrap/js/script.js"></script>
</body>
</html>
