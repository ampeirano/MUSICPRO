<?php 
session_start();
include ('../controlador/negUsuario.php');
include ('../modelo/dtUsuario.php');
include ('../modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}

if($acc == "CREAPERFIL")
{
	$descripcion 	= $_REQUEST["descripcion"];
	$nombre			= $_REQUEST["nombre"];
	$apps 			= "";
	
	if(isset($_REQUEST["apps"]))
	{
		$apps = $_REQUEST["apps"];
	}
	negUsuario::creaRol(strtoupper($nombre),strtoupper($descripcion),$apps);
}

if($acc == "EDITAPERFIL")
{
	$descripcion 	= $_REQUEST["descripcion"];
	$nombre			= $_REQUEST["nombre"];
	$apps 			= "";
	$perfilid 		= $_REQUEST["perfilid"];
	
	if(isset($_REQUEST["apps"]))
	{
		$apps = $_REQUEST["apps"];
	}
	negUsuario::editaRol(strtoupper($nombre),strtoupper($descripcion),$apps,$perfilid);
    echo json_encode("OK");
}

if($acc == "CREAUSUARIO")
{
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email_crea"];
    $contraseña = $_REQUEST["contraseña_crea"];
    $repeat_contraseña = $_REQUEST["rcontraseña"];
    $rol = $_REQUEST["rol"];
    $estatus = $_REQUEST['estatus'];
    $usuario_crea = $_SESSION["usuarioid"];
    $telefono = $_REQUEST["telefono"];
    
    negUsuario::creaUsuario($nombre,$email,$contraseña,$repeat_contraseña,$rol,strtoupper($estatus),$telefono,$usuario_crea);
    echo json_encode("OK");
}

if($acc == "MODIFICAUSUARIO")
{
    $usuarioid 			= $_REQUEST["usuarioid"];
    $nombre 			= $_REQUEST["nombre"];
    $email 				= $_REQUEST["email_crea"];
    $contraseña 		= $_REQUEST["contraseña_crea"];
    $repeat_contraseña 	= $_REQUEST["rcontraseña"];
    $rol 				= $_REQUEST["rol"];
    $estatus 			= $_REQUEST['estatus'];
    $usuario_crea 		= $_SESSION["usuarioid"];
    $telefono 			= $_REQUEST["telefono"];
    $apps 				= "";
    
    if(isset($_REQUEST["funcs"]))
    {
    	$apps = $_REQUEST["funcs"];
    }
    
    negUsuario::editaUsuario($nombre,$email,$contraseña,$repeat_contraseña,$rol,strtoupper($estatus),$telefono,$usuario_crea,$usuarioid,$apps);
    echo json_encode("OK");
}

?>

