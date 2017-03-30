<?php
if(!isset($_POST['id'])) {
	header('location: index.php?p=utilisateurs');
	exit();
}
?>

<h2>Liste des utilisateurs par service</h2>

<form class="form-inline" action="index.php?p=utilisateurs.service" method="post">
	<select name="id" class="form form-control">
		<?php foreach (App::getInstance()->getTable('Service')->all() as $service): ?>
			<option value="<?= $service->id; ?>" <?= ($_POST['id']==$service->id)? 'selected="selected" ' : ''; ?>>
				<?= $service->nom_du_service; ?>
			</option>
		<?php endforeach ?>
	</select>	
	<input class="btn btn-primary form-control" type="submit" value="filtrer">
</form>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>Age</td>
			<td>Adresse</td>
			<td>Téléphone</td>
			<td>Services</td>
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("Utilisateur")->allByService($_POST['id']) as $utilisateur): ?>
	<tr>
		<td><?= $utilisateur->identite ?></td>
		<td><?= $utilisateur->age ?></td>
		<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
		<td><?= $utilisateur->numero_de_telephone ?></td>
		<td><?= $utilisateur->service ?></td>
	</tr>


<?php endforeach; ?>

</table>
