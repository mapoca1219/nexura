<html>
<body>
	<section class="container">
		<form action="?controller=employe&method=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $data[0]->id?>">
			<div class="mb-3 row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" value=" <?php echo $data[0]->nombre?>">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="email" class="col-sm-2 col-form-label">Correo electronico</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email"value=" <?php echo $data[0]->email?>">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sexo" value="Masculino" id="sexo" <?php if($data[0]->sexo == "M") echo "checked" ?>>
						<label class="form-check-label" for="sexo">
							Masculino
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="sexo" value="Femenino" id="sexo" <?php if($data[0]->sexo == "F") echo "checked" ?> >
						<label class="form-check-label" for="sexo">
							Femenino
						</label>
					</div>
				</div>
			</div>

	
	
			<?php
			 $data[0]->area_id ?> 
			
			<div class="mb-3 row">
				<label for="area" class="col-sm-2 col-form-label">Area</label>
				<div class="col-sm-10">
					<select class="form-select" aria-label="Default select example" name="area_id" id="area_id" >
					<option selected>Seleccione</option>
						<?php foreach($dataAreas as $valor){ ?>

							<option value="<?php echo $valor->id ?>" <?php if ($valor->id == $data[0]->area_id)echo "selected" ?> > <?php echo $valor->nombre ?></option>
						
						<?php } ?> 
					</select>
				</div>
			</div>


			<div class="mb-3 row">
				<label for="area" class="col-sm-2 col-form-label">Descripcion</label>
				<div class="col-sm-10">
					<div class="mb-3">
						<textarea class="form-control" id="descripcion" rows="3" placeholder="Descripcion de la experiencia del empleado" name="descripcion" ><?php echo $data[0]->descripcion?></textarea>
					</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="boletin" class="col-sm-2 col-form-label">Boletin</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="boletin" name="boletin" <?php if($data[0]->boletin == 1) echo "checked"?>>
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
				<button class="btn btn-success float-right" type="submit">Actualizar</button>
			</div>
		</form>
	</section>
</body>

</html>