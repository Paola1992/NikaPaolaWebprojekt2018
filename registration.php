<?php
/**
 * Created by PhpStorm.
 * User: paolapatino
 * Date: 20.04.18
 * Time: 18:58
 */

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


    <title>Registrierung </title>
</head>
<body>

<!-- Registrieungsformular -->
 <main>
     <div class="cover-container">
         <div class="masthead clearfix">
             <div class="inner">
                 <h3 class="masthead-brand">Safe & Send</h3>
                 <nav>
                     <ul class="nav masthead-nav">
                         <li class="active"><a href="index.php">Home</a></li>
                         <li><a href="login.html">Login</a></li>
                         <li><a href="registration.php">Registrieren</a></li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
     <div class="inner cover">
         <h1 class="margin-base-vertical">Jetzt registrieren</h1>
         <div class="container-fluid">
             <div class="col-sm-6">
                 <form enctype="multipart/form-data" action="regAction.php" method="post">
                     <div class="form-group">
                         <label for="username">Benutzername</label>
                         <input type="text" class="form-control" id="username" placeholder="Username">
                     </div>
                     <div class="form-group">
                         <label for="email">E-mail Adresse</label>
                         <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                     </div>
                     <div class="form-group">
                         <label for="passwordOne">Passwort</label>
                         <input type="text" class="form-control" id="passwordOne" placeholder="Password">
                     </div><div class="form-group">
                         <label for="passwordTwo">Passwort wiederholen</label>
                         <input type="text" class="form-control" id="passwordTwo" placeholder="Password">
                     </div>
                     <button type="submit" class="btn btn-primary">Senden</button>
                 </form>
             </div>
         </div>
     </div>
 </main>
</body>
</html>

