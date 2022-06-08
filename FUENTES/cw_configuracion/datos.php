

				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
							<i class="fa fa-stack-overflow"></i> DATOS
							</div>
							<div class="page-sub-header">
								<a href="../home.php">Inicio</a>/<a href="../home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>">Administración de Datos</a>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="../home.php?<?php echo util::encodeParamURL('pth=crear_dato')?>"><i class="fa fa-plus"></i> Crear nuevo dato</a>
									
									
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
													<th>Dato</th>
													<th>Campo</th>
													<th>Usuario (Owner)</th>
													<th>Fecha Creación</th>
													<th>Fecha ultima modificación</th>													
													<th>Opciones</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											 $usuarios = negUsuario::getUsuarios();
											 $datos = negFlujo::getdatos();
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
    													<td>'.$f['dato'].'</td>
														<td>'.$f['campo'].'</td>
    													<td>'.$usuarioOWN.'</td>
    													<td>'.$f['fecha_creacion'].'</td>
    													<td>'.$f['fecha_actualizacion'].'</td>
    													<td style="text-align:center;"><a class="btn btn-info btn-sm" href="../home.php?'.util::encodeParamURL('pth=edita_dato&datoid='.$f['datoid']).'">Modificar</a></td>
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
		
	<script src='../js/jquery.dataTables.min.js'></script>
	<script src='../js/uncompressed/dataTables.bootstrap.js'></script>
		
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
			
			

		   
		});
	</script>

			
