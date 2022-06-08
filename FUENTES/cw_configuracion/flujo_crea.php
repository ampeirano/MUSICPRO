<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO SISTEMA
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>">Sistemas</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=crear_flujo')?>">Crear Sistema</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo sistema
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/flujo.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="CREAFLUJO" />
											  <input type="hidden" id="descripcion" name="descripcion" value="" />
						  					  <div class="form-group">
						  						<label class="col-lg-1 control-label">Nombre del sistema</label>
						  						<div class="col-lg-11">
						  							<input id="nombre" name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<div class="form-group">
						  						<label class="col-lg-1 control-label">Detalle del sistema</label>
						  						<div class="col-lg-11">
												  <textarea name="content" id="editor">
													</textarea>
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
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
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaFlujo();">Crear Sistema</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_flujos')?>" >Cancelar</a>
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