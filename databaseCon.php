
<?php  
try {
    $databaseCon=new PDO(
      'mysql:host=localhost;dbname=examen_resultat;charset=utf8',
      'root',
      '',
      [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
    );
  } catch (EXCEPTION $e) {
    die('error '. $e->getMessage());
  }
  


?>