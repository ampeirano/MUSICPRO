function editaRol()
{	
	//PARA ABRIR UN MODAL SE DEBE IMPLEMENTAR ESTA LOGICA SIEMPRE
	var tipo = 1;
	var idM = '';
	if(tipo==1){idM = 'n';}if(tipo==2){idM = 'l';}if(tipo==3){idM = 's';}
	var idMTitulo 	= idM+'mod-titulo';
	var idMBody 	= idM+'mod-body';
	var idMFooter 	= idM+'mod-footer';
	//abro modal
	openModal(tipo);
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos modificar el nuevo rol, favor revisa lo siguiente.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	nombre = $("#nombre").val();
	descripcion = $("#descripcion").val();
	
	
	if(nombre  == "")
	{
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del rol<br />"
	}
	
	htm += '</div>'
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Creación de un nuevo rol');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
		
	}
	else
	{	
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "../controlador/usuario.php";
		formalioID = "frm_1";
		srv="EDITAPERFIL";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        //location.href = urlEnv;
		var lista_usuarios_url = $("#lista_usuarios_url").val();
		htm='<img src="../images/ok.png" style="width: 45px;" /> El rol fue modificado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_usuarios_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación del rol');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        
	}
}
function creaRol()
{	
	//PARA ABRIR UN MODAL SE DEBE IMPLEMENTAR ESTA LOGICA SIEMPRE
	var tipo = 1;
	var idM = '';
	if(tipo==1){idM = 'n';}if(tipo==2){idM = 'l';}if(tipo==3){idM = 's';}
	var idMTitulo 	= idM+'mod-titulo';
	var idMBody 	= idM+'mod-body';
	var idMFooter 	= idM+'mod-footer';
	//abro modal
	openModal(tipo);
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el nuevo rol, favor revisa lo siguiente.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	nombre = $("#nombre").val();
	descripcion = $("#descripcion").val();
	
	
	if(nombre  == "")
	{
		contError ++;
		htm += contError+"- Debe ingresar el Nombre del nuevo rol<br />"
	}
	
	htm += '</div>'
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Creación de un nuevo rol');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
		
	}
	else
	{	
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "../controlador/usuario.php";
		formalioID = "frm_1";
		srv="CREAPERFIL";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        //location.href = urlEnv;
		var lista_usuarios_url = $("#lista_usuarios_url").val();
		htm='<img src="../images/ok.png" style="width: 45px;" /> El rol fue creado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_usuarios_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Creación de un nuevo rol');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        
	}
}

function creaUsuario()
{	
	//PARA ABRIR UN MODAL SE DEBE IMPLEMENTAR ESTA LOGICA SIEMPRE
	var tipo = 1;
	var idM = '';
	if(tipo==1){idM = 'n';}if(tipo==2){idM = 'l';}if(tipo==3){idM = 's';}
	var idMTitulo 	= idM+'mod-titulo';
	var idMBody 	= idM+'mod-body';
	var idMFooter 	= idM+'mod-footer';
	//abro modal
	
	openModal(tipo);
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el usuario, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	nombre = $("#nombre").val();
	email = $("#email_crea").val();
	contraseña = $("#contraseña_crea").val();
	repeat_contraseña = $("#rcontraseña").val();
	rol = $("#rol").val();	
	estatus = $('#estatus').val();
	telefono = $('#telefono').val();
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de usuario<br />"
	}
	if (email == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Email<br />"
	}
	/*else if(!validarEmail($("#email").val())){
		contError ++;
		htm += contError+"- Ingrese un correo valido<br />"
	}*/
	if (contraseña == "") {
		contError ++;
		htm += contError+"- Debe ingresar la contraseña<br />"
	}
	if (repeat_contraseña == "") {
		contError ++;
		htm += contError+"- Debe ingresar la contraseña de repetición<br />"
	}
	else if (contraseña != repeat_contraseña) {
		contError ++;
		htm += contError+"- Las contraseñas no coinciden, favor revisar<br />"
	}
	if (rol=="") {
		contError ++;
		htm += contError+"- Debe seleccionar un rol<br />"
	}
	if (telefono = "") {
		contError ++;
		htm += contError+"- Debe ingresar su numero telefonico<br />"
	}
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Creación de un nuevo Usuario');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "../controlador/usuario.php";
		formalioID = "frm_1";
		srv="CREAUSUARIO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        //location.href = urlEnv;
		var lista_usuarios_url = $("#lista_usuarios_url").val();
		htm='<img src="../images/ok.png" style="width: 45px;" /> El Usuario fue creado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="goto(\''+lista_usuarios_url+'\');">Entendido</button>';
        
        $("#"+idMTitulo).html('Creación de un nuevo usuario');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
}

