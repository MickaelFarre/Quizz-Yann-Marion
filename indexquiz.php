<?php
include 'connexion.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quiz</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">


 <form action="process/process_ajout_user.php" method="POST">

 
 <div style="text-align:center">   
   
   
    <h1>Connexion</h1>
</div>
    <?php
    $pseudo = $_GET['pseudo'];
    if (isset($_GET['error'])){?>
    <i><?php echo "Votre pseudo existe déjà.Veuillez en saisir un autre."?></i>
    <input type="text"  name="pseudo" required>
    <input type="submit" id="submit" value="Se Connecter" style="justify-content:center">
    <?php
    } else {?>
     
    <input class="label" type="text" name="pseudo">
    <input  class="btn" type="submit" id="submit" value="Se Connecter" style="justify-content:center">
    <?php
    }?>


 </form>
 
 </div>
<a href="question.php">


</body>
</html>

