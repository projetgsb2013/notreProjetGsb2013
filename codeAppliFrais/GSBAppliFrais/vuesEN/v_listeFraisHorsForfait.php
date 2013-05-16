
<table class="listeLegere">
  	   <caption>Description of excluding reports
       </caption>
             <tr>
                <th class="date">Date</th>
				<th class="libelle">Description</th>  
                <th class="montant">Amount</th>  
                <th class="action">&nbsp;</th>              
             </tr>
          
    <?php    
	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$id = $unFraisHorsForfait['id'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="indexEN.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Are you sure ?');">Delete report</a></td>
             </tr>
	<?php		 
          
          }
	?>	  
                                          
    </table>
      <form action="indexEN.php?uc=gererFrais&action=validerCreationFrais" method="post">
      <div class="corpsForm">
         
          <fieldset>
            <legend>New excluding report
            </legend>
            <p>
              <label for="txtDateHF">Date (jj/mm/aaaa): </label>
              <input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
            </p>
            <p>
              <label for="txtLibelleHF">Description</label>
              <input type="text" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
            </p>
            <p>
              <label for="txtMontantHF">Amount : </label>
              <input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
            </p>
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ajouter" type="submit" value="Add" size="20" />
        <input id="effacer" type="reset" value="Reset" size="20" />
      </p> 
      </div>
        
      </form>
  </div>
  

