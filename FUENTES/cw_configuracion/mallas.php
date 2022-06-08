

				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
							<i class="fa fa-stack-overflow"></i> MALLAS
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>">Administración de Mallas</a>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="home.php?<?php echo util::encodeParamURL('pth=crear_malla')?>"><i class="fa fa-plus"></i> Crear nueva malla</a>
									
									
									<span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<table class="table table-striped" id="dataTable">
											<thead>
												<tr>
													<th>Ciclo</th>
													<th>Origen</th>
													<th>Sistema</th>
													<th>Malla</th>
													<th>Tipo</th>													
													<th>Interfaz</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											 $usuarios = negUsuario::getUsuarios();
											 $datos = negMalla::getMallaDetalle();
											 
											 foreach ($datos as $f){
												
												$usuarioOWN = "";
												foreach($usuarios as $u)
												{
													if($u['usuarioid'] == $f['usuarioid'])
													{
														$usuarioOWN = $u['nombre'];
													}
												}

												if($f['usuarioid'] == '1')
												{
													$usuarioOWN = "Administrador del sistema";
												}
													
											     echo '<tr>
    													<td>'.$f['ciclo'].'</td>
														<td>'.$f['origen'].'</td>
														<td>'.$f['sistema'].'</td>
														<td>'.$f['malla'].'</td>
														<td>'.$f['tipo'].'</td>
														<td>'.$f['interfaz'].'</td>
														<td style="text-align:center;"><a class="btn btn-info btn-sm" href="home.php?'.util::encodeParamURL('pth=edita_malla&malla=\''.$f['malla'].'\'&sistema=\''.$f['sistema'].'\'&interfaz=\''.$f['interfaz'].'\'').'">Modificar</a></td>
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
	
		$(function(){

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

			$("#dataTable_roles").dataTable({
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
		
		$(document).ready(function(){
			
			
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

			$("#dataTable_roles").dataTable({
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
