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

		$columna = "id";
		$valor = $exp[1];

		$carrera = CarrerasC::CarreraC($columna, $valor);

		echo '<h1>Ver Asignaturas de: '.$carrera["nombre"].'</h1>';

		?>
		

	</section>	


	<section class="content">

		<div class="box">
			
				
				<table class="table table-bordered table-hover table-striped X">
					
					<thead>
						<tr>
							
							<th>Código</th>
							<th>Nombre</th>
							<th>Grado</th>
							<th>Tipo</th>
							<th>Programa</th>

						</tr>
					</thead>

					<tbody>

						<?php

						$resultado = MateriasC::VerMateriasC();

						foreach ($resultado as $key => $value) {

							if($value["id_carrera"] == $exp[1]){

							echo '<tr>
							
									<td>'.$value["codigo"].'</td>
									<td>'.$value["nombre"].'</td>
									<td>'.$value["grado"].'</td>
									<td>'.$value["tipo"].'</td>';

									if($value["programa"] != ""){

										echo '<td><a href="'.$value["programa"].'" download="'.$value["nombre"].'">Descargar Programa</a></td>';

									}else{

										echo '<td>No tiene programa.</td>';

									}
									

									echo '<td>
										


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

