<div class="padding-md">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-title">
				<i class="fa fa-archive"></i> Actividad Usuarios
			</div>
			<div class="page-sub-header">
				<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=usuarios')?>">Usuarios</a>
			</div>
		</div>
	</div>		
<div class="row">
	<div class="col-lg-12">
		<div class="smart-widget  widget-dark-blue"  style="min-width: 694px;">
				
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<table class="table table-striped" id="dataTable">
											<thead>
												<tr>
													<th>FECHA</th>
													<th>USUARIO</th>
													<th>APLICACION</th>
													<th>ACTIVIDAD</th>
												</tr>
											</thead>
											<tbody>
										     <?php 
										     $consulta = negUsuario::getActividadUsuariosAll();
											 foreach ($consulta as $e){
											 	
											     echo '<tr>
														<td>'.$e['fecha_creacion_latam'].' / '.$e['hora_creacion'].'</td>
    													<td>'.$e['nombre'].'</td>
    													<td>'.$e['aplicacion'].'</td>
														<td>'.$e['actividad'].'</td>												
												      </tr>	';
											     
											 }
											 
											?>						
											</tbody>
										</table>
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
								
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					
				
					
				</div><!-- ./padding-md -->
		
	<script src='js/jquery.dataTables.min.js'></script>
	<script src='js/uncompressed/dataTables.bootstrap.js'></script>
		
	<script type="text/javascript">
	$(function()	{
		$("#dataTable").dataTable({
	        "oLanguage": {
	            "sLengthMenu": "Mostrando  _MENU_ registros",
	            "sSearch":      "Busqueda: ",
	            "sInfo": "Mostrando <strong>_START_ de _END_</strong> de _TOTAL_ Registros",
	            "oPaginate": {
	                "sFirst":    "Primero",
	                "sLast":     "Último",
	                "sNext":     "Siguiente",
	                "sPrevious": "Anterior"
	            }
	        }
	    });
	    
	});
		

		</script>