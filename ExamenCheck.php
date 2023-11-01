<?php session_start()?>
<?php require_once('databaseCon.php') ?>
<?php

   
function verify_donnees($donnees){
    $donnees=htmlspecialchars($donnees);
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    return $donnees;
}

$sessionEX=verify_donnees($_POST["sessionEX"]);
$nomEX=verify_donnees($_POST["nomEX"]);
$NomCAND=verify_donnees($_POST["NomCAND"]);
$Prenom=verify_donnees($_POST["Prenom"]);
$sexe=verify_donnees($_POST["Sexe"]);
$DateEX=verify_donnees($_POST["DateEX"]);
$lieu=verify_donnees($_POST["lieu"]);
$NumeroTb=verify_donnees($_POST["NumeroTb"]);
$Resultat=verify_donnees($_POST["Resultat"]);
$Moyenne=verify_donnees($_POST["Moyenne"]);
$Mention=verify_donnees($_POST["Mention"]);

$regExpo_Nom="/^[A-Z]+$/";
$regExpo_Prenom="/^[A-Za-z]+$/";
$regExpo_Chifr="/^[0-9]+$/";
$Regdate="/^[0-9]{4}\\/[0-9]{1,2}\\/[0-9]{1,2}$/";

if(empty($sessionEX) || empty($nomEX)|| empty($NomCAND) || empty($Prenom) || empty($sexe) || empty($DateEX)||empty($lieu)|| empty($NumeroTb) || empty($Resultat) || empty($Moyenne) || empty($Mention) ){
    echo "<h3 style='color:#ff3333;'>Veuillez remplir tous les champs svp</h3>";
    exit();

}else {
    if (!preg_match($Regdate,$DateEX)) {
        echo'<h3>date format invalide</h3>';
        exit();
     }
    if (!preg_match($regExpo_Nom,$NomCAND)) {
       echo'<h3>Le nom doit être en majiscule</h3>';
       exit();
    }
    if (!preg_match($regExpo_Prenom,$Prenom)) {
       echo'<h3>Le prénom doit commencer par une lettre majiscule et sans un chiffre</h3>';
       exit();
    }
    if (!preg_match($regExpo_Chifr,$Moyenne)) {
       echo'<h3>Moyenne invalide</h3>';
       exit();
    }
    if (!preg_match($regExpo_Chifr,$NumeroTb)) {
       echo'<h3>Numéro de table invalide</h3>';
       exit();
    }
  
    
    if ($Moyenne > 20 ) {
        echo "<h3>La moyenne ne peut dépasser 20 </h3>";
        exit();
    }
   

    $requet="SELECT * FROM resultats_examens WHERE Examen= ? AND Num_Table=?";
    $reqs=$databaseCon->prepare($requet);
    $reqs->execute([$nomEX,$NumeroTb]);
    if ($reqs->fetch()) {
        echo "<h3>Ce Candidat existe déjà dans le même examen! </h3>";
        exit();
    }else {
       
        $req=$databaseCon->prepare('INSERT INTO  resultats_examens(sessionEx,Examen,Num_Table,Nom_Candidat,Prenom_Candidat,Sexe,Date_Naissance,Lieu_Naissance,Resultat,Moyenne,Mention)VALUE(:sessionEx,:Examen,:Num_Table,:Nom_Candidat,:Prenom_Candidat,:Sexe,:Date_Naissance,:Lieu_Naissance,:Resultat,:Moyenne,:Mention)');
        $req->execute([
            'sessionEx'=>$sessionEX,
            'Examen'=> $nomEX,
            'Num_Table'=> $NumeroTb,
            'Nom_Candidat'=>$NomCAND,
            'Prenom_Candidat'=>$Prenom,
            'Sexe'=>$sexe,
            'Date_Naissance'=> $DateEX,
            'Lieu_Naissance'=> $lieu,
            'Resultat'=> $Resultat,
            'Moyenne'=> $Moyenne,
            'Mention'=> $Mention
           
            
        ]);
        echo "<h3>Ce Candidat Ajouter! </h3>";
        echo "<script>location.href='admin.php'</script>";
    }
}

?>