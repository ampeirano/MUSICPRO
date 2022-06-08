

				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-users"></i> USUARIOS
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>">Usuarios</a>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="../vista/home.php?<?php echo util::encodeParamURL('pth=crea_usuario')?>"><i class="fa fa-plus"></i> Crear nuevo usuario</a>
									
									
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
													<th>Nombre</th>
													<th>Correo</th>
													<th>Fecha Registro</th>
													<th>Rol de Usuario</th>
													<th>Estatus</th>
													<th>Opciones</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											 $usuarios = negUsuario::getUsuarios();
											 if(count($usuarios)>0)
											 {
												foreach ($usuarios as $u){
													echo '<tr>
															<td>'.$u['nombre'].'</td>
															<td>'.$u['mail'].'</td>
															<td>'.$u['fecha_creacion'].'</td>
															<td>'.$u['nombre_perfil'].'</td>
															<td>'.$u['estado'].'</td>
															<td style="text-align:center;"><a class="btn btn-info btn-sm" href="../vista/home.php?'.util::encodeParamURL('pth=editar_usuario&usuarioid='.$u['usuarioid']).'">Modificar</a></td>
														</tr>	';
												}
											}
											else
											{
												echo '<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td style="text-align:center;">&nbsp;</td>
														</tr>	';
											}
											 
											?>
																							
											</tbody>
										</table>
										
										<a class="btn btn-success" href="../vista/home.php?<?php echo util::encodeParamURL('pth=actividad_usuarios'); ?>">Actividad de los usuarios</a>
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					
					
				<?php  
				
					$valida =  util::validaFuncionApps(1);
					//VALIDA FUNCIONALIDAD INI
					if($valida == "SI")
					{
				
				?>	
				<!-- -------------- -->
				<!-- ZONA ROLES INI -->
				
				<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> ROLES
							</div>
							
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							
							<div class="smart-widget ">
								<div class="smart-widget-header">
									<a class="btn btn-primary" href="../vista/home.php?<?php echo util::encodeParamURL('pth=crea_rol')?>"><i class="fa fa-plus"></i> Crear nuevo rol</a>
									
									
									<span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<table class="table table-striped" id="dataTable_roles">
											<thead>
												<tr>
													<th>Nombre</th>
													<th>Descripción</th>
													<th style="text-align:center;">Opciones</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											
											$roles = negUsuario::getRoles();

											if(count($roles)>0)
											{
												foreach ($roles as $r)
												{
													
													echo '	<tr>
																<td>'.$r["nombre_perfil"].'</td>
																<td>'.$r["descripcion"].'</td>													
																<td style="text-align:center;"><a type="button" href="../vista/home.php?'.util::encodeParamURL("pth=edita_rol&perfilid=".$r["perfilid"]).'" class="btn btn-info btn-sm">Modificar</a></td>
															</tr>			';
													
												}
											}
											else
											{
												echo '<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>															
															<td style="text-align:center;">&nbsp;</td>
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
					
					
				<!-- ZONA ROLES FIN -->
				<!-- -------------- -->
				<?php 
					
					}
					//VALIDA FUNCIONALIDAD FIN
				
				?>
					
					
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

			
