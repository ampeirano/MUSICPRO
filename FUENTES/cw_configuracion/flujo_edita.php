<?php 
$flujoid = "";
if(isset($_REQUEST["flujoid"]))
{
    $flujoid = $_REQUEST["flujoid"];
    
}
$flujo = negFlujo::getFlujoDetail($flujoid);



?>

<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> MODIFICAR SISTEMA
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>">Fujos</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=edita_flujo&flujoid='.$flujoid)?>">Modifica Sistema</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Detalle del sistema

                                    <span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="EDITAFLUJO" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
                                            <input type="hidden" id="flujoid" name="flujoid" value="<?php echo $flujoid; ?>" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre del sistema</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre" value="<?php echo $flujo[0]["flujo"]; ?>">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Detalle del sistema</label>
						  						<div class="col-lg-11">
												  <textarea name="content" id="editor"><?php echo $flujo[0]["resumen"]; ?>
													</textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-1 control-label">Estado del sistema</label>
						  						<div class="col-lg-2">
												  <select id="estado" name="estado" class="form-control">
													<option value="CREADO">CREADO</option>
													<option value="PUBLICADO" <?php if($flujo[0]["estado"]=="PUBLICADO"){echo "SELECTED";} ?>>PUBLICADO</option>
													<option value="ELIMINADO" <?php if($flujo[0]["estado"]=="ELIMINADO"){echo "SELECTED";} ?>>ELIMINADO</option>
													</select>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->

						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Archivo</label>
						  						<div class="col-lg-11">

                                                  <?php 
                                                  
                                                  if($flujo[0]["url_documentos"] == '')
                                                  {
                                                      echo '<div class="alert alert-danger alert-custom alert-dismissible" role="alert">                                                      
                                                       <i class="fa fa-times-circle m-right-xs"></i> <strong>No hay archivo!</strong> El sistema no tiene archivo asociado.
                                                        </div>';
                                                  }else
                                                  {
                                                        echo '<button onclick="popup(\''.$flujo[0]["url_documentos"].'\',800,500)" type="button" class="btn btn-info">Ver Documento(s)</button></a>';
                                                  }
                                                  
                                                  ?>
                                                  
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->		
						  					
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaFlujo();">Modificar Sistema</a> 
				                                        <a  class="btn btn-default marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>" >Volver</a>
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
									Cambiar/agregar archivo al sistema

                                    <span class="smart-widget-option">
												
					                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
					                                <i class="fa fa-chevron-up"></i>
					                            </a>
					                            
					                            
					                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_2" id="frm_2"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="EDITAFILEFLUJO" />
                                              <input type="hidden" id="flujoid" name="flujoid" value="<?php echo $flujoid; ?>" />
											  <input type="hidden" id="descripcion" name="descripcion" value="" />
						  					 
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Archivo</label>
						  						<div class="col-lg-11">
						  							<input id="documento" name="documento"  type="file" >	
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->			
						  					
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaFileFLujo();">Cambia/Agrega Archivo al sistema</a> 
				                                        <a  class="btn btn-default marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>" >Volver</a>
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