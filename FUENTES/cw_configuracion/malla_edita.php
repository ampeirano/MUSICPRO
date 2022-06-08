<?php 
if(isset($_REQUEST["malla"]))
{
    $malla = $_REQUEST["malla"];
	$sistema = $_REQUEST["sistema"];
    $interfaz = $_REQUEST["interfaz"];
}
$componente = negMalla::getMallaDetalleById($malla,$sistema,$interfaz);

echo "usuario".$_SESSION["IGT-usuarioid"];



?>
<input type="hidden" id="lista_url" value="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> MODIFICAR MALLA
							</div>
							<div class="page-sub-header">
								<a href="home.php">Inicio</a>/<a href="home.php?<?php echo util::encodeParamURL('pth=adm_mallas')?>">Mallas</a>/<a href="home.php?<?php echo util::encodeParamURL('edita_malla&datoid='.$datoid)?>">Editar Malla</a>
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
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="controlador/malla.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="EDITAMALLA" />
											  <input type="hidden" id="malla_id" name="malla_id" value="<?php echo $malla?>" />
											  <input type="hidden" id="sistema_id" name="sistema_id" value="<?php echo $sistema ?>" />
											  <input type="hidden" id="interfaz_id" name="interfaz_id" value="<?php echo $interfaz?>" />
											  <input type="hidden" id="usuarioid" name="usuarioid" value="<?php echo $_SESSION["IGT-usuarioid"];?>" />
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Ciclo</label>
						  						<div class="col-lg-6">
												  <input id="ciclo" name="ciclo" class="form-control" type="text" value="<?php echo $componente[0]["ciclo"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											  <div class="form-group">
						  						<label class="col-lg-2 control-label">Origen</label>
						  						<div class="col-lg-6">
						  							<input id="origen" name="origen" class="form-control" type="text" value="<?php echo $componente[0]["origen"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->											
						  					<div class="form-group">
						  						<label class="col-lg-2 control-label">Sistema</label>
						  						<div class="col-lg-6">
						  							<input id="sistema" name="sistema" class="form-control" type="text" value="<?php echo $componente[0]["sistema"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
																						
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Malla</label>
						  						<div class="col-lg-6">
												  <input id="malla" name="malla" class="form-control" type="text" value="<?php echo $componente[0]["malla"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Tipo</label>
						  						<div class="col-lg-6">
												  <input id="tipo" name="tipo" class="form-control" type="text" value="<?php echo $componente[0]["tipo"]; ?>" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->												  
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Interfaz</label>
						  						<div class="col-lg-6">
						  							<input id="interfaz" name="interfaz" class="form-control"  value="<?php echo $componente[0]["interfaz"]; ?>" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Directorio de Entrada</label>
						  						<div class="col-lg-6">
						  							<input id="directorio_entrada" name="directorio_entrada" class="form-control" value="<?php echo $componente[0]["directorio_entrada"]; ?>"  type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Directorio de Destino</label>
						  						<div class="col-lg-6">
						  							<input id="directorio_destino" name="directorio_destino" class="form-control" value="<?php echo $componente[0]["directorio_destino"]; ?>"  type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
											<div class="form-group">
						  						<label class="col-lg-2 control-label">Link</label>
						  						<div class="col-lg-6">
						  							<input id="link" name="link" class="form-control" value="<?php echo $componente[0]["link_fd"]; ?>" type="text" placeholder="">
						  						</div><!-- /.col -->
						  					</div><!-- /form-group -->
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="modificaMalla()">Modificar malla</a> 
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

function modificaMalla()
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

	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos modificar la malla, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;

	var ciclo = $("#ciclo").val();
	var origen = $("#origen").val();
	var sistema = $("#sistema").val();
	var malla = $("#malla").val();
	var tipo = $("#tipo").val();
	var interfaz = $("#interfaz").val();
	var dir_entrada = $("#directorio_entrada").val();
	var dir_destino = $("#directorio_destino").val();
	var link = $("#link").val();
	
	

	
	if (ciclo == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (origen == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (sistema == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (malla == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (tipo == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (interfaz == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (dir_entrada == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (dir_destino == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	if (link == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de la malla<br />"
	}
	


	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Modificación de la malla');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/malla.php";
		formalioID = "frm_1";
		srv="EDITAMALLA";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> La malla ['+malla+'] fue modificado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" >Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación de la malla');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}
</script>