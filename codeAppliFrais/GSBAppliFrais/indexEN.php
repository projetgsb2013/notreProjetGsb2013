<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleursEN/c_connexionEN.php");break;
	}
	case 'gererFrais' :{
		include("controleursEN/c_gererFraisEN.php");break;
	}
	case 'etatFrais' :{
		include("controleursEN/c_etatFraisEN.php");break; 
	}
}
include("vuesEN/v_piedEN.php") ;
?>

