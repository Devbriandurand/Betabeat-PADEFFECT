<?php ob_start(); ?>
<?php $title = 'titleContact' ?>
<h1 id="titleContact">CONTACT</h1>
		<section class="containContact">
			<form action="index.php?action=contact" method="POST"  class="contactForm">
	 					<table class="tableContact">
	 						<tr>
	 							<td>
	 								<label class="labelContact" for="nom">Nom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="nom" placeholder=" Saisissez votre nom" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label class="labelContact" for="prenom">Prénom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="prenom" placeholder=" Saisissez votre prenom" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label class="labelContact" for="email">E-mail</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="email" name="emailContact" placeholder=" Saisissez votre e-mail" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label class="labelContact" >Message</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td id="tdTextareaContact">
	 								<textarea id="textareaContact" placeholder=" Veuillez saisir votre message..." rows="15" required></textarea>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td align='center'>
	 								<input id="buttonContact" type="submit" name="buttonContact" value="Envoyer">
	 							</td>
	 						</tr>
						 </table>
				</form>
			</section>

<?php $content = ob_get_clean(); ?>
<?php require_once('view/frontend/template.php')  ?>

	</body>
</html>