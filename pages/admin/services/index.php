<h2>Liste des services</h2>
<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom</td>
			<td>description</td>
			<td>action</td>
			
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("service")->all() as $service): ?>
	<tr>
		<td><?= $service->nom_du_service ?></td>
		<td><?= $service->description ?></td>
		<td>
			<form action="admin.php?p=services.delete" method="post">
				<input type="hidden" name="id" value="<?= $service->id; ?>">
				<input class="btn btn-danger" type="submit" name="delete">
			</form>
		</td>
	</tr>


<?php endforeach; ?>

</table>
