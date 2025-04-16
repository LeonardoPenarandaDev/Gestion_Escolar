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
		
		<h1>Visor de Ciclos, Cursos y alumnos</h1>

	</section>

	<section class="content">
		
		<div class="box">



			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						
						<tr>
							
							<th>Código</th>
							<th>Nombre</th>
							<th>Acciones</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$resultado = CarrerasC::VerCarrerasC();

						foreach ($resultado as $key => $value) {
							
							echo '<tr>
							
									<td>'.$value["id"].'</td>
									<td>'.$value["nombre"].'</td>

									<td>
										
										<div class="btn-group">
											

											<a href="VerMaterias/'.$value["id"].'">
												<button class="btn btn-warning">Materias</button>
											</a>

											<a href="verEstudiantes/'.$value["id"].'">
												<button class="btn btn-primary">Estudiantes</button>
											</a>

										</div>

									</td>

								</tr>';

						}

						?>
						
						

					</tbody>

				</table>

			</div>


		</div>

	</section>

</div>
