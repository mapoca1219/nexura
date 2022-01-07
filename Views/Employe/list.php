<main class="container">
	<section class="col-md-12 text-left">
		<h1>Listado de empleados</h1>
		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-success table-borderless table-hover" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>@ Email</th>
						<th>Sexo</th>
						<th>Area</th>
						<th>Boletin</th>
						<th>Descripcion</th>
						<th>Modificar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($employe as $empleado):?>
						<tr>
							<td><?php echo $empleado->id?></td>
							<td><?php echo $empleado->nombre?></td>
							<td><?php echo $empleado->email?></td>
							<td><?php echo $empleado->sexo?></td>
							<td><?php echo $empleado->area_id?></td>
							<td><?php echo $empleado->boletin?></td>
							<td><?php echo $empleado->descripcion?></td>
							<td><a href="?controller=employe&method=edit&id=<?php echo $empleado->id  ?>" class="btn btn-warning">Editar</a></td>
							<td><a href="?controller=employe&method=delete&id=<?php echo $empleado->id  ?>" class="btn btn-danger">Eliminar</a></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
