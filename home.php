<!DOCTYPE html>
<html lang="french">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="projet.css">
     <link rel="stylesheet" href="anim.css" />
    <title>Accueil</title>
   
</head>
<body>
   <?php  include('header.php')?>
  
    <section>
   <div class="titreLog  animatable moveUp fadeBgColor">
        <a href="admin.php"><img src="image\logo.png" class="logo" ></a> 
        <h2>Centre de Consultation de Résultats des Examens et Concours</h2>
   </div>
       
        <div class="statistic">
             <div class="cardS1  animatable bounceInLeft" style="font-weight: bolder;">
                <h3>CEPD</h3>
                <?php 
                  
                  require_once('databaseCon.php');
                  $requet="SELECT * FROM resultats_examens WHERE Examen='CEPD' AND Resultat='Admis' AND Moyenne > 10 ";
                  $reqs=$databaseCon->prepare($requet);
                  $reqs->execute();
                  $Nbr=$reqs->rowCount();
                  $requet22="SELECT * FROM resultats_examens  WHERE Examen='CEPD' ";
                  $reqs22=$databaseCon->prepare($requet22);
                  $reqs22->execute();
                  $NbrTotal=$reqs22->rowCount();
                  if ($NbrTotal>0) {
                      echo 100/$NbrTotal*$Nbr."%";
                      
                  }else {
                    echo " Aucun candidat sur la liste";
                }
                if ($NbrTotal>0) {
                    echo ' <div > <hr>Avec<br> ' .  $NbrTotal .'<br></div>';
                    echo ' <div > Candidats inscrits </div>';
                    }
              
              ?>
            
             </div>
             <div class="cardS1 animatable fadeInUp" style="font-weight: bolder;">
                <h3 style="color:orange;">BEPC</h3>
                <?php 
                  
                    require_once('databaseCon.php');
                    $requet="SELECT * FROM resultats_examens WHERE Examen='BEPC' AND Resultat='Admis' AND Moyenne > 10 ";
                    $reqs=$databaseCon->prepare($requet);
                    $reqs->execute();
                    $Nbr=$reqs->rowCount();
                    $requet22="SELECT * FROM resultats_examens  WHERE Examen='BEPC' ";
                    $reqs22=$databaseCon->prepare($requet22);
                    $reqs22->execute();
                    $NbrTotal=$reqs22->rowCount();
                    if ($NbrTotal>0) {
                        echo 100/$NbrTotal*$Nbr."%";
                        
                    }else {
                        echo " Aucun candidat sur la liste";
                    }
                    if ($NbrTotal>0) {
                        echo ' <div > <hr>Avec<br> ' .  $NbrTotal .'<br></div>';
                        echo ' <div > Candidats inscrits </div>';
                        }
                ?>
                 
             </div>
             
             <div class="cardS1 animatable fadeInUp" style="font-weight: bolder;">
                 <h3 style="color:gray;" > BACI</h3>
                 
                 <?php 
                    
                    require_once('databaseCon.php');
                    $requet="SELECT * FROM resultats_examens WHERE Examen= 'BACI' AND Resultat='Admis' AND Moyenne > 10 ";
                    $reqs=$databaseCon->prepare($requet);
                    $reqs->execute();
                    $Nbr=$reqs->rowCount();
                    $requet22="SELECT * FROM resultats_examens WHERE Examen= 'BACI' ";
                    $reqs22=$databaseCon->prepare($requet22);
                    $reqs22->execute();
                    $NbrTotal=$reqs22->rowCount();
                    if ($NbrTotal>0) {
                        echo  100/$NbrTotal*$Nbr . '% ';

                    }else {
                        echo " Aucun candidat sur la liste";
                    }

                    if ($NbrTotal>0) {
                    echo ' <div > <hr>Avec<br> ' .  $NbrTotal .'<br></div>';
                    echo ' <div > Candidats inscrits </div>';
                    }
                ?>
            </div>
            
             <div class="cardS1 animatable fadeInUp" style="font-weight: bolder;">
                <h3 style="color:green;"> BACII</h3>

                <?php 
                  
                  require_once('databaseCon.php');
                  $requet="SELECT * FROM resultats_examens WHERE Examen= 'BACII' AND Resultat='Admis' AND Moyenne > 10 ";
                  $reqs=$databaseCon->prepare($requet);
                  $reqs->execute();
                  $Nbr=$reqs->rowCount();
                  $requet22="SELECT * FROM resultats_examens WHERE Examen= 'BACII' ";
                  $reqs22=$databaseCon->prepare($requet22);
                  $reqs22->execute();
                  $NbrTotal=$reqs22->rowCount();
                 if ($NbrTotal>0) {
                        echo 100/$NbrTotal*$Nbr."%";
                        
                    }else {
                        echo " Aucun candidat sur la liste";
                    }
                    if ($NbrTotal>0) {
                        echo ' <div > <hr>Avec<br> ' .  $NbrTotal .'<br></div>';
                        echo ' <div > Candidats inscrits </div>';
                        }
              ?>
             </div>
             <div class="cardS1 animatable bounceInRight" style="font-weight: bolder;">
                <h3 style="color:blue;"> BTS</h3>
                <?php 
                  
                  require_once('databaseCon.php');
                  $requet="SELECT * FROM resultats_examens WHERE Examen= 'BTS' AND Resultat='Admis' AND Moyenne > 10 ";
                  $reqs=$databaseCon->prepare($requet);
                  $reqs->execute();
                  $Nbr=$reqs->rowCount();
                  $requet22="SELECT * FROM resultats_examens WHERE Examen= 'BTS' ";
                  $reqs22=$databaseCon->prepare($requet22);
                  $reqs22->execute();
                  $NbrTotal=$reqs22->rowCount();
                 if ($NbrTotal>0) {
                        echo 100/$NbrTotal*$Nbr."%";
                        
                    }else {
                        echo " Aucun candidat sur la liste";
                    }
                    if ($NbrTotal>0) {
                        echo ' <div > <hr>Avec<br> ' .  $NbrTotal .'<br></div>';
                        echo ' <div > Candidats inscrits </div>';
                        }
              ?>
             </div>
        </div>
    
        <div class="container">
        <div class="card  animatable bounceInLeft">
            <form action="" id="formExm" class="examForm">
                            <a class="singup">examen</a><br><br>
                        
                            <div class="inputBox1">
                                <!-- <input type="text" required="required" name="NameExam"> -->
                                <select class="input_field" name="NameExam" >
                                    <option>CEPD</option>
                                    <option>BEPC</option>
                                    <option>BACI</option>
                                    <option>BACII</option>
                                    <option>BTS</option>
                              
                                </select>
                                <!-- <span class="user">Nom Examen</span> -->
                            </div><br><br>

                            <div class="inputBox">
                                <input type="number" required="required" placeholder="0000 0000 " name="NumTble" >
                                <!-- <input type="number" name="NumeroTb" title="Inpit title" placeholder="0000 0000 "> -->

                                <span>Numéro de table</span>
                            </div><br><br><br>

                        

                            <button class="enter update" id="CheckExam">Envoyer</button>
            </form> 
            <!-- ************concours************************ -->
            <form action="" id="formConc" class="conForm">
                            <a class="singup">concours</a><br><br>
                        
                            <div class="inputBox1">
                                <!-- <input type="text" required="required" name="nomConc"> -->
                               
                                <select class="input_field" name="nomConc">
                                    <option value="ENAM">ENAM</option>
                                    <option value="OTR">OTR</option>
                                    <option value="POLICE">POLICE</option>
                                    <option value="ISICA">ISICA</option>
                                    <option value="ENSI">ENSI</option>
                                    <option value="CIC">CIC</option>   
                                </select>
                                <!-- <span class="user">Nom Concours</span> -->
                            </div><br><br>

                            <div class="inputBox">
                                <input type="number" required="required" placeholder="0000 0000 " name="NumTble" >
                                <!-- <input type="number" name="NumeroTb" title="Inpit title" placeholder="0000 0000 "> -->

                                <span>Numéro de table</span>
                            </div><br><br><br>

                        

                            <button class="enter update" id="CheckConc">Envoyer</button>
            </form> 
        </div>
        </div> 
            <div class="lesbtn">
                <button class="button buttonExam ">Exament </button>
                <button class="button buttonConc">Concours</button>
                <!-- <button class="button">Click Here</button>
                <button class="button">Click Here</button> -->
            </div>

            <!-- popup affiche le resultat d un visiteur***************************************** -->
        <div class="pup_update">
                    <div class="pop1">
                        <img class="closePop__update" src="icon/x.svg">
                        <div class="message">

                        </div>

                    </div>
                </div>
                <!-- statistiaie généra -->
        <div class="generale"style="font-weight: bolder">
            <div class="college">
                <div class="cardS1 animatable fadeInDown">
                <?php 
                   echo '<span style="color:#0099CC;;">CEPD</span>';
                   echo '<hr>';
                  require_once('databaseCon.php');
                  $requet="SELECT * FROM resultats_examens WHERE Examen='CEPD' AND Resultat='Admis' AND Moyenne > 10 ";
                  $reqs=$databaseCon->prepare($requet);
                  $reqs->execute();
                  $Nbr=$reqs->rowCount();
                  $requet22="SELECT * FROM resultats_examens  WHERE Examen='CEPD' ";
                  $reqs22=$databaseCon->prepare($requet22);
                  $reqs22->execute();
                  $NbrTotal=$reqs22->rowCount();
                //   select sexe féminin**********************
                  $requetFTotl="SELECT * FROM resultats_examens WHERE Examen='CEPD' AND  Sexe='Féminin' ";
                  $reqsFTotl=$databaseCon->prepare($requetFTotl);
                  $reqsFTotl->execute();
                  $NbrFTotl=$reqsFTotl->rowCount();

                  $requetF="SELECT * FROM resultats_examens WHERE Examen='CEPD' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Féminin' ";
                  $reqsF=$databaseCon->prepare($requetF);
                  $reqsF->execute();
                  $NbrF=$reqsF->rowCount();
                  //   select sexe masculin**********************
                  $requetMTotl="SELECT * FROM resultats_examens WHERE Examen='CEPD'  AND Sexe='Masculin' ";
                  $reqsMTotl=$databaseCon->prepare($requetMTotl);
                  $reqsMTotl->execute();
                  $NbrMTotl=$reqsMTotl->rowCount();

                  $requetM="SELECT * FROM resultats_examens WHERE Examen='CEPD' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Masculin' ";
                  $reqsM=$databaseCon->prepare($requetM);
                  $reqsM->execute();
                  $NbrM=$reqsM->rowCount();

                  if ($NbrTotal>0) {
                      echo ' <div >Nombre de filles inscrites : </div>' . ''. $NbrFTotl .''.'<br><br>';
                      echo ' <div >Nombre de garçons inscrits : </div>'. ''. $NbrMTotl .''.'<br><br>';
                    //   echo 100/$NbrTotal*$Nbr."%";
                      echo " <span style='text-align: center; color: #0099CC;text-decoration: underline'>TAUX DE REUSSITE </span><br><br>";
                     
                  }else {
                    echo " Aucun candidat sur la liste";
                }
                if ($NbrFTotl>0) {
                    echo "Filles :". floor(100/$NbrFTotl*$NbrF)."%<br><br>";
                    
                    }
                if ($NbrMTotl>0) {
                    echo "Garçons :".  floor(100/$NbrMTotl*$NbrM)."%<br>";
                    
                    }
              
              ?>
                </div>
                <div class="cardS1 animatable fadeInDown">
                    <?php 
                         echo '<span style="color:orange;">BEPC</span>';
                         echo '<hr>';
                         require_once('databaseCon.php');
                         $requet="SELECT * FROM resultats_examens WHERE Examen='BEPC' AND Resultat='Admis' AND Moyenne > 10 ";
                         $reqs=$databaseCon->prepare($requet);
                         $reqs->execute();
                         $Nbr=$reqs->rowCount();
                         $requet22="SELECT * FROM resultats_examens  WHERE Examen='BEPC' ";
                         $reqs22=$databaseCon->prepare($requet22);
                         $reqs22->execute();
                         $NbrTotal=$reqs22->rowCount();
                       //   select sexe féminin**********************
                         $requetFTotl="SELECT * FROM resultats_examens WHERE Examen='BEPC' AND  Sexe='Féminin' ";
                         $reqsFTotl=$databaseCon->prepare($requetFTotl);
                         $reqsFTotl->execute();
                         $NbrFTotl=$reqsFTotl->rowCount();
       
                         $requetF="SELECT * FROM resultats_examens WHERE Examen='BEPC' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Féminin' ";
                         $reqsF=$databaseCon->prepare($requetF);
                         $reqsF->execute();
                         $NbrF=$reqsF->rowCount();
                         //   select sexe masculin**********************
                         $requetMTotl="SELECT * FROM resultats_examens WHERE Examen='BEPC'  AND Sexe='Masculin' ";
                         $reqsMTotl=$databaseCon->prepare($requetMTotl);
                         $reqsMTotl->execute();
                         $NbrMTotl=$reqsMTotl->rowCount();
       
                         $requetM="SELECT * FROM resultats_examens WHERE Examen='BEPC' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Masculin' ";
                         $reqsM=$databaseCon->prepare($requetM);
                         $reqsM->execute();
                         $NbrM=$reqsM->rowCount();
       
                         if ($NbrTotal>0) {
                             echo ' <div >Nombre de filles inscrites : </div>' . ''. $NbrFTotl .''.'<br><br>';
                             echo ' <div >Nombre de garçons inscrits : </div>'. ''. $NbrMTotl .''.'<br><br>';
                           //   echo 100/$NbrTotal*$Nbr."%";
                             echo " <span style='text-align: center; color:orange;text-decoration: underline'>TAUX DE REUSSITE </span><br><br>";
                            
                         }else {
                           echo " Aucun candidat sur la liste";
                       }
                       if ($NbrFTotl>0) {
                           echo "Filles :". floor(100/$NbrFTotl*$NbrF)."%<br><br>";
                           
                           }
                       if ($NbrMTotl>0) {
                           echo "Garçons :". floor(100/$NbrMTotl*$NbrM) ."%<br>";
                           
                           }
                    ?>
                </div>
            </div>
            <div class="lycee">
                <div class="cardS1">
                <?php 
                         echo '<span style="color:gray;">BACI</span>';
                         echo '<hr>';
                         require_once('databaseCon.php');
                         $requet="SELECT * FROM resultats_examens WHERE Examen='BACI' AND Resultat='Admis' AND Moyenne > 10 ";
                         $reqs=$databaseCon->prepare($requet);
                         $reqs->execute();
                         $Nbr=$reqs->rowCount();
                         $requet22="SELECT * FROM resultats_examens  WHERE Examen='BACI' ";
                         $reqs22=$databaseCon->prepare($requet22);
                         $reqs22->execute();
                         $NbrTotal=$reqs22->rowCount();
                       //   select sexe féminin**********************
                         $requetFTotl="SELECT * FROM resultats_examens WHERE Examen='BACI' AND  Sexe='Féminin' ";
                         $reqsFTotl=$databaseCon->prepare($requetFTotl);
                         $reqsFTotl->execute();
                         $NbrFTotl=$reqsFTotl->rowCount();
       
                         $requetF="SELECT * FROM resultats_examens WHERE Examen='BACI' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Féminin' ";
                         $reqsF=$databaseCon->prepare($requetF);
                         $reqsF->execute();
                         $NbrF=$reqsF->rowCount();
                         //   select sexe masculin**********************
                         $requetMTotl="SELECT * FROM resultats_examens WHERE Examen='BACI'  AND Sexe='Masculin' ";
                         $reqsMTotl=$databaseCon->prepare($requetMTotl);
                         $reqsMTotl->execute();
                         $NbrMTotl=$reqsMTotl->rowCount();
       
                         $requetM="SELECT * FROM resultats_examens WHERE Examen='BACI' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Masculin' ";
                         $reqsM=$databaseCon->prepare($requetM);
                         $reqsM->execute();
                         $NbrM=$reqsM->rowCount();
       
                         if ($NbrTotal>0) {
                             echo ' <div >Nombre de filles inscrites : </div>' . ''. $NbrFTotl .''.'<br><br>';
                             echo ' <div >Nombre de garçons inscrits : </div>'. ''. $NbrMTotl .''.'<br><br>';
                           //   echo 100/$NbrTotal*$Nbr."%";
                             echo " <span style='text-align: center; color:gray;text-decoration: underline'>TAUX DE REUSSITE </span><br><br>";
                            
                         }else {
                           echo " Aucun candidat sur la liste";
                       }
                       if ($NbrFTotl>0) {
                           echo "Filles :". floor(100/$NbrFTotl*$NbrF)."%<br><br>";
                           
                           }
                       if ($NbrMTotl>0) {
                           echo "Garçons :".  floor(100/$NbrMTotl*$NbrM)."%<br>";
                           
                           }
                    ?>
                </div>
                <div class="cardS1">
                <?php 
                         echo '<span style="color:green;">BACII</span>';
                         echo '<hr>';
                         require_once('databaseCon.php');
                         $requet="SELECT * FROM resultats_examens WHERE Examen='BACII' AND Resultat='Admis' AND Moyenne > 10 ";
                         $reqs=$databaseCon->prepare($requet);
                         $reqs->execute();
                         $Nbr=$reqs->rowCount();
                         $requet22="SELECT * FROM resultats_examens  WHERE Examen='BACII' ";
                         $reqs22=$databaseCon->prepare($requet22);
                         $reqs22->execute();
                         $NbrTotal=$reqs22->rowCount();
                       //   select sexe féminin**********************
                         $requetFTotl="SELECT * FROM resultats_examens WHERE Examen='BACII' AND  Sexe='Féminin' ";
                         $reqsFTotl=$databaseCon->prepare($requetFTotl);
                         $reqsFTotl->execute();
                         $NbrFTotl=$reqsFTotl->rowCount();
       
                         $requetF="SELECT * FROM resultats_examens WHERE Examen='BACII' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Féminin' ";
                         $reqsF=$databaseCon->prepare($requetF);
                         $reqsF->execute();
                         $NbrF=$reqsF->rowCount();
                         //   select sexe masculin**********************
                         $requetMTotl="SELECT * FROM resultats_examens WHERE Examen='BACII'  AND Sexe='Masculin' ";
                         $reqsMTotl=$databaseCon->prepare($requetMTotl);
                         $reqsMTotl->execute();
                         $NbrMTotl=$reqsMTotl->rowCount();
       
                         $requetM="SELECT * FROM resultats_examens WHERE Examen='BACII' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Masculin' ";
                         $reqsM=$databaseCon->prepare($requetM);
                         $reqsM->execute();
                         $NbrM=$reqsM->rowCount();
       
                         if ($NbrTotal>0) {
                             echo ' <div >Nombre de filles inscrites : </div>' . ''. $NbrFTotl .''.'<br><br>';
                             echo ' <div >Nombre de garçons inscrits : </div>'. ''. $NbrMTotl .''.'<br><br>';
                           //   echo 100/$NbrTotal*$Nbr."%";
                             echo " <span style='text-align: center; color:green;text-decoration: underline'>TAUX DE REUSSITE </span><br><br>";
                            
                         }else {
                           echo " Aucun candidat sur la liste";
                       }
                       if ($NbrFTotl>0) {
                           echo "Filles :". floor(100/$NbrFTotl*$NbrF)."%<br><br>";
                           
                           }
                       if ($NbrMTotl>0) {
                           echo "Garçons :".  floor(100/$NbrMTotl*$NbrM)."%<br>";
                           
                           }
                    ?>
                </div>
            </div>
            <div class="universite">
                <div class="cardS1 animatable bounceIn">
                <?php 
                         echo '<span style="color:blue;">BTS</span>';
                         echo '<hr>';
                         require_once('databaseCon.php');
                         $requet="SELECT * FROM resultats_examens WHERE Examen='BTSBTS' AND Resultat='Admis' AND Moyenne > 10 ";
                         $reqs=$databaseCon->prepare($requet);
                         $reqs->execute();
                         $Nbr=$reqs->rowCount();
                         $requet22="SELECT * FROM resultats_examens  WHERE Examen='BTS' ";
                         $reqs22=$databaseCon->prepare($requet22);
                         $reqs22->execute();
                         $NbrTotal=$reqs22->rowCount();
                       //   select sexe féminin**********************
                         $requetFTotl="SELECT * FROM resultats_examens WHERE Examen='BTS' AND  Sexe='Féminin' ";
                         $reqsFTotl=$databaseCon->prepare($requetFTotl);
                         $reqsFTotl->execute();
                         $NbrFTotl=$reqsFTotl->rowCount();
       
                         $requetF="SELECT * FROM resultats_examens WHERE Examen='BTS' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Féminin' ";
                         $reqsF=$databaseCon->prepare($requetF);
                         $reqsF->execute();
                         $NbrF=$reqsF->rowCount();
                         //   select sexe masculin**********************
                         $requetMTotl="SELECT * FROM resultats_examens WHERE Examen='BTS'  AND Sexe='Masculin' ";
                         $reqsMTotl=$databaseCon->prepare($requetMTotl);
                         $reqsMTotl->execute();
                         $NbrMTotl=$reqsMTotl->rowCount();
       
                         $requetM="SELECT * FROM resultats_examens WHERE Examen='BTS' AND Resultat='Admis' AND Moyenne > 10 AND Sexe='Masculin' ";
                         $reqsM=$databaseCon->prepare($requetM);
                         $reqsM->execute();
                         $NbrM=$reqsM->rowCount();
       
                         if ($NbrTotal>0) {
                             echo ' <div >Nombre de filles inscrites : </div>' . ''. $NbrFTotl .''.'<br><br>';
                             echo ' <div >Nombre de garçons inscrits : </div>'. ''. $NbrMTotl .''.'<br><br>';
                           //   echo 100/$NbrTotal*$Nbr."%";
                             echo " <span style='text-align: center; color:blue;text-decoration: underline'>TAUX DE REUSSITE </span><br><br>";
                            
                         }else {
                           echo " Aucun candidat sur la liste";
                       }
                       if ($NbrFTotl>0) {
                           echo "Filles :".  floor(100/$NbrFTotl*$NbrF)."%<br><br>";
                           
                           }
                       if ($NbrMTotl>0) {
                           echo "Garçons :".  floor(100/$NbrMTotl*$NbrM)."%<br>";
                           
                           }
                    ?>
                </div>
            </div>
        </div>
       
  </section>
  <?php  include('footer.php')?>

    <script type="text/javascript" src="projet.js"></script>
   <script type="text/javascript" src="JQUERY.3.6.3.js"> </script>
    <!-- <script src="JQUERY.3.6.3.js"></script> -->
  <script src="anim.js"></script>

