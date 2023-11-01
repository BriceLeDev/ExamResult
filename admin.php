<!DOCTYPE html>
<html lang="french">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <title>Administrateur</title>
   
</head>
<body>
   <?php  include('header.php')?>
   <div class="cardAdmin">
          <button class="button examen"> examen</button>
          <button class=" button concours"> concours</button>
       
   </div>

   <section>
       

       <div class="formulaire">
       <div class="modal">
   
       <form class="form"  id="examenForm">
               <div class="separator">
                   <hr class="line">
                   <p>formulaire d examen</p>
                   <hr class="line">
               </div>
               <div class="message"></div>
               <div class="credit-card-info--form">
                   <div class="input_container">
                        <label for="password_field" class="input_label">session	</label>
                        <input id="password_field" class="input_field" type="text" name="sessionEX" title="Inpit title" placeholder="Entrer la session de l examen">
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Le nom de l examen</label>
                        <!-- <input id="password_field" class="input_field" type="text" name="nomEX" title="Inpit title" placeholder="Entrer Le nom de l examen"> -->
                        <select class="input_field" name="nomEX" >
                              <option>CEPD</option>
                              <option>BEPC</option>
                              <option>BACI</option>
                              <option>BACII</option>
                              <option>BTS</option>
                              
                         </select>
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Nom du candidat</label>
                        <input id="password_field" class="input_field" type="text" name="NomCAND" title="Inpit title" placeholder="Entrer le Nom">
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Prénom du candidat</label>
                        <input id="password_field" class="input_field" type="text" name="Prenom" title="Inpit title" placeholder="Entrer le Prénom ">
                   </div>
                   <div class="input_container">
                         <label for="password_field" class="input_label">Sexe</label>
                          <select class="input_field"  name="Sexe">
                              <option>Masculin</option>
                              <option>Féminin</option>
        
                         </select>
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Date de naissance</label>
                        <input id="password_field" class="input_field" type="text" name="DateEX" title="Inpit title" placeholder="AAAA/MM/JJ">
                   </div>
                    <div class="input_container">
                        <label for="password_field" class="input_label">lieu de naissance</label>
                        <input id="password_field" class="input_field" type="text" name="lieu" title="Inpit title" placeholder="lieu">
                   </div>

                    <div class="input_container">
                        <label for="password_field" class="input_label">Numéro de table</label>
                        <input id="password_field" class="input_field" type="number" name="NumeroTb" title="Inpit title" placeholder="0000 0000 ">
                   </div>
                    <div class="input_container">
                         <label for="password_field" class="input_label">Résultat / Moyenne</label>
                        <div class="split">
                            <!-- <input id="password_field" class="input_field" type="text" name="Resultat" title="Expiry Date" placeholder="Résultat"> -->
                            <select class="input_field"  name="Resultat">
                                   <option>Admis(e)</option>
                                   <option>Ajourné(e)</option>
                              </select>
                            <input id="password_field" class="input_field" type="number" name="Moyenne" title="CVV" placeholder="Moyenne">
                        </div>
                   </div>
                   <div class="input_container">
                         <label for="password_field" class="input_label">Mention</label>
                         <select class="input_field"  name="Mention">
                              <option>Excélent</option>
                              <option>Très-bien</option>
                              <option>Bien</option>
                              <option>Assez-bien</option>
                              <option>Passable</option>
                              <option>Admissible</option>
                              <option>Mauvais</option>
                              <option>Faible</option>
                         </select>
                   </div>
               </div>
                   <button class="examenCandSend">Ajouter au candidat d'un examen</button>
           </form>
           <form class="form" id="concoursForm">
                   <div class="separator">
                   <hr class="line">
                   <p>formulaire Concours</p>
                   <hr class="line">
               </div>
               <div class="message"></div>
               <div class="credit-card-info--form">
                   <div class="input_container">
                        <label for="password_field" class="input_label">session	</label>
                        <input id="password_field" class="input_field" type="text" name="sessionCON" title="Inpit title" placeholder="Entrer la session du concours">
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Le nom de l concours</label>
                        <!-- <input id="password_field" class="input_field" type="text" name="nom" title="Inpit title" placeholder="Entrer Le nom du concours"> -->
                        <select class="input_field" name="nomConc" >
                              <option value="ENAM">ENAM</option>
                              <option value="OTR">OTR</option>
                              <option value="POLICE">POLICE</option>
                              <option value="ISICA">ISICA</option>
                              <option value="ENSI">ENSI</option>
                              <option value="CIC">CIC</option>   
                         </select>
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Nom du candidat</label>
                        <input id="password_field" class="input_field" type="text" name="NomCAND" title="Inpit title" placeholder="Entrer le Nom">
                   </div>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Prénom du candidat</label>
                        <input id="password_field" class="input_field" type="text" name="Prenom" title="Inpit title" placeholder="Entrer le Prénom ">
                   </div>
                   <div class="input_container">
                         <label for="password_field" class="input_label"  >Sexe</label>
                          <select class="input_field" name="Sexe">
                              <option  value="Masculin">Masculin</option>
                              <option  value="Féminin">Féminin</option>
        
                         </select>
                   <div class="input_container">
                        <label for="password_field" class="input_label">Date de naissance</label>
                        <input id="password_field" class="input_field" type="text" name="DateNais" title="Inpit title" placeholder="AAAA/MM/JJ">
                   </div>
                    <div class="input_container">
                        <label for="password_field" class="input_label">lieu de naissance</label>
                        <input id="password_field" class="input_field" type="text" name="lieu" title="Inpit title" placeholder="lieu">
                   </div>

                    <div class="input_container">
                        <label for="password_field" class="input_label">Numéro de table</label>
                        <input id="password_field" class="input_field" type="number" name="NumeroTb" title="Inpit title" placeholder="0000 0000 ">
                   </div>
                    <div class="input_container">
                         <label for="password_field" class="input_label">Résultat / Moyenne</label>
                        <div class="split">
                            <!-- <input id="password_field" class="input_field" type="text" name="Resultat" title="Expiry Date" placeholder="Résultat"> -->
                            <select class="input_field"  name="Resultat">
                                   <option>Admis(e)</option>
                                   <option>Ajourné(e)</option>
                              </select>
                            <input id="password_field" class="input_field" type="number" name="Moyenne" title="CVV" placeholder="Moyenne">
                        </div>
                   </div>
                   <div class="input_container">
                   <label for="password_field" class="input_label" >Mention</label>
                         <select class="input_field"  name="Mention">
                              <option value="EXCELENT">EXCELENT</option>
                              <option value="TRES-BIEN">TRES-BIEN</option>
                              <option value="BIEN">BIEN</option>
                              <option value="ASSEZ-BIEN">ASSEZ-BIEN</option>
                              <option value="PASSABLE">PASSABLE</option>
                              <option value="ADMISSIBLE">ADMISSIBLE</option>
                              <option value="MAUVAIS">MAUVAIS</option>
                              <option value="FAIBLE">FAIBLE</option>
                         </select>
                   </div>
               </div>
                   <button class="concoursCandSend">Ajouter au candidat d'un concours</button>
           </form>
       </div>
 
       </div>
      
       
   </section>
   <script type="text/javascript" src="projet.js"></script>
   <script type="text/javascript" src="JQUERY.3.6.3.js"> </script>
</body>    

<script>
    $(document).ready(function(){

     $('.examen').click(function(){
            
            $('#concoursForm').css('transform','scale(0)');
            $('#examenForm').css('transform','scale(1)');
       });
       $('.concours').click(function(){
      
            $('#concoursForm').css('transform','scale(1)');
            $('#examenForm').css('transform','scale(0)');
       });
     $('.examenCandSend').click(function(event) {
                event.preventDefault();
                $.ajax({
                url:'ExamenCheck.php',
                method:'POST',
                data:$('#examenForm').serialize(),
                success:function(data) {
                    $('.message').html(data);
                }

            });
           })
     $('.concoursCandSend').click(function(event) {
                event.preventDefault();
                $.ajax({
                url:'ConcoursCheck.php',
                method:'POST',
                data:$('#concoursForm').serialize(),
                success:function(data) {
                    $('.message').html(data);
                }

            });
           })

          

    })

 </script>