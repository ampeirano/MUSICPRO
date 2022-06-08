<?php
include ('../c_sistema_util/mailin-smtp-api-master/Mailin.php');

class negSistema{
	
	
	public static function getAplicacionid($goModulo)
	{
		$ap =  dtSistema::getAplicacionid($goModulo);		
		return $ap[0]["aplicacionid"];
	}	
	public static function validaUsuario($correo,$clave)
	{
		//OLD
	}
	
	/**
	 * mailing::sendMail()
	 *
	 * @param mixed $cabeceraIn: puede ser '' o enviar formato [From: E-Learning <noreply@imaginasoft.cl>]
	 * @param mixed $to
	 * @param mixed $subjet
	 * @param mixed $body
	 * @return void
	 */
	public static function sendMail($cabeceraIn,$to,$subjet,$body)
	{
		/*$test = false;
		//$test = true;
		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$cabeceras .= "X-Priority: 3\n";
		$cabeceras .= "X-MSMail-Priority: Normal\n";
		$cabeceras .= "X-Mailer: php\n";
		
		if($cabeceraIn != '')
		{
			$cabeceras .= $cabeceraIn."\r\n";
		}else
		{
			$cabeceras .= 'From: Barometro <imagina@imaginasoft.cl' . "\r\n";
		}
		$mensaje = self::getHtmlMail($body);
		self::saveBitacoraByOpoeracion("mailing_bitacora","correo_to",$to,$_SESSION["IF-mail"],"Envia Correo ","to[".$to."] subjet [".$subjet."] mensaje[".$mensaje."] cabecera[".$cabeceras."]","1");
		if($test == false)
		{
			mail($to, utf8_decode($subjet), utf8_decode($mensaje), $cabeceras);
		}*/
	}
	public static function sendMailAutonmo($subjet,$body,$usuarioid)
	{
		/*$mailsTo = dtSistema::getUsuarioAdminMail();
		
		foreach ($mailsTo as $m)
		{
			self::sendMailSMTPSB($m["mail"],$subjet,$body,$usuarioid);
			
		}*/
	}
	
	public static function getHtmlMail($mensaje)
	{
		/*
		$html_r = '<html>
                    <head>
                    <style>
                body
                {
                    font-family:  sans-serif;
                    margin: 0;
                    font-size: 13px;
                    color: #524a4a;
                }
				
				
                .td_vista_curso_evalua
                {

				
                }
                .title
                {
                    font-size: 18px;
                    font-weight: bold;
                }
				
                    </style>
                    </head>
                    <body>
                        <table width="100%" >
                            <tr>
                                <td class="td_vista_curso_evalua">
                                    MENSAJE_A_ENVIAR
                                </td>
                            </tr>
                        </table>
                    </body>
                </html>';
		
		$html_r = str_replace("MENSAJE_A_ENVIAR",$mensaje,$html_r);
		
		return $html_r;
		*/
	} 
	
	public static function saveNavegacion($nota="Navegacion normal",$tipo='navegacion',$aplicacionid=0)
	{
		//self::saveBitacoraByOpoeracion("sistema_navegacion", "navegacionidWEB", session_id(), $_SESSION["IGT-usuarioid"], $tipo, $nota,$aplicacionid);
	}
	public static function saveBitacoraByOpoeracion($tbl,$id_name,$id,$usuario,$tipo,$detalle,$aplicacionid)
	{
		dtSistema::saveBitacoraByOpoeracion($tbl,$id_name,$id,$usuario,$tipo,$detalle,$aplicacionid);
	}
	
	public static function sendMailSMTPSB($to,$subjet,$body,$usuarioid)
    {
    	/*
    	//PARA AGERGAR CON COPIA OCULTA UTILIZAR addBcc('contacto@xxxx.cl','Nombre Empresa')->
    	$mensaje = self::getHtmlMail($body);
    	
    	$mailin = new Mailin('xxx', 'xxx');
    	$mailin->
    	addTo($to,'')->
    	setFrom('noreply@xxxxx.cl', 'Nombre')->
    	setSubject($subjet)->
    	setHtml($mensaje);
    	$res = $mailin->send();
    	
    	$RESULTADO =  json_encode($res);
    	
    	self::saveBitacoraByOpoeracion("sistema_mailing_bitacora","correo_to",$to,$usuarioid,"Envia Correo SB","salida[".$RESULTADO."] to[".$to."] subjet [".$subjet."] mensaje[".$mensaje."]",0);    	
    	*/
    }
    
    public static function getDatosSistemaEmpresa()
    {
    	return dtSistema::getDatosSistemaEmpresa();
    	
    }
    public static function getTotDenuncias()
    {
    	return dtSistema::getTotDenuncias();
    }
    public static function getTotDenunciasByUsuario($usuarioid)
    {
    	return dtSistema::getTotDenunciasByUsuario($usuarioid);
    }
    public static function getTotConsultas()
    {
    	return dtSistema::getTotConsultas();
    }
    public static function getTotConsultasByUsuario($usuarioid)
    {
    	return dtSistema::getTotConsultasByUsuario($usuarioid);
    }
    
}
?>