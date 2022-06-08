function creaFlujo()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el flujo, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	nombre = $("#nombre").val();
	$("#descripcion").val(myEditor.getData());
	descripcion = $("#descripcion").val();
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del flujo<br />"
	}
	if (descripcion == "") {
		contError ++;
		htm += contError+"- Debe ingresar la descripción  del flujo<br />"
	}
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Creación de un nuevo Flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/flujo.php";
		formalioID = "frm_1";
		srv="CREAFLUJO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> El Flujo ['+nombre+'] fue creado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Creación de un nuevo flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}

function modificaFlujo()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos modificar el flujo, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	nombre = $("#nombre").val();
	$("#descripcion").val(myEditor.getData());
	descripcion = $("#descripcion").val();
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del flujo<br />"
	}
	if (descripcion == "") {
		contError ++;
		htm += contError+"- Debe ingresar la descripción  del flujo<br />"
	}
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Modificación de Flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/flujo.php";
		formalioID = "frm_1";
		srv="EDITAFLUJO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> El Flujo ['+nombre+'] fue editado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" >Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación de Flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}


function modificaFileFLujo()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos modificar el archivo del flujo, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Modificación de Flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/flujo.php";
		formalioID = "frm_2";
		srv="EDITAFILEFLUJO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
		htm='<img src="images/ok.png" style="width: 45px;" /> El archivo del Flujo fue editado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadLocal();" >Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación del archivo del Flujo');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}

