<?php 
$componenteid = "";
if(isset($_REQUEST["componenteid"]))
{
    $componenteid = $_REQUEST["componenteid"];
    
}
$componente = negComponente::getComponenteDetalle($componenteid);



?>

<input type="hidden" id="lista_url" value="../home.php?<?php echo util::encodeParamURL('pth=adm_componentes')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> MODIFICAR COMPONENTE
							</div>
							<div class="page-sub-header">
								<a href="../home.php">Inicio</a>/<a href="../home.php?<?php echo util::encodeParamURL('pth=adm_componentes')?>">Sistemas</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=edita_componente&componenteid='.$componenteid)?>">Modifica componente</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Detalle del componente

                                    <span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="EDITACOMPONENTE" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
                                            <input type="hidden" id="componenteid" name="componenteid" value="<?php echo $componenteid; ?>" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre del componente</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre" value="<?php echo $componente[0]["componente"]; ?>">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Detalle del componente</label>
						  						<div class="col-lg-11">
												  <textarea name="content" id="editor"><?php echo $componente[0]["detalle"]; ?>
													</textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->						  					
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaComponente();">Modificar componente</a> 
				                                        <a  class="btn btn-default marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_componentes')?>" >Volver</a>
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
									Asociar Sistema a la componente

                                    <span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_2" id="frm_2"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="SETCOMPOMENTEFLUJO" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
                                            <input type="hidden" id="componenteid" name="componenteid" value="<?php echo $componenteid; ?>" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Asociar Sistema disponible</label>
						  						<div class="col-lg-6">
						  						<select id="flujoid" name="flujoid" class="form-control">
												  <?php 
												 	$flujos = negFlujo::getFlujos();
													
													 $compflujo = negFlujo::getFlujoComponente();
													 
													 foreach($flujos as $f)
													 {
														$sh="si";
														 foreach($compflujo as $cf)
														 {
															 if($cf["flujoid"] == $f["flujoid"] && $cf["componenteid"] == $componenteid)
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
												  <a  class="btn btn-primary marginTB-xs" onclick="asociarCompnenteFlujo();">Asociar componente al Sistema</a> 
												  </div>
						  					</div><!-- /form-group -->

											  <hr />
											<div class="form-group">
												<div class="col-lg-12"><span style="font-size: 15px;"> <strong> Sistema asociados a la componente</strong></span>
												<br /><br />
												</div>
						  						<div class="col-lg-12">
						  						
												  <?php 
												 	$flujos = negFlujo::getFlujos();
													
													 $compflujo = negFlujo::getFlujoComponente();
													 
													 foreach($flujos as $f)
													 {
														$sh="si";
														 foreach($compflujo as $cf)
														 {
															 if($cf["flujoid"] == $f["flujoid"] && $cf["componenteid"] == $componenteid)
															 {
																 $sh="no";
															 }

														 }

														 if($sh=="no")
														 {
															echo '<div class="alert alert-info alert-custom alert-dismissible" role="alert">
															<button onclick="eliminaFlujoComponente('.$f["flujoid"].','.$componenteid.')" type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
				                                        <a  class="btn btn-default marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_componentes')?>" >Volver</a>
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