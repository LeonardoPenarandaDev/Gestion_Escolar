<?php

if($_SESSION["rol"] != "invitado"){

	echo '<script>

	window.location = "https://app.emunah.edu.co/inicio";
	</script>';

	return;

}

?>


<div class="content-wrapper">
	
	<section class="content-header">
		<h1>Visor de Usuarios y alumnos</h1>
	</section>

	<section class="content">
		
		<div class="box">
			

			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped X">
					
					<thead>
						<tr>
							
							<th>Apellido</th>
							<th>Nombres</th>
							<th>Carrera</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Rol</th>

						</tr>
					</thead>

					<tbody>

						<?php

						$columna = null;
						$valor = null;

						$resultado = UsuariosC::VerUsuariosC($columna, $valor);

						foreach ($resultado as $key => $value) {
						
							echo '<tr>
							
									<td>'.$value["apellido"].'</td>
									<td>'.$value["nombre"].'</td>';

									if($value["id_carrera"] == 0){

										echo '<td>Administrador</td>';

									}else{

									$columnaC = "id";
									$valorC = $value["id_carrera"];

									$carrera = CarrerasC::CarreraC($columnaC, $valorC);

									echo '<td>'.$carrera["nombre"].'</td>';

									}

									echo '<td>'.$value["libreta"].'</td>
									<td>'.$value["clave"].'</td>
									<td>'.$value["rol"].'</td>

									

								</tr>';

						}

						?>
						
					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>