</body>  

<script>
    $(document).ready(function(){
            $('.buttonExam').click(function(){
                    
                $('.conForm').css('transform','scale(0)');
                $('.examForm').css('transform','scale(1)');
            });
            $('.buttonConc').click(function(){
            
                $('.conForm').css('transform','scale(1)');
                $('.examForm').css('transform','scale(0)');
            });

            $('.closePop__update').click(function(){
                
                $('.pup_update').removeClass('visible__pup');
                
                })
                $('.update').click(function(){
                
                $('.pup_update').addClass('visible__pup');
                
                })
        $('.examen').click(function(){
                
                $('#form_tmoney').css('transform','scale(0)');
                $('#form_moov').css('transform','scale(1)');
        });
        $('#concours').click(function(){
        
                $('#form_tmoney').css('transform','scale(1)');
                $('#form_moov').css('transform','scale(0)');
        });
        $('#CheckExam').click(function(event) {
                    event.preventDefault();
                
                    $.ajax({
                    url:'rsultatChecExam.php',
                    method:'POST',
                    data:$('#formExm').serialize(),
                    success:function(data) {
                        $('.message').html(data);
                    }

                });
            })

        $('#CheckConc').click(function(event) {
                    event.preventDefault();

                    $.ajax({
                    url:'rsultatChecConcours.php',
                    method:'POST',
                    data:$('#formConc').serialize(),
                    success:function(data) {
                        $('.message').html(data);
                    }

                });
            })
    })
        


 </script>