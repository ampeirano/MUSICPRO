<input type="hidden" id="lista_url" value="../vista/cliente_lista.php?<?php echo util::encodeParamURL('pth=clientes')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO CLIENTE
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=clientes')?>">Lista Clientes</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo cliente
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="vista/cliente_crea.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="CREACLIENTE" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
						  					    <div class="form-group">
						  					    	<label class="col-lg-1 control-label">Nombre del cliente</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_nombre" name="cli_nombre" class="form-control" type="text" placeholder="Ingrese el nombre">
                                                    </div><!-- /.col -->
						  					    </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Apellido del cliente</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_apellido" name="cli_apellido" class="form-control" type="text" placeholder="Ingrese el apellido">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Rut del cliente</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_rut" name="cli_rut" class="form-control" type="text" placeholder="Ingrese el apellido">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Fecha Nacimiento</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_fecnac" name="cli_fecnac" class="form-control" type="text" placeholder="Ingrese el apellido">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Edad del cliente</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_edad" name="cli_edad" class="form-control" type="text" placeholder="Ingrese el apellido">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->	
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Email del cliente</label>
                                                    <div class="col-lg-11">
                                                        <input id="cli_correo" name="cli_correo" class="form-control" type="text" placeholder="Ingrese el apellido">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->					  					
						  					<hr />				                                                     
				                            </fieldset>
				                            
				                            
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaCliente();">Crear cliente</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="../vista/home.php?<?php echo util::encodeParamURL('pth=clientes')?>" >Cancelar</a>
				                                    </div>
				                                </div>
						  					
						  					
						  					
						  				</form>
										
									</div><!-- ./task-widget -->
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->							
						</div><!-- ./col -->
					</div><!-- ./FIN ROW  -->
				</div><!-- ./padding-md -->

<script src="../c_sistema_util/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
function creaCliente()
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
    var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el cliente, favor revisar.</strong><br /><br />';
    var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
    var contError = 0;

    cli_nombre = $("#cli_nombre").val();
    cli_apellido = $("#cli_apellido").val();
    cli_rut = $("#cli_rut").val();
    cli_fecnac = $("#cli_fecnac").val();
    cli_edad = $("#cli_edad").val();
    cli_correo = $("#cli_correo").val();

    descripcion = $("#descripcion").val();

    if (cli_nombre == "") {
        contError ++;
        htm += contError+"- Debe ingresar el Nombre del cliente nuevo<br />"
    }
    if (cli_rut == "") {
        contError ++;
        htm += contError+"- Debe ingresar el rut  del cliente nuevo<br />"
    }
    if (cli_fecnac == "") {
        contError ++;
        htm += contError+"- Debe ingresar la fecha de nacimiento  del cliente nuevo<br />"
    }
    if (cli_edad == "") {
        contError ++;
        htm += contError+"- Debe ingresar la edad  del cliente nuevo<br />"
    }
    if (cli_correo == "") {
        contError ++;
        htm += contError+"- Debe ingresar el correo  del cliente nuevo<br />"
    }

    if(contError > 0)
    {
        footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
        $("#"+idMTitulo).html('ERROR - Creación de un nuevo cliente');
        $("#"+idMBody).html(htm);
        $("#"+idMFooter).html(footer);
        contError =0;
    }
    else{
        msjError = "No pudimos realizar lo solicitado";
        urlIn = "../controlador/clientes.php";
        formalioID = "frm_1";
        srv="CREARCLIENTE";
        var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
        htm='<img src="../images/ok.png" style="width: 45px;" /> El cliente [ '+cli_nombre+' ] fue creado correctamente!';
        footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>'; // onclick="goto(\''+lista_url+'\');"
        
        $("#"+idMTitulo).html('Creación de un nuevo cliente');
        $("#"+idMBody).html(htm);
        $("#"+idMFooter).html(footer);
    }

}

//hola mundo
	
</script>
