<?php 
if(isset($_POST['nom'],$_POST['prenom'],$_POST['date_de_naissance'],$_POST['adresse'],$_POST['code_postal'],$_POST['numero_de_telephone'],$_POST['services_id'])){
	App::getInstance()->getTable('Utilisateur')->create([
		"nom" => $_POST['nom'],
		"prenom" => $_POST['prenom'],
		"date_de_naissance" => $_POST['date_de_naissance'],
		"adresse" => $_POST['adresse'],
		"code_postal" => $_POST['code_postal'],
		"numero_de_telephone" => $_POST['numero_de_telephone'],
		"services_id" => $_POST['services_id']]);
	header('Location: admin.php?p=utilisateurs');
}
?>
<h2>add utilisateur</h2>

<form action="admin.php?p=utilisateurs.add" method="post">
	<input class="text-center" type="text" name="nom" placeholder="Nom">
	<input class="text-center" type="text" name="prenom" placeholder="Prénom">
	<input class="text-center" type="date" name="date_de_naissance" placeholder="Date de naissance">
	<input class="text-center" type="text" name="adresse" placeholder="Adresse complète">
	<input class="text-center" type="text" name="code_postal" placeholder="Code postal">
	<input class="text-center" type="text" name="numero_de_telephone" placeholder="Numéro de téléphone">
	<select name="services_id" class="form form-control">
	<?php foreach (App::getInstance()->getTable('Service')->all() as $service): ?>
		<option value="<?= $service->id; ?>">
			<?= $service->nom_du_service; ?>
		</option>
	<?php endforeach ?>
</select>
<input class="btn btn-success" type="submit" >
</form>

	