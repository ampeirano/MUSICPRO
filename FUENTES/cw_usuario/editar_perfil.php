<?php 
$usuarioid = $_SESSION["usuarioid"];

$usr = negUsuario::getUsuarioXid($usuarioid);
?>
<input type="hidden" id="lista_usuarios_url" value="home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" />
	<div class="padding-md">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<img src="images/profile.png" alt="" class="img-circle inline-block user-profile-pic" style="width: 64px;"> DATOS DE MI CUENTA 
				</div>
					
			</div>
		</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="smart-widget  widget-dark-blue">
				<div class="smart-widget-header">
					Estos son los datos de tu cuenta
				</div>
	<div class="smart-widget-inner">
		<div class="smart-widget-body clearfix">
			<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/usuario.php" method="post">
				<input type="hidden" id="acc" name="acc" value="MODIFICAAUSUARIO" />
				<input type="hidden" id="rol" name="rol" value="<?php echo $usr[0]['perfilid'];?>" />
				<input type="hidden" id="sendEmail" name="sendEmail" value="<?php echo $usr[0]['recibe_correo'];?>" />
				
					<div class="form-group">
						<label class="col-lg-1 control-label">Nombre</label>
                    		<div class="col-lg-11">
                    				<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre" value="<?php echo $usr[0]['nombre']?>">
                    		</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="col-lg-1 control-label">Email</label>
							<div class="col-lg-11">
									<input id="email" name="email" class="form-control" type="text" placeholder="Ingrese el email" value="<?php echo $usr[0]['mail']?>">
							</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
							<label class="col-lg-1 control-label">Telefono</label>
						<div class="col-lg-11">
									<input id="telefono" name="telefono" class="form-control" type="text" placeholder="Ingrese el telefono" value="<?php echo $usr[0]['telefono']?>">
						</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
						<label class="col-lg-1 control-label">Contraseña</label>
							<div class="col-lg-11">
									<input id="contraseña" name="contraseña" class="form-control" type="password" placeholder="Ingrese la contraseña" value="<?php echo $usr[0]['clave_mae']?>"><!-- <img style="float: right;height: 20px;margin-top: -25px;margin-right: 5px;cursor: pointer;" src="../images/ojo.png" onClick="verContraseña()"> -->
							</div><!-- /.col -->
					</div><!-- /form-group -->
					<div class="form-group">
							<label class="col-lg-1 control-label">Repetir Contraseña</label>
						<div class="col-lg-11">
									<input id="rcontraseña" name="rcontraseña" class="form-control" type="password" placeholder="Ingrese la contraseña nuevamente" value="<?php echo $usr[0]['clave_mae']?>"><!-- <img style="float: right;height: 20px;margin-top: -25px;margin-right: 5px;cursor: pointer;" src="../images/ojo.png" > -->
                        </div><!-- /.col -->
                        </div><!-- /form-group -->
                    <div class="form-group">
							<label class="col-lg-1 control-label">Rol Usuario</label>
					<div class="col-lg-11">
					<?php
                    $roles = negUsuario::getRoles();
                    foreach($roles as $r){
                    	
                    	
                    	if($r['perfilid'] == $usr[0]['perfilid'])
                    	{
                    		echo  '<span class="label label-default" style="padding:10px;"><strong>'.$r['nombre_perfil'].'</strong></span>'; 
                    	}
                    	
                    	
                      
                    }
                    ?>				
                    
                    	  						</div><!-- /.col -->
                    						  					</div><!-- /form-group -->                    						  					
                    						  					<div class="form-group">
                    						  						<label class="col-lg-1 control-label">Estatus</label>
                    						  						<div class="col-lg-11">
                    						  							<select id="estatus" name="estatus" class="form-control" >
                    						  								<?php                  						  								
                    						  								if($usr[0]['estado'] == "ACTIVO"){
                    						  								    echo '<option value="ACTIVO" selected="">ACTIVO</option>';
                    						  								    echo '<option value="INACTIVO" >INACTIVO</option>';
                    						  								}
                    						  								else{
                    						  								    echo '<option value="ACTIVO" >ACTIVO</option>';
                    						  								    echo '<option value="INACTIVO" selected="">INACTIVO</option>';
                    						  								}
                    						  								?>                 						  							
                    						  							</select>
                    						  						</div><!-- /.col -->
                    						  					</div><!-- /form-group -->                               
                    				                            </fieldset>
                    				                            
                    				                            <input hidden="" name="usuarioid" value="<?php echo $usr[0]['usuarioid'] ?>">
                    				                                <div class="row">
                    				                                    <div class="col-sm-12 ">
                    				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaUsuario();">Guardar Cambios</a>
                    				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=editar_mi_perfil')?>" >Cancelar</a> 
                    				                                    </div>
                    				                                </div>
                    						  				</form>                    										
                    									</div><!-- ./task-widget -->
                    								</div><!-- ./smart-widget-inner -->
                    							</div><!-- ./smart-widget -->							
                    						</div><!-- ./col -->
                    					</div><!-- ./FIN ROW  -->
</div><!-- ./padding-md -->