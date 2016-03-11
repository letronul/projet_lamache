<?php
// On écrase le tableau de session
session_start();
$_SESSION = array();

// On détruit la session
session_destroy();
// On redirige le visiteur vers la page d'accueil
header ('location: connexion.php'); 

?>