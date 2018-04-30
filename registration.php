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


    <title>Registrierung</title>
</head>
<body>
<div class="site-wrapper">
<!-- Registrieungsformular -->
 <main>
     <div class="inner cover">
        <h1 class="margin-base-vertical">Jetzt registrieren</h1>
        <div class="container-fluid">
            <div class="row">


                 <div class="col-sm-6">
                   <form enctype="multipart/form-data" action="regAction.php" method="post">

                      <div class="form-group">
                           <label for="user">Benutzername</label>
                          <input type="text" class="form-control" id="user" placeholder="Username">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">E-mail Adresse</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Passwort</label>
                             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                         </div><div class="form-group">
                          <label for="exampleInputPassword1">Passwort wiederholen</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                         </div>
                         <button type="submit" class="btn btn-primary">Senden</button>
                     </form>

                 </div>
             </div>
     </div>
 </main>
</div>
</body>
</html>

