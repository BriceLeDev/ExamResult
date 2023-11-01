<?php 
require_once('databaseCon.php');
session_start();
$_SESSION=array();
    session_destroy();
    echo "<script>location.href='home.php'</script>"; 

?>