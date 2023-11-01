


<?php session_start()?>
<?php require_once('databaseCon.php') ?>
<?php

   
function verify_donnees($donnees){
    $donnees=htmlspecialchars($donnees);
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    return $donnees;
}


$pseudo=verify_donnees($_POST["password"]);
$mail=verify_donnees($_POST["mail"]);
$regExpo_Nom ="/^[A-Za-z0-9]+$/";

if(empty($pseudo) || empty($mail) ){
    echo "<h3 style='color:#ff3333;'>Veuillez remplir tous les champs svp</h3>";
    exit();

}else {
    if (!preg_match($regExpo_Nom,$pseudo)) {
        echo "<h3 style='color:#ff3333;'>Pseudo invalide!</h3>";
        exit();
    }
   
    if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
       echo "<h3>L'adresse mail est Invalide </h3>";
       exit();
    }
    
     // Vérifie si l' administrateur existe dans la base
     
     $requet="SELECT * FROM administrateur WHERE Pseudo= ? AND Email=?";
     $reqs=$databaseCon->prepare($requet);
     $reqs->execute([$pseudo,$mail]);
     $count=$reqs->rowCount();
     if ($count>0) {
        $_SESSION['mail']=$mail;
        echo "<script>location.href='loginAdmin.php'</script>";
     }else {
        echo "<h3>Pseudo ou mail  incorrect!</h3>";
     }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="projet.css">
           <link rel="stylesheet" href="anim.css" />
            <link rel="stylesheet" href="login.css" />
            <title>Login</title>
    </head>
    <body>
            <?php  include('header.php')?>
<div class="login-contener">
    <div class="login">
        
        <div class="login-form">
            
            <div class="titre"><h2>Se connecter</h2></div>
            <form action="loginAdmin.php" method="POST" id="formulaire_connection">
            <div id='msg1' ><h1></h1></div>
              <div class="input-contener  ">
                    <label for="mail"> Email</label><br>
                    <input type="mail" id="mail" name="mail" class="input"><br> <br> 
                   
              </div>
               
              <div class="input-contener sucess small erreur">
                    <label for="password"> Mot de Passe</label><br>                       
                    <input type="password" id="password" name="password" class="input"><br><br> 
                   
               </div>
              
               <hr>
              

              <button  type="submit" value="Envoyez" class="btn">Connectez</button>
            </form>
        </div>
    </div>
</div>       
            <?php include('footer.php');?>
    </body>
</html>

<script type="text/javascript" src="JQUERY.3.6.3.js"></script>
<!-- <script type="text/javascript" src="connectionCheck.js"></script> -->
<!-- <script type="text/javascript" >

  $(document).ready(function () {
    alert('fddfdfdf')
  $(".btn").click(function (event) {
    event.preventDefault();
    $("#msg1").css({
      visibility: "visible",
    });
    $.ajax({
      url: "loginAdmin.php",
      method: "POST",
      data: $("#formulaire_connection").serialize(),
      success: function (data) {
        $("#msg1").html(data);
      },
    });
  });
}); -->

</script>


