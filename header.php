

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Future-Technologie</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body>

<div class="row">
<div class="md-12">
   

    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #1995dc; line-height: 1px !important; ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/r3.png" style="width: 80px; margin-top: -10px;" class="logo">
                </a><span class="navbar-brand" style="color: white">Future-Technology</span>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#" target="_blank" style="color: white">S'inscrire</a></li>-->
                
                <li id="log"><a href="connect.php"  style="color: white">Connexion et Inscription</a></li>
                <li>
                    <a href="#" style="color: white">Contact</a>
                </li>
                <!-- <li>
                    <a href="#" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-shopping-cart" style="color: white"></span> Shopping Cart
                    </a>
                </li> -->


                <li class="input-group-btn" style="margin-top: 8px; margin-right: 5px;">
                <button class="btn btn-warning" type="button" style="border-top-left-radius: 7px !important;"> Panier <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&zwnj;</button>
              </li>
            </ul>
            
            <!--search======================================================== --><?php include 'search.php' ;?>  
          
        </div>
    </nav>
            <!-- End-Navbar ================================================== -->