<?php 

$perfilid = $_REQUEST["perfilid"];
$rol= negUsuario::getrolXperfilid($perfilid);

?>
<input type="hidden" id="lista_usuarios_url" value="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> MODIFICAR ROL
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>">Usuarios</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=crea_rol')?>">Modificar Rol</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Puedes modificar el Rol
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="../controlador/usuario.php" method="post">
						  					<input type="hidden" id="acc" name="acc" value="CREAPERFIL" />
						  					<input type="hidden" id="perfilid" name="perfilid" value="<?php echo $perfilid;?>" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre del Rol</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre del rol" value="<?php echo $rol[0]["nombre_perfil"];?>">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Descirpción</label>
						  						<div class="col-lg-11">
						  							<textarea   id="descripcion" name="descripcion"  class="form-control" rows="4" ><?php echo $rol[0]["descripcion"];?></textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					
						  					<hr />
						  					<div class="page-title" style="font-size: 18px;">
												Aplicaciones asociadas al perfil
											</div>
						  					    <div class="form-group" style="padding-top: 15px;">
				                                                
				                                    <?php 
				                                    $apps=negUsuario::getApps();
				                                    $appRol=negUsuario::getAppsByPerfil($perfilid);
				                                    $lcont=0;
				                                    foreach ($apps as $a)
				                                    {
				                                    	// ACA VA LA VALIDACIÓN DE LOS PERFILES
				                                    	$lcont++;
				                                    	$label= "ch_lb_".$lcont;
				                                    	
				                                    	$sel = "";
				                                    	foreach ($appRol as $r)
				                                    	{
				                                    		if($r["aplicacionid"] == $a["aplicacionid"])
				                                    		{
				                                    			$sel = ' checked="checked" ';
				                                    		}
				                                    	}
				                                    	
				                                    	
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
				                                        <a  class="btn btn-primary marginTB-xs" onclick="editaRol();">Guardar Cambios</a>
				                                        <a  class="btn btn-danger marginTB-xs" href="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" >Cancelar</a> 
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

			
