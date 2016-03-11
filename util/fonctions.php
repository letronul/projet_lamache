
<?php
session_start();
include ('connexion_bdd.php');

//Fonction connexion d'un utilisateur
 function gestion_session(){


	if ((!isset($_SESSION['login'])))
	{
		$info = "select * from user where login='".$_POST['login']."'";
		$reqinfo = mysql_query($info);
		$datainfo = mysql_fetch_assoc($reqinfo);	
	 
		if($datainfo['password'] != $_POST['password'] OR $datainfo['login'] != $_POST['login'] OR (empty ($datainfo['login'])) OR (empty ($datainfo['password']))  ) 
		{
			
			header ('location: connexion.php') ;
		}
		else
		{
			 $_SESSION['nom'] = $datainfo['nom'];
			 $_SESSION['prenom'] = $datainfo['prenom'];
			 $_SESSION['login'] = $datainfo['login'];
			 $_SESSION['privilege'] = $datainfo['privilege'];
		}
	 }
	 
}
 ?>