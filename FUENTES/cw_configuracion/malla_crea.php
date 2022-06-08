<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO MALLA
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>">Mallas</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=crear_malla')?>">Crear Malla</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear una nueva malla
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/malla.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="CREAMALLA" />
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Ciclo</label>
						  						<div class="col-lg-6">
												  <input id="ciclo" name="ciclo" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Origen</label>
						  						<div class="col-lg-6">
						  							<input id="origen" name="origen" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->											
						  					<div class="form-group">
						  						<label class="col-lg-2 control-label">Sistema</label>
						  						<div class="col-lg-6">
						  							<input id="sistema" name="sistema" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<!-- /form-group -->											
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Malla</label>
						  						<div class="col-lg-6">
						  							<input id="malla" name="malla" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Tipo</label>
						  						<div class="col-lg-6">
						  							<input id="tipo" name="tipo" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->													  
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Interfaz</label>
						  						<div class="col-lg-6">
						  							<input id="interfaz" name="interfaz" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Directorio de Entrada</label>
						  						<div class="col-lg-6">
						  							<input id="directorio_entrada" name="directorio_entrada" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Directorio de Destino</label>
						  						<div class="col-lg-6">
						  							<input id="directorio_destino" name="directorio_destino" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Link</label>
						  						<div class="col-lg-6">
						  							<input id="link_fd" name="link_fd" class="form-control" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaMalla();">Crear malla</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>" >Cancelar</a>
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
	/*var myEditor;

	ClassicEditor
	.create( document.querySelector( '#editor' ), {        
        toolbar: [ 'heading','|','alignment', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ,'insertTable','undo','redo']
    } ).then( editor => {
            console.log( 'Editor was initialized', editor );
            myEditor = editor;
        } )
    .catch( error => {
        console.log( error );
    } );*/

	function creaMalla()
{	
	$("#btn_modal_close_adm").fadeOut("fast");

	var tipo = 1;
	var idM = '';
	if(tipo==1){idM = 'n';}if(tipo==2){idM = 'l';}if(tipo==3){idM = 's';}
	var idMTitulo 	= idM+'mod-titulo';
	var idMBody 	= idM+'mod-body';
	var idMFooter 	= idM+'mod-footer';
	//abro modal
	
	openModal(tipo);
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear la malla, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	nombre = $("#nombre").val();

	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}

	if($('#basedatos').is(":checked") == true)
	{
		$('#basedatos_i').val("SI");
	}else
	{
		$('#basedatos_i').val("NO");
	}

	if($('#webservices').is(":checked") == true)
	{
		$('#webservices_i').val("SI");
	}else
	{
		$('#webservices_i').val("NO");
	}

	if($('#colamq').is(":checked") == true)
	{
		$('#colamq_i').val("SI");
	}else
	{
		$('#colamq_i').val("NO");
	}

	if($('#apirest').is(":checked") == true)
	{
		$('#apirest_i').val("SI");
	}else
	{
		$('#apirest_i').val("NO");
	}

	if($('#colajms').is(":checked") == true)
	{
		$('#colajms_i').val("SI");
	}else
	{
		$('#colajms_i').val("NO");
	}

	if($('#archivo').is(":checked") == true)
	{
		$('#archivo_i').val("SI");
	}else
	{
		$('#archivo_i').val("NO");
	}

	if($('#otro').is(":checked") == true)
	{
		$('#otro_i').val("SI");
	}else
	{
		$('#otro_i').val("NO");
	}


	if($('#QA').is(":checked") == true)
	{
		$('#QA_i').val("SI");
	}else
	{
		$('#QA_i').val("NO");
	}

	if($('#QA2').is(":checked") == true)
	{
		$('#QA2_i').val("SI");
	}else
	{
		$('#QA2_i').val("NO");
	}

	if($('#BFIX').is(":checked") == true)
	{
		$('#BFIX_i').val("SI");
	}else
	{
		$('#BFIX_i').val("NO");
	}

	if($('#SIT').is(":checked") == true)
	{
		$('#SIT_i').val("SI");
	}else
	{
		$('#SIT_i').val("NO");
	}


	

	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Creación de un nueva malla');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/malla.php";
		formalioID = "frm_1";
		srv="CREAMALLA";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> La malla ['+nombre+'] fue creado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Creación de un nuevo malla');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}
</script>