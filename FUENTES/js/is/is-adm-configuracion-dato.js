function creaDato()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el dato, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	nombre = $("#nombre").val();
	$("#descripcion").val(myEditor.getData());
	descripcion = $("#descripcion").val(); //query
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del dato<br />"
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
		$("#"+idMTitulo).html('ERROR - Creación de un nuevo dato');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/dato.php";
		formalioID = "frm_1";
		srv="CREADATO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> El dato ['+nombre+'] fue creado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Creación de un nuevo dato');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}
function modificaDato()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos modificar el dato, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	nombre = $("#nombre").val();
	$("#descripcion").val(myEditor.getData());
	descripcion = $("#descripcion").val(); //query
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del dato<br />"
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
		$("#"+idMTitulo).html('ERROR - Modificación del dato');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "controlador/dato.php";
		formalioID = "frm_1";
		srv="EDITADATO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        var lista_url = $("#lista_url").val();
		htm='<img src="images/ok.png" style="width: 45px;" /> El dato ['+nombre+'] fue modificado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" >Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación del dato');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
	
}

function asociarDatoFlujo()
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos asociar el flujo  al dato, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	
	msjError = "No pudimos realizar lo solicitado";
	urlIn = "controlador/dato.php";
	formalioID = "frm_2";
	srv="SETDATOFLUJO";
	var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
	
	htm='<img src="images/ok.png" style="width: 45px;" /> El dato fue asociado al flujo correctamente!';
		footer='<button type="button" class="btn btn-default" onclick="reloadLocal()" data-dismiss="modal" >Entendido</button>';
	
	$("#"+idMTitulo).html('Modificación de componentes');
	$("#"+idMBody).html(htm);
	$("#"+idMFooter).html(footer);
	

}

function eliminaFlujoDato(flujoid,datoid)
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
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos asociar el flujo  al dato, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	Salida = getDataJson("controlador/dato.php","acc=ELIMINADATOFLUJO&flujoid="+flujoid+"&datoid="+datoid,"ELIMINADATOFLUJO","No pudimos traer el tipo de Actividad","SI")
	
	
	htm='<img src="images/ok.png" style="width: 45px;" /> El dato fue eliminado del  flujo correctamente!';
		footer='<button type="button" class="btn btn-default" onclick="reloadLocal()" data-dismiss="modal" >Entendido</button>';
	
	$("#"+idMTitulo).html('Modificación de datos');
	$("#"+idMBody).html(htm);
	$("#"+idMFooter).html(footer);
	

}
