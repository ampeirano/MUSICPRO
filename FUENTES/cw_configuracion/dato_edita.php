<?php 
$datoid = "";
if(isset($_REQUEST["datoid"]))
{
    $datoid = $_REQUEST["datoid"];
    
}
$componente = negDato::getDatoDetalle($datoid);

$tipoFuente = negFlujo::flujoGetDatoTipoFuenteID($datoid);																				
$amb_bd="";
$amb_ws="";
$amb_mq="";
$amb_rs="";
$amb_jm="";
$amb_ar="";
$amb_ot="";	
foreach($tipoFuente as $tf)
{
	

	switch ($tf["tipo_fuente"]) {
		case "Base de Datos":
			$amb_bd="checked";
		break;
		case "Web Services":
			$amb_ws="checked";
		break;
		case "Cola MQ":
			$amb_mq="checked";
		break;
		case "API rest":
			$amb_rs="checked";
		break;
		case "Cola JMS":
			$amb_jm="checked";
		break;
		case "Archivo":
			$amb_ar="checked";
		break;
		case "Otro":
			$amb_ot="checked";
		break;
	}

}

$amb_QA  = "";
$amb_QA2  = "";
$amb_BFIX  = "";
$amb_SIT  = "";

$ambiente = negFlujo::flujoGetDatoAmbienteID($datoid);
foreach($ambiente as $am)
{
	switch ($am["ambiente"]) {
		case "QA":
			$amb_QA="checked";
		break;
		case "QA2":
			$amb_QA2="checked";
		break;
		case "BFIX":
			$amb_BFIX="checked";
		break;
		case "SIT":
			$amb_SIT="checked";
		break;

	}
}


