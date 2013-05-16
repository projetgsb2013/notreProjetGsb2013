<?php
echo"
<h3>Add a new excluding expenses</h3>
<form method='POST' action='indexEN.php?uc=gererFrais&action=validerCreationFrais'>
<table class='tabNonQuadrille'>
<tr>
	<td>Date (jj/mois/aaaa)</td>
	<td>
		<input  type='text' name=dateFrais  size='30' maxlength='45'>
	</td>
</tr>
<tr>
	<td>Description</td>
	<td>
		<input  type='text' name=description  size='50' maxlength='100'>
	</td>
</tr>
<tr>
	<td>Amount</td>
	<td>
		<input  type='text' name=montant  size='30' maxlength='45'>
	</td>
</tr>
<tr>
<td>Proof</td>
<td><input type='radio' name='justificatif' value='oui'> yes
</td>
<td>
<input type='radio' name='justificatif' value='non'> no
</td>

</tr>

</table>
<input type='submit' value='Valider' name='valider'>
         <input type='reset' value='Annuler' name='annuler'>

</form>
";
?>