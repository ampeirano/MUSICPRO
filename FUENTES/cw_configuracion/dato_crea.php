<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO DATO
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>">Sistemas</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=crear_dato')?>">Crear Dato</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo dato
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="CREADATO" />
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Nombre del dato</label>
						  						<div class="col-lg-10">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre del dato">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->											
						  					<div class="form-group">
						  						<label class="col-lg-2 control-label">Nombre del campo</label>
						  						<div class="col-lg-10">
						  							<input id="campo" name="campo" class="form-control" type="text" placeholder="Ingrese el nombre del campo">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Tipo de Fuente</label>
						  						<div class="col-lg-10">
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="basedatos_i" name="basedatos_i" value="" />
															<input type="checkbox" id="basedatos" class="checkbox-red" >
															<label for="basedatos"></label>
														</div>
														<div class="inline-block vertical-top">
															Base de Datos
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="webservices_i" name="webservices_i" value="" />
															<input type="checkbox" id="webservices" class="checkbox-green" >
															<label for="webservices"></label>
														</div>
														<div class="inline-block vertical-top">
														Web Services
														</div>
													</div>													
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="colamq_i" name="colamq_i" value="" />
															<input type="checkbox" id="colamq" class="checkbox-purple" >
															<label for="colamq"></label>
														</div>
														<div class="inline-block vertical-top">
															Cola MQ
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="apirest_i" name="apirest_i" value="" />
															<input type="checkbox" id="apirest" class="checkbox-blue" >
															<label for="apirest"></label>
														</div>
														<div class="inline-block vertical-top">
															API rest
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="colajms_i" name="colajms_i" value="" />
															<input type="checkbox" id="colajms" class="checkbox-yellow" >
															<label for="colajms"></label>
														</div>
														<div class="inline-block vertical-top">
															Cola JMS
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="archivo_i" name="archivo_i" value="" />
															<input type="checkbox" id="archivo" class="checkbox-grey" >
															<label for="archivo"></label>
														</div>
														<div class="inline-block vertical-top">
															Archivo
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="otro_i" name="otro_i" value="" />
															<input type="checkbox" id="otro" class="checkbox-green" >
															<label for="otro"></label>
														</div>
														<div class="inline-block vertical-top">
															Otro
														</div>
													</div>
												</div><!-- /.col -->
						  					</div><!-- /form-group -->											
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Fuente</label>
						  						<div class="col-lg-6">
						  							<input id="fuente" name="fuente" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servidor</label>
						  						<div class="col-lg-6">
						  							<input id="servidor" name="servidor" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->

											<div class="form-group">
						  						<label class="col-lg-2 control-label">Ambiente</label>
						  						<div class="col-lg-10">
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="QA_i" name="QA_i" value="" />
															<input type="checkbox" id="QA" class="checkbox-purple" >
															<label for="QA"></label>
														</div>
														<div class="inline-block vertical-top">
														QA
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="QA2_i" name="QA2_i" value="" />
															<input type="checkbox" id="QA2" class="checkbox-purple" >
															<label for="QA2"></label>
														</div>
														<div class="inline-block vertical-top">
														QA2
														</div>
													</div>													
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="BFIX_i" name="BFIX_i" value="" />
															<input type="checkbox" id="BFIX" class="checkbox-purple" >
															<label for="BFIX"></label>
														</div>
														<div class="inline-block vertical-top">
														BFIX
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="SIT_i" name="SIT_i" value="" />
															<input type="checkbox" id="SIT" class="checkbox-purple" >
															<label for="SIT"></label>
														</div>
														<div class="inline-block vertical-top">
														SIT
														</div>
													</div>
												</div><!-- /.col -->
						  					</div><!-- /form-group -->		

						  					<div class="form-group">
						  						<label class="col-lg-2 control-label">Query</label>
						  						<div class="col-lg-10">
												  <input type="hidden" id="descripcion" name="descripcion" value="" />
												  <textarea name="content" id="editor">
													</textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->	
											  
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servicio Proxy</label>
						  						<div class="col-lg-6">
						  							<input id="servicio_proxy" name="servicio_proxy" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servicio CS</label>
						  						<div class="col-lg-6">
						  							<input id="servicio_cs" name="servicio_cs" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Ruta Archivo</label>
						  						<div class="col-lg-6">
						  							<input id="ruta_archivo" name="ruta_archivo" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Origen del dato</label>
						  						<div class="col-lg-6">
						  							<input id="origen_del_dato" name="origen_del_dato" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Frecuencia actualización</label>
						  						<div class="col-lg-6">
						  							<input id="frecuencia_actulaizacion" name="frecuencia_actulaizacion" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Dependencia</label>
						  						<div class="col-lg-6">
						  							<input id="dependencia" name="dependencia" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Observaciones</label>
						  						<div class="col-lg-10">
						  							<textarea id="observaciones" name="observaciones" class="form-control"> </textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">modificable</label>
						  						<div class="col-lg-6">
						  							<input id="modificable" name="modificable" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Solo Lectura</label>
						  						<div class="col-lg-2">
													<select id="solo_lectura" name="solo_lectura" class="form-control">
														<option value="NO">NO</option>
														<option value="SI">SI</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Se puede virtualizar</label>
						  						<div class="col-lg-2">
													<select id="se_virtualiza" name="se_virtualiza" class="form-control">
														<option value="NO">NO</option>
														<option value="SI">SI</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Esta virtualizado</label>
						  						<div class="col-lg-2">
													  <select id="esta_virtualizado" name="esta_virtualizado" class="form-control">
														<option value="NO">NO</option>
														<option value="SI">SI</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->

						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaDato();">Crear dato</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>" >Cancelar</a>
				                                    </div>
				                                </div>
						  					
						  					
						  					
						  				</form>
										
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					
					
					
				
					
					
					
				</div><!-- ./padding-md -->

<script src="c_sistema_util/ckeditor/ckeditor.js"></script>

<script>
	 var myEditor;

	ClassicEditor
	.create( document.querySelector( '#editor' ), {        
        toolbar: [ 'heading','|','alignment', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ,'insertTable','undo','redo']
    } ).then( editor => {
            console.log( 'Editor was initialized', editor );
            myEditor = editor;
        } )
    .catch( error => {
        console.log( error );
    } );

	
</script>