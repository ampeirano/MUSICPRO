<?php 
session_start();
include ('controlador/negSistema.php');
include ('../modelo/dtSistema.php');
include ('../modelo/DBFactory.php');


$acc = "";
if(isset($_REQUEST["acc"]))
{
	$acc = $_REQUEST["acc"];
}

if($acc == "VALUSR")
{
    $nombre_ambito = $_REQUEST["nombre_ambito"];
	//echo  json_encode(negSistema::validaUsuario($nombre_ambito)); 
}
if($acc == "SENDCLAVE")
{
	
	$to = $_REQUEST["para"];
	$subjet = "Bienvenido al sistema de educación preescolar";
	$body = $_REQUEST["mensaje"];
	$body = str_replace("\r", "<br/>", $body);
	//negSistema::sendMailSMTPSB($to,$subjet,$body);
}


?>