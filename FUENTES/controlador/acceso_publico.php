<?php 
session_start();
include ('../c_sistema_util/util.php');
include ('../controlador/negUsuario.php');
include ('../modelo/dtUsuario.php');
include ('../modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}
if($acc == "DOINGRESO")
{
	$usuario	= $_REQUEST["usuario"];
	$password	= $_REQUEST["password"];
	negSistema::saveNavegacion("Navegacion","Intento de Acceso al administrador del sistema",0);
	$salida = negUsuario::validaUsuario($usuario,$password);
	if($salida == "OK")
	{
		negSistema::saveNavegacion("Navegacion","Acceso correcto al sistema [".$usuario."]",0);
	}else
	{
		negSistema::saveNavegacion("Navegacion","Acceso Incorrecto al sistema [".$usuario."]",0);
	}
	echo json_encode($salida);
	
}	
?>