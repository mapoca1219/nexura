<html>
<body>
	<section class="container">
		<form action="?controller=employe&method=new" method="post">
			<div class="mb-3 row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="email" class="col-sm-2 col-form-label">Correo electronico</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sexo" value="Masculino" id="sexo">
						<label class="form-check-label" for="sexo">
							Masculino
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sexo" value="Femenino" id="sexo">
						<label class="form-check-label" for="sexo">
							Femenino
						</label>
					</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="area" class="col-sm-2 col-form-label">Area</label>
				<div class="col-sm-10">
					<select class="form-select" aria-label="Default select example" name="area_id" id="area_id">
						<option selected>Seleccione</option>
						<option value="1">Administrativa y Financiera</option>
						<option value="2">Ingeniería</option>
						<option value="3">Ventas</option>
						<option value="3">Compras</option>
						<option value="3">Desarrollo de Negocio</option>
						<option value="3">Proyectos</option>
						<option value="3">Servicios</option>
						<option value="3">Calidad</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="area" class="col-sm-2 col-form-label">Descripcion</label>
				<div class="col-sm-10">
					<div class="mb-3">
						<textarea class="form-control" id="descripcion" rows="3" placeholder="Descripcion de la experiencia del empleado" name="descripcion"></textarea>
					</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="boletin" class="col-sm-2 col-form-label">Boletin</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="boletin" name="boletin">
						<label class="form-check-label" for="flexCheckDefault">
							Deseo recibir boletin informativo
						</label>
					</div>
				</div>
			</div>

			<br>
			<div class="mb-3 row">
				<label for="roles" class="col-sm-2 col-form-label">Roles</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="Profesional_de_proyectos_desarrollador" name="">
						<label class="form-check-label" for="flexCheckDefault">
							Profesional de proyectos desarrollador
						</label>
					</div>
					
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="Gerente_estrategico" name="">
						<label class="form-check-label" for="flexCheckDefault">
							Gerente estrategico
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="auxiliar_administrativo" name="">
						<label class="form-check-label" for="flexCheckDefault">
							auxiliar administrativo
						</label>
					</div>
				</div>
				<br>
			</div>
			
			<div class="container">
				<button class="btn btn-success float-right" type="submit">Guardar</button>
			</div>
		</form>
	</section>
</body>

</html>