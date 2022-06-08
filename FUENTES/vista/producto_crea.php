<input type="hidden" id="lista_url" value="../vista/cliente_lista.php?<?php echo util::encodeParamURL('pth=clientes')?>" />
				<div class="padding-md">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-title">
								<i class="fa fa-bookmark"></i> CREAR NUEVO PRODUCTO
							</div>
							<div class="page-sub-header">
								<a href="../vista/home.php">Inicio</a>/<a href="../vista/home.php?<?php echo util::encodeParamURL('pth=productos')?>">Lista Productos</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="smart-widget  widget-dark-blue">
								<div class="smart-widget-header">
									Completa el siguiente formulario para crear un nuevo producto
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-body clearfix">
										
										<form name="frm_1" id="frm_1"  class="form-horizontal form-label-left" action="vista/producto_crea.php" method="post"  enctype="multipart/form-data">
						  					<input type="hidden" id="acc" name="acc" value="CREARPRODUCTO" />
											<input type="hidden" id="descripcion" name="descripcion" value="" />
						  					    <div class="form-group">
						  					    	<label class="col-lg-1 control-label">Nombre del producto</label>
                                                    <div class="col-lg-11">
                                                        <input id="prod_nombre" name="prod_nombre" class="form-control" type="text" placeholder="Ingrese el nombre del producto">
                                                    </div><!-- /.col -->
						  					    </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Categoria del producto</label>
                                                    <div class="col-lg-11">
                                                    <select id="prod_categoria" name="prod_categoria" class="form-control">
                                                        <option value="">-- SELECCIONE --</option>
                                                        <option value="CUERDA">CUERDAS</option>
                                                        <option value="VIENTO">VIENTO</option>
                                                        <option value="PERCUCION">PERCUCION</option>
                                                    </select>
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Descripcion del Producto</label>
                                                    <div class="col-lg-11">
                                                        <input id="prod_desc" name="prod_desc" class="form-control" type="text" placeholder="Ingrese el detalle del producto">
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->
                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label">Tipo de producto</label>
                                                    <div class="col-lg-11">
                                                    <select id="prod_tipo" name="prod_tipo" class="form-control">
                                                        <option value="">-- SELECCIONE --</option>
                                                        <option value="ACUSTICO">ACUSTICO</option>
                                                        <option value="ELECTRICO">ELECTRICO</option>
                                                        <option value="ELECTROCUSTICO">ELECTROCUSTICO</option>
                                                    </select>
                                                    </div><!-- /.col -->
                                                </div><!-- /form-group -->				  					
						  					<hr />				                                                     
				                            </fieldset>
				                                <div class="row">
				                                    <div class="col-sm-12 ">
				                                        <a  class="btn btn-primary marginTB-xs" onclick="creaProducto();">Crear producto</a> 
				                                        <a  class="btn btn-danger marginTB-xs" href="../vista/home.php?<?php echo util::encodeParamURL('pth=productos')?>" >Cancelar</a>
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
function creaProducto()
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
    var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el producto, favor revisar.</strong><br /><br />';
    var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
    var contError = 0;

    prod_nombre = $("#prod_nombre").val();
    prod_categoria = $("#prod_categoria").val();
    prod_desc = $("#prod_desc").val();
    prod_tipo = $("#prod_tipo").val();

    descripcion = $("#descripcion").val();

    if (prod_nombre == "") {
        contError ++;
        htm += contError+"- Debe ingresar el Nombre del producto nuevo<br />"
    }
    if (prod_categoria == "") {
        contError ++;
        htm += contError+"- Debe seleccionar la categoria del nuevo producto<br />"
    }
    if (prod_desc == "") {
        contError ++;
        htm += contError+"- Debe ingresar la descripcion del nuevo producto <br />"
    }
    if (prod_tipo == "") {
        contError ++;
        htm += contError+"- Debe seleccionar el tipo del nuevo producto<br />"
    }

    if(contError > 0)
    {
        footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
        $("#"+idMTitulo).html('ERROR - Creación de un nuevo producto');
        $("#"+idMBody).html(htm);
        $("#"+idMFooter).html(footer);
        contError =0;
    }
    else{
        msjError = "No pudimos realizar lo solicitado";
        urlIn = "../controlador/productos.php";
        formalioID = "frm_1";
        srv="CREARPRODUCTO";
        var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
        htm='<img src="../images/ok.png" style="width: 45px;" /> El producto [ '+prod_nombre+' ] fue creado correctamente!';
        footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>'; // onclick="goto(\''+lista_url+'\');"
        
        $("#"+idMTitulo).html('Creación de un nuevo producto');
        $("#"+idMBody).html(htm);
        $("#"+idMFooter).html(footer);
    }

}


	
</script>