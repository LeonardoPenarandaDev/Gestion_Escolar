<?php

if($_SESSION["rol"] != "invitado"){

	echo '<script>

	window.locations = "inicio";
	</script>';

	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">

		<?php

		$exp = explode("/", $_GET["url"]);

		$columna = "libreta";
		$valor = $exp[2];

		$estudiante = UsuariosC::VerUsuariosC($columna, $valor);

		echo '<h1>Plan de Estudios del Estudiante: '.$estudiante["apellido"].' '.$estudiante["nombre"].' - Documento: '.$estudiante["libreta"].'</h1>';

		?>
		

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						<tr>
							
							<th>Código</th>
							<th>Nombre</th>
							<th>Grado</th>
							<th>Tipo</th>
							<th>Nota</th>

						</tr>
					</thead>

					<tbody>

						<?php

						$resultado = MateriasC::VerMateriasC();

						foreach ($resultado as $key => $value) {
							
							if($value["id_carrera"] == $estudiante["id_carrera"]){

								echo '<tr>
							
									<td>'.$value["codigo"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["grado"].'</td>
									<td>'.$value["tipo"].'</td>';


									$columna = "id_materia";
									$valor = $value["id"];

									$nota = MateriasC::VerNotasC($columna, $valor);

									foreach ($nota as $key => $N) {
										
										if($N["id_alumno"] == $estudiante["id"] && $N["id_materia"] == $value["id"]){

											if($N["estado"] == "Aprobado"){

												echo '<td class="bg-primary">

												'.$N["nota_final"].' '.$N["estado"].'

												</td>';

											}else if($N["estado"] == "Regular"){

												echo '<td class="bg-success">

												'.$N["nota_final"].' '.$N["estado"].'

												</td>';

											}else if($N["estado"] == "Desaprobado"){

												echo '<td class="bg-danger">

												'.$N["nota_final"].' '.$N["estado"].'

												</td>';

											}else{

												echo '<td class="">

												'.$N["estado"].'

												</td>';
												
											}

										}

									}


									echo '

									<td>
										
										<a href="https://app.emunah.edu.co/Nota-Materia/'.$exp[1].'/'.$exp[2].'/'.$value["id"].'">
											

										</a>

									</td>

								</tr>';

							}

							

						}

						?>
						
					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>