?>
<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> MODIFICAR DATO
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>">Sistemas</a>/<a href="home.php?<?php echo util::encodeParamURL('edita_dato&datoid='.$datoid)?>">Editar Dato</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para modificar el  dato
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="EDITADATO" />
											  <input type="hidden" id="datoid" name="datoid" value="<?php echo $datoid; ?>" />
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Nombre del dato</label>
						  						<div class="col-lg-10">
						  							<input id="nombre" name="nombre" class="form-control" type="text" value="<?php echo $componente[0]["dato"]; ?>" placeholder="Ingrese el nombre del dato">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->											
						  					<div class="form-group">
						  						<label class="col-lg-2 control-label">Nombre del campo</label>
						  						<div class="col-lg-10">
						  							<input id="campo" name="campo" class="form-control" type="text" value="<?php echo $componente[0]["campo"]; ?>" placeholder="Ingrese el nombre del campo">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Tipo de Fuente</label>
						  						<div class="col-lg-10">
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="basedatos_i" name="basedatos_i" value="" />
															<input type="checkbox" id="basedatos" class="checkbox-red" <?php echo $amb_bd; ?>>
															<label for="basedatos"></label>
														</div>
														<div class="inline-block vertical-top">
															Base de Datos
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="webservices_i" name="webservices_i" value="" />
															<input type="checkbox" id="webservices" class="checkbox-green" <?php echo $amb_ws; ?> >
															<label for="webservices"></label>
														</div>
														<div class="inline-block vertical-top">
														Web Services
														</div>
													</div>													
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="colamq_i" name="colamq_i" value="" />
															<input type="checkbox" id="colamq" class="checkbox-purple" <?php echo $amb_mq; ?>>
															<label for="colamq"></label>
														</div>
														<div class="inline-block vertical-top">
															Cola MQ
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="apirest_i" name="apirest_i" value="" />															
															<input type="checkbox" id="apirest" class="checkbox-blue" <?php echo $amb_rs; ?>>
															<label for="apirest"></label>
														</div>
														<div class="inline-block vertical-top">
															API rest
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="colajms_i" name="colajms_i" value="" />
															<input type="checkbox" id="colajms" class="checkbox-yellow" <?php echo $amb_jm; ?>>
															<label for="colajms"></label>
														</div>
														<div class="inline-block vertical-top">
															Cola JMS
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="archivo_i" name="archivo_i" value="" />
															<input type="checkbox" id="archivo" class="checkbox-grey" <?php echo $amb_ar; ?> >
															<label for="archivo"></label>
														</div>
														<div class="inline-block vertical-top">
															Archivo
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="otro_i" name="otro_i" value="" />
															<input type="checkbox" id="otro" class="checkbox-green" <?php echo $amb_ot; ?>>
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
						  							<input id="fuente" name="fuente" class="form-control" type="text" placeholder="" value="<?php echo $componente[0]["fuente"]; ?>" >
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servidor</label>
						  						<div class="col-lg-6">
						  							<input id="servidor" name="servidor" class="form-control" type="text" placeholder="" value="<?php echo $componente[0]["servidor"]; ?>" >
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->

											<div class="form-group">
						  						<label class="col-lg-2 control-label">Ambiente</label>
						  						<div class="col-lg-10">
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="QA_i" name="QA_i" value="" />
															<input type="checkbox" id="QA" class="checkbox-purple" <?php echo $amb_QA;  ?>>
															<label for="QA"></label>
														</div>
														<div class="inline-block vertical-top">
														QA
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="QA2_i" name="QA2_i" value="" />
															<input type="checkbox" id="QA2" class="checkbox-purple" <?php echo $amb_QA2;  ?>>
															<label for="QA2"></label>
														</div>
														<div class="inline-block vertical-top">
														QA2
														</div>
													</div>													
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="BFIX_i" name="BFIX_i" value="" />
															<input type="checkbox" id="BFIX" class="checkbox-purple" <?php echo $amb_BFIX;  ?>>
															<label for="BFIX"></label>
														</div>
														<div class="inline-block vertical-top">
														BFIX
														</div>
													</div>
													<div class="checkbox inline-block">
														<div class="custom-checkbox">
															<input type="hidden" id="SIT_i" name="SIT_i" value="" />
															<input type="checkbox" id="SIT" class="checkbox-purple" <?php echo $amb_SIT;  ?>>
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
												  <textarea name="content" id="editor"><?php echo $componente[0]["query"]; ?>
													</textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->	
											  
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servicio Proxy</label>
						  						<div class="col-lg-6">
						  							<input id="servicio_proxy" name="servicio_proxy" class="form-control"  value="<?php echo $componente[0]["serv_proxy"]; ?>" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Servicio CS</label>
						  						<div class="col-lg-6">
						  							<input id="servicio_cs" name="servicio_cs" class="form-control" value="<?php echo $componente[0]["serv_cs"]; ?>"  type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Ruta Archivo</label>
						  						<div class="col-lg-6">
						  							<input id="ruta_archivo" name="ruta_archivo" class="form-control" value="<?php echo $componente[0]["ruta_archivo"]; ?>"  type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Origen del dato</label>
						  						<div class="col-lg-6">
						  							<input id="origen_del_dato" name="origen_del_dato" class="form-control" value="<?php echo $componente[0]["origen_dato"]; ?>" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Frecuencia actualización</label>
						  						<div class="col-lg-6">
						  							<input id="frecuencia_actulaizacion" name="frecuencia_actulaizacion" class="form-control" value="<?php echo $componente[0]["frecuencia_actualizacion"]; ?>"  type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Dependencia</label>
						  						<div class="col-lg-6">
						  							<input id="dependencia" name="dependencia" class="form-control" type="text" value="<?php echo $componente[0]["dependencia"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Observaciones</label>
						  						<div class="col-lg-10">
						  							<textarea id="observaciones" name="observaciones" class="form-control"><?php echo $componente[0]["observaciones"]; ?></textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">modificable</label>
						  						<div class="col-lg-6">
						  							<input id="modificable" name="modificable" class="form-control" value="<?php echo $componente[0]["modificable"]; ?>" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Solo Lectura</label>
						  						<div class="col-lg-2">
													<select id="solo_lectura" name="solo_lectura" class="form-control">
														<option value="NO">NO</option>
														<option value="SI" <?php if($componente[0]["lectura"]=="SI"){echo "SELECTED";} ?> >SI</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Se puede virtualizar</label>
						  						<div class="col-lg-2">
													<select id="se_virtualiza" name="se_virtualiza" class="form-control">
														<option value="NO">NO</option>
														<option value="SI" <?php if($componente[0]["virtualizar"]=="SI"){echo "SELECTED";} ?> >SI</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Esta virtualizado</label>
												  <div class="col-lg-2">
													  <select id="esta_virtualizado" name="esta_virtualizado" class="form-control">
														<option value="NO">NO</option>
														<option value="SI" <?php if($componente[0]["esta_virtualizado"]=="SI"){echo "SELECTED";} ?> >SI</option>
													</select>
						  						</div><!-- /.col -->												
						  					</div><!-- /form-group -->

						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaDato()">Modifcar dato</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>" >Cancelar</a>
				                                    </div>
				                                </div>
						  					
						  					
						  					
						  				</form>
										
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
					


					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-purple">
								<div class="smart-widget-header">
									Asociar Sistema al dato

                                    <span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_2" id="frm_2"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="SETDATOFLUJO" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
                                            <input type="hidden" id="datoid" name="datoid" value="<?php echo $datoid; ?>" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Asociar Sistema disponible</label>
						  						<div class="col-lg-6">
						  						<select id="flujoid" name="flujoid" class="form-control">
												  <?php 
												 	$flujos = negFlujo::getFlujos();
													
													 $datosFlujo  = negFlujo::getFlujoDatos();
													 
													 foreach($flujos as $f)
													 {
														$sh="si";
														 foreach($datosFlujo as $cf)
														 {
															 if($cf["flujoid"] == $f["flujoid"] && $cf["datoid"] == $datoid)
															 {
																 $sh="no";
															 }

														 }

														 if($sh=="si")
														 {
															echo '<option value="'.$f["flujoid"].'">'.$f["flujo"].'</option>';

														 }
													 }
												 
												 ?>

												  </select>
						  						</div><!-- /.col -->
												  <div class="col-lg-12">
												  <a  class="btn btn-primary marginTB-xs" onclick="asociarDatoFlujo();">Asociar dato al sistema</a> 
												  </div>
						  					</div><!-- /form-group -->

											  <hr />
											<div class="form-group">
												<div class="col-lg-12"><span style="font-size: 15px;"> <strong> Sistema asociados al dato</strong></span>
												<br /><br />
												</div>
						  						<div class="col-lg-12">
						  						
												  <?php 
												 	$flujos = negFlujo::getFlujos();
													
													 $datosFlujo  = negFlujo::getFlujoDatos();
													 
													 foreach($flujos as $f)
													 {
														$sh="si";
														 foreach($datosFlujo as $cf)
														 {
															 if($cf["flujoid"] == $f["flujoid"] && $cf["datoid"] == $datoid)
															 {
																 $sh="no";
															 }

														 }

														 if($sh=="no")
														 {
															echo '<div class="alert alert-info alert-custom alert-dismissible" role="alert">
															<button onclick="eliminaFlujoDato('.$f["flujoid"].','.$datoid.')" type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
															 <i class="fa fa-exclamation-circle m-right-xs"></i><strong> '.$f["flujo"].'</strong>
															</div>';

														 }
													 }
												 
												 ?>

												
						  						</div><!-- /.col -->
												 
						  					</div><!-- /form-group -->
						  										  					
						  					<hr />	
											  
											  

				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-default marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_datos')?>" >Volver</a>
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