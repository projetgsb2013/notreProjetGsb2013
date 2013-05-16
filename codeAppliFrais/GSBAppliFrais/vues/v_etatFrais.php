
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>                
    </p>
    <table class="listeLegere">
        <caption>Eléments forfaitisés </caption>
            <tr>
            <?php
            foreach ( $lesFraisForfait as $unFraisForfait ) {
                $libelle = $unFraisForfait['libelle'];
            ?>	
		<th> <?php echo $libelle?></th>
                <?php
            }
		?>
            </tr>
            <tr>
                <?php
                foreach (  $lesFraisForfait as $unFraisForfait  ){
                    $quantite = $unFraisForfait['quantite'];
                ?>
                    <td class="qteForfait"><?php echo $quantite?> </td>
                    <?php
                }
                    ?>
            </tr>
    </table>
    <table class="listeLegere">
        <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
        </caption>
    <tr>
        <th class="date">Date</th>
        <th class="libelle">Libellé</th>
        <th class='montant'>Montant</th>                
    </tr>
    <?php      
    foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ){
         $date = $unFraisHorsForfait['date'];
	 $libelle = $unFraisHorsForfait['libelle'];
	 $montant = $unFraisHorsForfait['montant'];
     ?>
     <tr>
         <td><?php echo $date ?></td>
         <td><?php echo $libelle ?></td>
         <td><?php echo $montant ?></td>
    </tr>
    <?php 
    }
    ?>
    </table>
  </div>
  </div>
 
 <?php 
 
 $content=' <html><head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />';
   
   $content.="</head><body><h3>Fiche de frais du mois '$numMois - $numAnnee'  :  </h3>';
  <div >
    <p>
        Etat :  $libEtat depuis le  $dateModif <br> Montant validé :  $montantValide
    </p> <h3>Eléments forfaitisés </h3>
    <table class='listeLegere'>
    
    <tr>";
        
        foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
                        $content=$content."<th> $libelle</th>";
		 
        }
	
		$content.="</tr><tr>";
        
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
                                $content.="<td class='qteForfait'>$quantite </td>";
		
          }
		
		$content.="</tr></table><h3>Descriptif des éléments hors forfait - $nbJustificatifs  justificatifs reçus -
       </h3><table class='listeLegere'>";
  	   $content.="
             <tr>
                <th class='date'>Date</th>
                <th class='libelle'>Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>";
        
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
                        
		
                $content.="<tr>
                <td>". $date."</td>
                <td>". $libelle."</td>
                <td>". $montant."</td>
             </tr>";
                
                  }
            $content.="</table></div></body></html>";
            
            
            
            
            
               
                  $_SESSION['content']=$content;
                  ?>