function modificaUsuario(){
	//PARA ABRIR UN MODAL SE DEBE IMPLEMENTAR ESTA LOGICA SIEMPRE
	var tipo = 1;
	var idM = '';
	if(tipo==1){idM = 'n';}if(tipo==2){idM = 'l';}if(tipo==3){idM = 's';}
	var idMTitulo 	= idM+'mod-titulo';
	var idMBody 	= idM+'mod-body';
	var idMFooter 	= idM+'mod-footer';
	//abro modal
	
	openModal(tipo);
	var htm = '	<div style=\"width:100%; text-align: left\"> <strong> ERROR - No podemos crear el usuario, favor revisar.</strong><br /><br />';
	var footer='<button type="button" class="btn btn-default marginTB-xs"><i class="fa fa-spinner fa-spin m-right-xs"></i>Trabajando...</button>';
	var contError = 0;
	
	nombre = $("#nombre").val();
	email = $("#email_crea").val();
	contraseña = $("#contraseña_crea").val();
	repeat_contraseña = $("#rcontraseña").val();
	rol = $("#rol").val();
	estatus = $('#estatus').val();
	telefono = $('#telefono').val();
	usuarioid = $('#usuarioid').val();
	
	if (nombre == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Nombre de usuario<br />"
	}
	if (email == "") {
		contError ++;
		htm += contError+"- Debe ingresar el Email<br />"
	}
	/*else if(!validarEmail($("#email").val())){
		contError ++;
		htm += contError+"- Ingrese un correo valido<br />"
	}*/
	if (contraseña == "") {
		contError ++;
		htm += contError+"- Debe ingresar la contraseña<br />"
	}
	if (repeat_contraseña == "") {
		contError ++;
		htm += contError+"- Debe ingresar la contraseña de repetición<br />"
	}
	else if (contraseña != repeat_contraseña) 
	{
		contError ++;
		htm += contError+"- Las contraseñas no coinciden, favor revisar<br />"
	}
	if (rol=="") {
		contError ++;
		htm += contError+"- Debe seleccionar un rol<br />"
	}
	if (telefono = "") {
		contError ++;
		htm += contError+"- Debe ingresar su numero telefonico<br />"
	}
	
	if(contError > 0)
	{
		footer='<button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>';
		$("#"+idMTitulo).html('ERROR - Modificar Usuario');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
        contError =0;
	}
	else{
		msjError = "No pudimos realizar lo solicitado";
		urlIn = "../controlador/usuario.php";
		formalioID = "frm_1";
		srv="MODIFICAUSUARIO";
		var urlEnv = getDataJsonSbm(urlIn,formalioID,srv,msjError);
        //location.href = urlEnv;
		var lista_usuarios_url = $("#lista_usuarios_url").val();
		htm='<img src="../images/ok.png" style="width: 45px;" /> El Usuario fue modificado correctamente!';
		 footer='<button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadLocal();">Entendido</button>';
        
        $("#"+idMTitulo).html('Modificación de un usuario');
		$("#"+idMBody).html(htm);
		$("#"+idMFooter).html(footer);
	}
}







