

<?php session_start()?>
<?php require_once('databaseCon.php') ?>
<?php

   
function verify_donnees($donnees){
    $donnees=htmlspecialchars($donnees);
    $donnees=trim($donnees);
    $donnees=stripslashes($donnees);
    return $donnees;
}

$NomExam=verify_donnees($_POST["NameExam"]);
$NumTble=verify_donnees($_POST["NumTble"]);

$regExpo_Chifr="/^[0-9]+$/";
$i=0;
if(empty($NomExam) || empty($NumTble) ){
    echo "<h3 style='color:#ff3333;'>Veuillez remplir tous les champs svp</h3>";
    exit();

}else {
    if (!preg_match($regExpo_Chifr,$NumTble)) {
        echo'<h3>Le Numéro  en chiffre</h3>';
        exit();
     }
     $requet="SELECT * FROM  resultats_examens WHERE Examen= ? AND Num_Table=?";
     $reqs=$databaseCon->prepare($requet);
     $reqs->execute([$NomExam,$NumTble]);
     if ($candidat=$reqs->fetch()) {
         echo "Examen :". $candidat['Examen']."<br><br>";
         echo "Session :". $candidat['sessionEx']."<br><br>";
         echo "Numéro de table :".$candidat['Num_Table']."<br><br>";
         echo "Nom :".$candidat['Nom_Candidat']."<br><br>";
         echo "Prénom :".$candidat['Prenom_Candidat']."<br><br>";
         echo "Sexe :".$candidat['Sexe']."<br><br>";
         echo "Resultat :".$candidat['Resultat']."<br><br>";
         echo "Moyenne :".$candidat['Moyenne']."<br><br>";
         echo "Mention :".$candidat['Mention']."<br><br>";
         exit();
     }else {
        echo "<h2>Aucun candidat pour cet examen.<br> </h2>"."<h2>Veuiller vérifiez le numéro de table</h2>";
     }



    //  $exam=["CEPD","BEPC","BACI","BACII","BTS"];
//    for ($i=0; $i < count($exam) ; $i++) { 
//     if ($NomExam != $exam[$i]) {
//         echo  $exam[$i]."br";
//         echo $NomExam;
//         echo'<h3>Aucun examen ne correspond</h3>';
//         exit();
     
//     }
//    }

}

?>