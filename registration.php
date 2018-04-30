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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="">

    <title>Registrierung</title>
</head>
<body>

<!-- Registrieungsformular -->
 <main>

     <div class="container">
         <div class="row">


             <div class="col-sm-6">
                 <form enctype="multipart/form-data" action="regAction.php" method="post">
                     <input type="text" name="username">
                     <br>
                     <input type="text" name="email">
                     <br>
                     <input type="text" name="passwordOne">
                     <br>
                     <input type="text" name="passwordTwo">
                     <br>
                     <input type="submit" name="submit">
                 </form>

             </div>
         </div>


     </div>

 </main>
<div>

            </div>


</body>
</html>

