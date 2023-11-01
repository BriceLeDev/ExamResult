<?php session_start()?>
<?php require_once('databaseCon.php') ?>
<?php

   
function verify_donnees($donnees){
    $donnees=htmlspecialchars($donnees);
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    return $donnees;
}


$pseudo=verify_donnees($_POST["pseudo"]);
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