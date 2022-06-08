<input type="hidden" id="lista_usuarios_url" value="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO USUARIO
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=usuarios')?>">Usuarios</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=crear_usuario')?>">Crear Usuario</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo usuario
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/usuario.php" method="post">
						  					<input type="hidden" id="acc" name="acc" value="CREAUSUARIO" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Email</label>
						  						<div class="col-lg-11">
						  							<input id="email_crea" name="email_crea" class="form-control" type="text" value="" placeholder="Ingrese el email">	
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Telefono</label>
						  						<div class="col-lg-11">
						  							<input id="telefono" name="telefono" class="form-control" type="text" placeholder="Ingrese el telefono">	
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->		
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Contraseña</label>
						  						<div class="col-lg-11">
						  							<input id="contraseña_crea" name="contraseña_crea" class="form-control"  value=""  type="password" placeholder="Ingrese la contraseña"><!-- <img style="float: right;height: 20px;margin-top: -25px;margin-right: 5px;cursor: pointer;" src="../images/ojo.png" onClick="verContraseña()"> -->
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->	
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Repetir Contraseña</label>
						  						<div class="col-lg-11">
						  							<input id="rcontraseña" name="rcontraseña" class="form-control" type="password" placeholder="Ingrese la contraseña nuevamente"><!-- <img style="float: right;height: 20px;margin-top: -25px;margin-right: 5px;cursor: pointer;" src="../images/ojo.png" > -->
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Rol Usuario</label>
						  						<div class="col-lg-11">
						  							<select id="rol" name="rol" class="form-control" >
						  								<option value="">--SELECCIONE--</option>
						  							<?php
						  							$roles = negUsuario::getRoles();
						  							foreach($roles as $r){
						  							    echo '<option value="'.$r['perfilid'].'">'.$r['nombre_perfil'].'</option>';
						  							}
						  							?>
						  							</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Estatus</label>
						  						<div class="col-lg-11">
						  							<select id="estatus" name="estatus" class="form-control" >
						  								<option value="ACTIVO">ACTIVO</option>
						  								<option value="INACTIVO">INACTIVO</option>
						  							</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->					  					
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaUsuario();">Crear Usuario</a> 
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