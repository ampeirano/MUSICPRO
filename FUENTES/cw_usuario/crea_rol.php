
<input type="hidden" id="lista_usuarios_url" value="home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO ROL
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=usuarios')?>">Usuarios</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=crea_rol')?>">Crear Rol</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo rol
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/usuario.php" method="post">
						  					<input type="hidden" id="acc" name="acc" value="CREAPERFIL" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre del Rol</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre del nuevo rol">
						  							
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Descirpción</label>
						  						<div class="col-lg-11">
						  							<textarea   id="descripcion" name="descripcion"  class="form-control" rows="4" placeholder="Puede indicar una descripción del rol"></textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					
						  					<hr />
						  					<div class="page-title" style="font-size: 18px;">
												Aplicaciones asociadas al perfil
											</div>
						  					    <div class="form-group" style="padding-top: 15px;">
				                                                
				                                    <?php 
				                                    $apps=negUsuario::getApps();
				                                    $lcont=0;
				                                    foreach ($apps as $a)
				                                    {
				                                    	// ACA VA LA VALIDACIÓN DE LOS PERFILES
				                                    	$lcont++;
				                                    	$label= "ch_lb_".$lcont;
				                                    	
				                                    	$sel = "";
				                                    	
				                                    	
				                                    	echo ' <div class="col-md-6" > 

																	<div class="custom-checkbox">
																		<input type="checkbox" name="apps[]" id="'.$label.'" value="'.$a["aplicacionid"].'"  '.$sel.'>
																		<label  for="'.$label.'"></label>
																	</div>
																	<strong>'.$a["aplicacionidtxt"].':</strong> '.$a["descripcion_aplicacion"].'
																	<br /><hr />
																</div>
																';
				                                    	
				                                    }
				                                    
				                                    ?>                    
				                                </div>
				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaRol();">Crear nuevo rol</a>
				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" >Cancelar</a> 
				                                    </div>
				                                </div>
						  					
						  					
						  					
						  				</form>
										
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					
					
					
				
					
					
					
				</div><!-- ./padding-md -->
		
	<script src='../js/jquery.dataTables.min.js'></script>
	<script src='../js/uncompressed/dataTables.bootstrap.js'></script>
		
	<script type="text/javascript">
	$(function()	{
	    $('#dataTable').dataTable();
	});
		

		</script>

			
