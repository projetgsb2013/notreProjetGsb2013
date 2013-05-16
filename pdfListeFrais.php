<?php
require('./codeAppliFrais/GSBAppliFrais/include/class.pdogsb.inc.php');
// connexion à la BD 
//connection au serveur 
$cnx = mysql_connect( "localhost", "root", "" ) ; 
//sélection de la base de données: 
$db = mysql_select_db( "gsb_frais" ) ; 
$sql="select fraisforfait.id as idfrais from lignefraisforfait";
		
$result= mysql_query($sql); 
if ($result) 
{ 
while($row= mysql_fetch_array($result)) 
{ 
echo $row['icone']; 
header('Content-type: application/pdf'); 
/* Tu affiches le contenu du champ */ 
echo($content); 
} 
} 
else{ 
echo mysql_error(); 
} 
?> 




?>
