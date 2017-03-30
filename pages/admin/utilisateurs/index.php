<h2>Liste des utilisateurs</h2>
<p><a href="admin.php?p=utilisateurs.add">Ajouter un utilisateur</a></p>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>âge</td>
			<td>adresse</td>
			<td>numero de téléphone</td>
			<td>services</td>
			<td>action</td>
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("Utilisateur")->allwithService() as $utilisateur): ?>
	<tr>
		<td><?= $utilisateur->identite ?></td>
		<td><?= $utilisateur->age ?></td>
		<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
		<td><?= $utilisateur->numero_de_telephone ?></td>
		<td><?= $utilisateur->service ?></td>
		<td><form action="admin.php?p=utilisateurs.delete" method="post">
				<input type="hidden" name="id" value="<?= $utilisateur->id; ?>">
				<input class="btn btn-danger" type="submit" name="delete">
			</form>
	</tr>


<?php endforeach; ?>

</table>
